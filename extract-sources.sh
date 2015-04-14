#!/bin/bash

base_dir=.

function exit_error {
   echo $1 >&2
   exit 1
}

function help {
   echo "Usage: $0 -f" >&2
   echo '
             -f        run git fetch before extracting sources
             -d dir    search git repositories under the given dir
' >&2
}


while getopts "d:f" opt; do
    case $opt in
	f)
	    fetch=1
	    ;;
	d)
	    base_dir=$OPTARG
	    ! [ -d "${base_dir}" ] && exit_error "Invalid directory ${base_dir}"
	    ;;
	h)
	    help
	    exit 0
	    ;;
	\?)
	    help
	    exit_error "Invalid option: -$OPTARG"
	    ;;
    esac
done

exec 2>/dev/null

for D in ${base_dir}/*.git; do
    echo $D
    [ -n "${fetch}" ] && GIT_DIR=$D git fetch -p >/dev/null
    GIT_DIR=$D git archive --format=tar HEAD root/usr/share/nethesis/NethServer/Language/en | tar -C src/server-manager/strings -x --strip-components 7 -f -
    GIT_DIR=$D git archive --format=tar HEAD root/usr/share/nethesis/NethServer/Help/en | tar -C src/server-manager/help -x --strip-components 7 -f -
    GIT_DIR=$D git archive --format=tar HEAD locale/ | tar -C src/gettext -x -f - --strip-components 1 --no-wildcards-match-slash 'locale/*.pot'
done

echo ${base_dir}/nethserver-nethgui.git
[ -n "${fetch}" ] && GIT_DIR=${base_dir}/nethserver-nethgui.git git fetch -p
GIT_DIR=${base_dir}/nethserver-nethgui.git git archive --format=tar HEAD Nethgui/Language/en | tar -C src/nethgui/strings -x --strip-components 3 -f -
