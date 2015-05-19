%define _unpackaged_files_terminate_build 0
%define mmakedocs(l:) \
   make -f /usr/share/nethserver-devtools/docs.mk %{?-l:XML_LANG}=%{-l*}

Name: nethserver-lang
Version: 1.0.4
Release: 1%{?dist}
License: GPLv3
URL: https://github.com/NethServer/nethserver-lang
Summary: NethServer localization project

# This is extracted from the git repo by prep-sources:
Source0: %{name}-%{version}.tar.gz

BuildRequires: gettext
BuildRequires: nethserver-devtools
BuildArch: noarch

%description
NethServer localization project

%prep
%setup

%build


shopt -s nullglob

for D in locale/*; do
   [ -d "${D}" ] || continue
   L=$(basename ${D})
   lang=${L:0:2}

   pushd $D
   %{makedocs} XML_LANG=${lang}
   popd

   for F in $D/LC_MESSAGES/*.po; do
     msgfmt -v $F -o ${F%%.po}.mo
   done
done


%install

shopt -s nullglob

for D in locale/*; do
   [ -d "${D}" ] || continue
   L=$(basename ${D})
   lang=${L:0:2}
   if [[ "$L" == it ]]; then
      override="Override"
   else
      override=""
   fi
   grep -q COPYING ${lang}.lang || echo "%doc COPYING" >> ${lang}.lang

   LD=$D/LC_MESSAGES
   for F in $LD/*.mo; do
     install -m 0644 -D $F %{buildroot}/%{_datadir}/$F
     echo "%{_datadir}/$F" >> ${lang}.lang
   done

   # skip "en" catalogs for Server Manager
   if [[ "$L" == en ]]; then
      continue
   fi

   LD=$D/server-manager
   echo "%dir /usr/share/nethesis/${override:-NethServer}/Language/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-NethServer}/Language/$L
   for F in $LD/*.php; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-NethServer}/Language/$L/$(basename $F)
      echo "/usr/share/nethesis/${override:-NethServer}/Language/${lang}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/help
   echo "%dir /usr/share/nethesis/${override:-NethServer}/Help/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-NethServer}/Help/$L
   for F in $LD/*.html; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-NethServer}/Help/$L/$(basename $F)
      echo "/usr/share/nethesis/${override:-NethServer}/Help/${lang}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/nethgui
   echo "%dir /usr/share/nethesis/${override:-Nethgui}/Language/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-Nethgui}/Language/$L
   for F in $LD/*.php; do
       install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-Nethgui}/Language/$L/$(basename $F)
       echo "/usr/share/nethesis/${override:-Nethgui}/Language/$L/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/datepicker
   if [ -f "$LD/jquery.ui.datepicker-${lang}.js" ]; then
      install -m 0644 -D $LD/jquery.ui.datepicker-${lang}.js %{buildroot}/usr/share/nethesis/nethserver-manager/js/jquery.ui.datepicker-${lang}.js
      echo "/usr/share/nethesis/nethserver-manager/js/jquery.ui.datepicker-${lang}.js" >> ${lang}.lang
   fi
done

%package en
Summary: English support
BuildArch: noarch
%files en -f en.lang
%description en
NethServer English language support (en)

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
Summary: French support
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

%package pt
Summary: Portuguese support
BuildArch: noarch
%files pt -f pt.lang
%description pt
NethServer Portuguese language support (pt)

%package tr
Summary: Turkish support
BuildArch: noarch
%files tr -f tr.lang
%description tr
NethServer Turkish language support (tr)


%package sv
Summary: Swedish support
BuildArch: noarch
%files sv -f sv.lang
%description sv
NethServer Swedish language support (sv)


%changelog
* Tue May 19 2015 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.4-1
- jQuery DateTime l10n - Enhancement #3147 [NethServer]
- Password policy page - Feature #3125 [NethServer]
- Select rst2html output language - Enhancement #2654 [NethServer]

* Mon May 18 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.3-1
- Updated translations
- Added sv_SE language

* Mon May 04 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.2-1
- Added Turkish translations.
- Pulled changes: de fr pt

* Mon Apr 27 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.1-1
- Updated it, pt languages

* Thu Apr 23 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.0-1
- Language packs support - Feature #3115 [NethServer]

* Thu Apr 16 2015 Davide Principi <davide.principi@nethesis.it> - 0.0.1-1
- Initial version

