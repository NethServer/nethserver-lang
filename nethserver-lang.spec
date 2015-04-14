%define _unpackaged_files_terminate_build 0

Name: nethserver-lang
Version: 0.0.1
Release: 1%{?dist}
License: GPLv3
URL: https://github.com/NethServer/nethserver-lang
Summary: NethServer localization project

# This is extracted from the git repo by prep-sources:
Source0: %{name}-%{version}.tar.gz

BuildRequires: gettext
BuildArch: noarch

%description
NethServer localization project

%prep
%setup

%build
for LD in locale/*/LC_MESSAGES; do
   for F in $LD/*.po; do
     msgfmt -v $F -o ${F%%.po}.mo
   done
done

%install
for LD in locale/*/LC_MESSAGES; do
   lang=$(basename $(dirname $LD))
   rm -f ${lang}.lang
   echo "%doc COPYING" >> ${lang}.lang
   for F in $LD/*.mo; do
     install -D $F %{buildroot}/%{_datadir}/$F
     echo "%{_datadir}/$F" >> ${lang}.lang
   done
done

for LD in locale/*/server-manager; do
   lang=$(basename $(dirname $LD))
   for F in $LD/*.php; do
      install -D $F %{buildroot}/usr/share/nethesis/NethServer/Language/${lang}/$(basename $F)
      echo "/usr/share/nethesis/NethServer/Language/${lang}/$(basename $F)" >> ${lang}.lang
   done
done

for F in locale/*/nethgui/Nethgui.php; do
   if ! [ -f  $F ]; then
       echo "[WARNING] Missing Nethgui translation $F" 1>&2 
       continue
    fi
    lang=$(basename $(dirname $(dirname $F)))   
    install -D $F %{buildroot}/usr/share/nethesis/Nethgui/Language/${lang}/Nethgui.php
    echo "/usr/share/nethesis/Nethgui/Language/${lang}/Nethgui.php" >> ${lang}.lang
done

%package it
Summary: Italian support
BuildArch: noarch
%files it -f it.lang
%description it
NethServer Italian language support (it)

%package de
Summary: German support
BuildArch: noarch
%files de -f de.lang
%description de
NethServer German language support (de)

%package el
Summary: Greek support
BuildArch: noarch
%files el -f el.lang
%description el
NethServer Greek language support (el)

%package es
Summary: Spanish support
BuildArch: noarch
%files es -f es.lang
%description es
NethServer Spanish language support (es)

%package fr
Summary: Greek support
BuildArch: noarch
%files fr -f fr.lang
%description fr
NethServer French language support (fr)

%package hu
Summary: Hungarian support
BuildArch: noarch
%files hu -f hu.lang
%description hu
NethServer Hungarian language support (hu)

%package nl
Summary: Dutch support
BuildArch: noarch
%files nl -f nl.lang
%description nl
NethServer Dutch language support (nl)

%package ru
Summary: Russian support
BuildArch: noarch
%files ru -f ru.lang
%description ru
NethServer Russian language support (ru)

%changelog
* Fri Apr 10 2015 Davide Principi
- Initial version
