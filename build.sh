#!/bin/bash

#
# Copyright (C) 2019 Nethesis S.r.l.
# http://www.nethesis.it - nethserver@nethesis.it
#
# This script is part of NethServer.
#
# NethServer is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License,
# or any later version.
#
# NethServer is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with NethServer.  If not, see COPYING.
#

set -e

if [[ ${TRAVIS_EVENT_TYPE} == cron ]]; then
    echo "https://nethbot:${GITHUB_TOKEN}@github.com" > ~/.git-credentials
    git remote -v
    tx init --force-save --token "${TRANSIFEX_TOKEN:-x}" --skipsetup --no-interactive
    tx pull -a -f
    rm -f ~/.transifexrc

    # Extract the release number
    release=$(sed -n -r '/^Release: ([0-9]+)%/ { s/[^0-9]//g ; p}'  nethserver-lang.spec)
    version=$(sed -n -r '/^Version:/ { s/^Version: +// ; p}'  nethserver-lang.spec)
    if ((release <= 0)); then
        echo "[ERROR] invalid release number, build failed"
        exit 1
    else
        ((++release))
    fi
    echo "[NOTICE] creating release $release"

    changelog_timestamp=$(date +"%a %b %d %Y")
    tmp_changelog=$(mktemp)
    echo "* ${changelog_timestamp} nethbot <nethbot@nethesis.it> - ${version}-${release}" >> "${tmp_changelog}"
    echo -ne "- Automatic release $release\n\n" >> "${tmp_changelog}"

    sed -i -r \
        -e "/^Release/ s/[0-9]+%/ ${release}%/" \
        -e "/^%changelog/ r ${tmp_changelog}"  \
        nethserver-lang.spec

    git diff nethserver-lang.spec
    git status
    git add nethserver-lang.spec
    for PACKAGE in $(sed -n -r '/^%package / { s/%package // ; p }'  nethserver-lang.spec); do
        git add "language/${PACKAGE}*"
    done
    git commit --author="nethbot <nethbot@nethesis.it>" -m "Automatic release $release"$'\n\n'"[skip ci]"
    git tag ${version}r${release}
    git log --stat -n 1
    git push --follow-tags
fi

docker run -ti --name makerpms ${EVARS} \
    --hostname "b${TRAVIS_BUILD_NUMBER}.nethserver.org" \
    --volume "$PWD:/srv/makerpms/src:ro" "${DOCKER_IMAGE}" makerpms-travis -s nethserver-lang.spec \
&& docker commit makerpms nethserver/build \
&& docker run -ti ${EVARS} \
    -e SECRET \
    -e SECRET_URL \
    -e AUTOBUILD_SECRET \
    -e AUTOBUILD_SECRET_URL \
    nethserver/build uploadrpms-travis


