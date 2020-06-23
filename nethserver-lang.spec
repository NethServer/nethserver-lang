%define _unpackaged_files_terminate_build 0
%define mmakedocs(l:) \
   make -f /usr/share/nethserver-devtools/docs.mk %{?-l:XML_LANG}=%{-l*}

Name: nethserver-lang
Version: 1.4.4
Release: 6%{?dist}
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

# Compress Cockpit language catalogs:
find ./ui/ -name '*.json' -exec gzip '{}' \;

%install

shopt -s nullglob

for D in locale/*; do
   [ -d "${D}" ] || continue
   L=$(basename ${D})
   lang=${L:0:2}
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
   echo "%dir /usr/share/nethesis/NethServer/Language/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/NethServer/Language/$L
   for F in $LD/*.php; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/NethServer/Language/$L/$(basename $F)
      echo "/usr/share/nethesis/NethServer/Language/${L}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/help
   echo "%dir /usr/share/nethesis/NethServer/Help/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/NethServer/Help/$L
   for F in $LD/*.html; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/NethServer/Help/$L/$(basename $F)
      echo "/usr/share/nethesis/NethServer/Help/${lang}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/nethgui
   echo "%dir /usr/share/nethesis/Nethgui/Language/$L" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/Nethgui/Language/$L
   for F in $LD/*.php; do
       install -m 0644 -D $F %{buildroot}/usr/share/nethesis/Nethgui/Language/$L/$(basename $F)
       echo "/usr/share/nethesis/Nethgui/Language/$L/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/datepicker
   if [ -f "$LD/jquery.ui.datepicker-${lang}.js" ]; then
      install -m 0644 -D $LD/jquery.ui.datepicker-${lang}.js %{buildroot}/usr/share/nethesis/nethserver-manager/js/jquery.ui.datepicker-${lang}.js
      echo "/usr/share/nethesis/nethserver-manager/js/jquery.ui.datepicker-${lang}.js" >> ${lang}.lang
   fi

   if [ -f "$D/datatable.json" ]; then
      install -m 0644 -D $D/datatable.json %{buildroot}/usr/share/nethesis/nethserver-manager/js/datatable-${L/_/-}.json
      echo "/usr/share/nethesis/nethserver-manager/js/datatable-${L/_/-}.json" >> ${lang}.lang
   fi
done

#
# Install Cockpit UI language catalogs (JSON format)
#
for D in ./ui/* ; do
    APP=$(basename $D)
    for F in $D/language.*.json.gz ; do
        FILE=$(basename $F)
        lang="${FILE%%.json.gz}"
        lang="${lang##language.}"
        lang="${lang:0:2}"
        lang="${lang,}"
        install -m 0644 -D "$F" "%{buildroot}/usr/share/cockpit/${APP}/i18n/${FILE}"
        echo "/usr/share/cockpit/${APP}/i18n/${FILE}" >> cockpit.lang
    done
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
NethServer Portuguese (European and Brazilian) language support (pt)

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

%package cs
Summary: Czech support
BuildArch: noarch
%files cs -f cs.lang
%description cs
NethServer Czech language support (cs)

%package sr
Summary: Serbian support
BuildArch: noarch
%files sr -f sr.lang
%description sr
NethServer Serbian language support (sr)

%package ro
Summary: Romanian support
BuildArch: noarch
%files ro -f ro.lang
%description ro
NethServer Romanian language support (ro)

%package cockpit
Summary: Cockpit translations
BuildArch: noarch
%files cockpit -f cockpit.lang
%description cockpit
Cockpit translstions for all languages.

%changelog
* Tue Jun 23 2020 nethbot <nethbot@nethesis.it> - 1.4.4-6
- Automatic release 1.4.4-6

* Sat May 23 2020 nethbot <nethbot@nethesis.it> - 1.4.4-5
- Automatic release 1.4.4-5

* Thu Apr 23 2020 nethbot <nethbot@nethesis.it> - 1.4.4-4
- Automatic release 1.4.4-4

* Mon Mar 23 2020 nethbot <nethbot@nethesis.it> - 1.4.4-3
- Automatic release 1.4.4-3

* Sun Feb 23 2020 nethbot <nethbot@nethesis.it> - 1.4.4-2
- Automatic release 1.4.4-2

* Tue Jan 28 2020 Davide Principi <davide.principi@nethesis.it> - 1.4.4-1
- Httpd: Vhost name is not displayed with French translation - Bug NethServer/dev#6041

* Thu Jan 23 2020 nethbot <nethbot@nethesis.it> - 1.4.3-3
- Automatic release 1.4.3-3

* Mon Dec 23 2019 nethbot <nethbot@nethesis.it> - 1.4.3-2
- Automatic release 1.4.3-2

* Tue Nov 26 2019 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.4.3-1
- Pull translations from transifex

* Sat Nov 23 2019 nethbot <nethbot@nethesis.it> - 1.4.2-3
- Automatic release 1.4.2-3

* Wed Oct 23 2019 nethbot <nethbot@nethesis.it> - 1.4.2-2
- Automatic release 1.4.2-2

* Thu Oct 10 2019 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.4.2-1
- Cockpit: improve English labels - NethServer/dev#5856
- Pull translations from Transifex

* Mon Oct 07 2019 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.4.1-1
- Pull strings from Transifex for NS 7.7 release

* Tue Oct 01 2019 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.4.0-1
- Add missing cockpit modules
- Separate Cockpit language pack to nethserver-lang-cockpit package

* Mon Sep 23 2019 nethbot <nethbot@nethesis.it> - 1.3.0-10
- Automatic release 1.3.0-10

* Fri Sep 20 2019 nethbot <nethbot@nethesis.it> - 1.3.0-9
- Automatic release 1.3.0-9

* Wed Sep 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-8
- Automatic release 1.3.0-8

* Sun Aug 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-7
- Automatic release 1.3.0-7

* Thu Jul 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-6
- Automatic release 1.3.0-6

* Tue Jun 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-5
- Automatic release 1.3.0-5

* Sat May 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-4
- Automatic release 1.3.0-4

* Thu Apr 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-3
- Automatic release 1.3.0-3

* Mon Mar 18 2019 nethbot <nethbot@nethesis.it> - 1.3.0-2
- Automatic release 1.3.0-2

* Thu Feb 21 2019 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.19-1
- Pull strings from Transifex

* Mon Jan 28 2019 Davide Principi <davide.principi@nethesis.it> - 1.2.18-1
- Pull strings from Transifex

* Mon Dec 10 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.17-1
- Pull strings from Transifex

* Wed Nov 14 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.16-1
- Pull strings from Transifex

* Wed Oct 03 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.15-1
- Pull strings from Transifex

* Mon Sep 03 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.14-1
- Pull strings from Transifex

* Wed Jul 18 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.13-1
- Pull strings from transifex
- Fixed nethserver.NethServer_Module_TcClasses path

* Tue Jun 26 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.12-1
- Pull strings from Transifex

* Wed May 16 2018 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.11-1
- Release for NS 7.5

* Thu Apr 26 2018 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.10-1
- Add Mattermost resource
- Add Getmail resource

* Wed Apr 11 2018 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.9-1
- Add missing proxy modules

* Wed Apr 11 2018 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.8-1
- Add hotspot and mattermost
- Updated language strings

* Mon Mar 19 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.7-1
- Implement clients for NethServer Subscriptions - NethServer/dev#5425

* Fri Feb 16 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.6-1
- Updated language strings

* Tue Jan 23 2018 Davide Principi <davide.principi@nethesis.it> - 1.2.5-1
- Pull strings from Transifex

* Mon Dec 11 2017 Davide Principi <davide.principi@nethesis.it> - 1.2.4-1
- Pull strings from Transifex

* Mon Oct 23 2017 Davide Principi <davide.principi@nethesis.it> - 1.2.3-1
- Updated translations

* Mon Sep 11 2017 Davide Principi <davide.principi@nethesis.it> - 1.2.2-1
- Pull strings from Transifex

* Tue Jul 25 2017 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.2.1-1
- Add missing DiagTools and mail resources
- Updated language strings

* Wed Jul 12 2017 Davide Principi <davide.principi@nethesis.it> - 1.2.0-1
- Backup config history - NethServer/dev#5314

* Wed Jun 28 2017 Davide Principi <davide.principi@nethesis.it> - 1.1.12-1
- Add Romanian translation
- Pull strings from Transifex

* Tue Jun 13 2017 Davide Principi <davide.principi@nethesis.it> - 1.1.11-1
- Pull strings from Transifex

* Wed May 10 2017 Davide Principi <davide.principi@nethesis.it> - 1.1.10-1
- Accounts provider guided configuration - NethServer/dev#5253

* Mon Apr 03 2017 Davide Principi <davide.principi@nethesis.it> - 1.1.9-1
- Pull strings from Transifex

* Tue Feb 14 2017 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.8-1
- Updated language strings

* Mon Jan 30 2017 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.7-1
- Update language strings

* Fri Dec 16 2016 Davide Principi <davide.principi@nethesis.it> - 1.1.6-1
- New SssdConfig module translations
- Update language strings

* Thu Oct 20 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.5-1
- Added PhoneHome resource
- Updated language strings

* Wed Sep 28 2016 Davide Principi <davide.principi@nethesis.it> - 1.1.4-1
- Fixed missing Smarthost MailAccount DomainController Mail Ndpi resources
- Updated language strings

* Thu Sep 01 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.3-1
- Missing i18n labels - Bug NethServer/dev#5094

* Mon Aug 29 2016 Davide Principi <davide.principi@nethesis.it> - 1.1.2-1
- Updated strings from Transifex
- Removed old catalogs

* Fri Jul 08 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.1-1
- Merged latest modifications from NS 6
- Added Serbian language

* Thu Jul 07 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.1.0-1
- First NS7 release

* Fri Apr 01 2016 Davide Principi <davide.principi@nethesis.it> - 1.0.20-1
- Updated strings
- Portuguese Brazil pt-BR support
- Czech cs_CZ support

* Thu Mar 03 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.19-1
- Pulled language strings from Transifex

* Thu Feb 18 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.18-1
- Pulled language strings from Transifex
- Update inline help for web filter whitelist. Refs #3354

* Mon Jan 18 2016 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.17-1
- Release 1.0.17

* Fri Dec 04 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.16-1
- Specify network interfaces for ntopng - Enhancement #3325 [NethServer]
- Builtin filter rules for squidguard - Feature #3320 [NethServer]
- Dnsmasq: drop bind-interfaces implementation - Enhancement #3220 [NethServer]
- Firewall: web interface for policy routing - Feature #2809 [NethServer]
- Public IP text field for OpenVPN - Enhancement #2635 [NethServer]
- Mail to fax - Feature #1612 [NethServer] 

* Mon Nov 16 2015 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.15-1
- Updated Multi WAN labels

* Thu Oct 15 2015 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.14-1
- Removed NethServer_Module_FlashStart files

* Tue Oct 13 2015 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.13-1
- Added WebTop strings
- Removed unused files

* Tue Sep 29 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.12-1
- Make Italian language pack optional - Enhancement #3265 [NethServer]

* Wed Sep 16 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.11-1
- Updated de, el, es, fr, hu, it, nl, pt, ru, sv, tr languages.

* Fri Aug 28 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.10-1
- Updated ru strings and it help files (ntopng, DHCP)

* Wed Jul 15 2015 Giacomo Sanchietti <giacomo.sanchietti@nethesis.it> - 1.0.9-1
- Pulled strings from Transifex
- Added NethServer_VPN_IPsecTunnels translations
- Added NethServer_VPN_IPsecTunnels inline help

* Mon Jul 06 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.8-1
- Pulled strings from Transifex
- Updated Italian help file for Email page

* Wed Jun 24 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.7-1
- Strings update

* Wed Jun 17 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.6-1
- RPM conflicts with nethserver-lang-es - Bug #3187 [NethServer]
- Spanish Help translations

* Thu Jun 04 2015 Davide Principi <davide.principi@nethesis.it> - 1.0.5-1
- Pulled translations from Transifex

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

