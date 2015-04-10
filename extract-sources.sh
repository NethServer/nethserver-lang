#!/bin/bash

base_dir=${1:-.}

exec 2>/dev/null

for D in ${base_dir}/*.git; do
    GIT_DIR=$D git archive --format=tar master root/usr/share/nethesis/NethServer/Language/en | tar -C src/server-manager/strings -x --strip-components 7 -f - 
    GIT_DIR=$D git archive --format=tar master locale/ | tar -C src/gettext -x -f - --strip-components 1 --no-wildcards-match-slash 'locale/*.pot'  
done

GIT_DIR=${base_dir}/nethserver-nethgui.git git archive --format=tar master Nethgui/Language/en | tar -C src/nethgui/strings -x --strip-components 3 -f - 
