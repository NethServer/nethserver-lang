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
shopt -s nullglob

if [[ "${TRAVIS_EVENT_TYPE}" == "cron" && "${TRAVIS_BRANCH}" == "master" ]]; then
    cat > ~/.transifexrc <<EOF
[https://www.transifex.com]
api_hostname = https://api.transifex.com
hostname = https://www.transifex.com
password = ${TRANSIFEX_TOKEN:-secret}
username = api

EOF
    tx pull --parallel --no-interactive -f -a
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
    echo "[NOTICE] creating release ${version}-${release}"

    changelog_timestamp=$(date +"%a %b %d %Y")
    tmp_changelog=$(mktemp)
    echo "* ${changelog_timestamp} nethbot <nethbot@nethesis.it> - ${version}-${release}" >> "${tmp_changelog}"
    echo -ne "- Automatic release ${version}-${release}\n\n" >> "${tmp_changelog}"

    sed -i -r \
        -e "/^Release/ s/ [0-9]+%/ ${release}%/" \
        -e "/^%changelog/ r ${tmp_changelog}"  \
        nethserver-lang.spec

    tag="${version}r${release}"
    git config user.email "nethbot@nethesis.it"
    git config user.name "nethbot"
    git diff nethserver-lang.spec
    git add -v nethserver-lang.spec
    for PACKAGE in $(sed -n -r '/^%package / { s/%package // ; p }'  nethserver-lang.spec); do
        git add -v locale/${PACKAGE}*
    done
    git add -v ui/\*.json
    git commit -m "Automatic release ${version}-${release}"$'\n\n'"[skip ci]"
    git tag "${tag}"
    git show --dirstat
    echo "https://nethbot:${GITHUB_TOKEN}@github.com" > ~/.git-credentials
    git config credential.helper store
    git push origin HEAD:master "${tag}"
    rm -f ~/.git-credentials
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
