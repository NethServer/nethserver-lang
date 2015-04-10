#!/bin/bash

set -e

tarball=$(spectool -s 1 -l nethserver-lang.spec | sed 's/^.*: //')
tardir=$(basename -s .tar.gz ${tarball})

if [ -e ${tarball} ]; then
    echo "[NOTICE] ${tarball} already exists."
    exit 0;
fi

echo "[NOTICE] creating ${tarball}"
tx pull -a >/dev/null
tar cfvz ${tarball} locale
