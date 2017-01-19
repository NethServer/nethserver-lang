==============================
NethServer localization (l10n)
==============================

The localization process turns around the online tool Transifex. 

The `Transifex client`_, available as ``/usr/bin/tx`` command, is required. Some
Linux distributions have already packaged it.  For NethServer, it is
available from EPEL_. ::

     yum --enablerepo=epel install transifex-client
     yum install git

Edit ``~/.transifexrc``::

     [https://www.transifex.com]
     hostname = https://www.transifex.com
     password = <YOURPASSWORD>
     token =
     username = <YOURUSERNAME>


.. _`Transifex client`: http://docs.transifex.com/developer/client/
.. _`EPEL`: https://dl.fedoraproject.org/pub/epel/6/x86_64/repoview/transifex-client.html


Build localization packages
---------------------------

Preparing the environment:

* (Fork and) Clone the git repository into your machine::

     git clone https://github.com/NethServer/nethserver-lang.git

* Make sure ``nethserver-mock`` package is installed. It is available
  for NethServer and Fedora.


Build the RPMs:

1. Pull updates from Transifex: ::

     tx pull -a

1. (optional) clean up partially translated languages: ::

     git clean -f -d

2. Commit changes to git repository: ::

     git commit -a -m 'Pulled translation strings from Transifex'

3. Build RPMs: ::

     make-rpms nethserver-lang.spec

4. If everything is ok, do not forget to push the commit back to GitHub, and open a Pull Request: ::

     git push


Testing the translations
------------------------

The RPMs are uploaded to the ``nethserver-testing`` repository. The
official way to test them is::

     yum --enablerepo=nethserver-testing update nethserver-lang-de

If you want to check the translations before they are packaged, follow
this procedure on a NethServer **testing only machine**:

* Install the original language pack (for instance, ``de``) ::

     yum install nethserver-lang-de

* Clone this repository ::

     cd /srv
     git clone https://github.com/NethServer/nethserver-lang.git

* Pull latest strings from Transifex::

      cd /srv/nethserver-lang
      tx pull -a

* Create a symlink for your language (for instance, ``de``), that
  overrides the language pack ::

      cd /usr/share/nethesis/NethServer/Language
      mv de de.orig
      ln -s /srv/nethserver-lang/locale/de/server-manager de

.. warning:: This method works only for ``.php`` language
             catalogs. For instance online help files (from ``.rst``),
             ``.js`` and ``.mo`` files are not included.


Package developer
-----------------

Push updated sources to Transifex::

    tx push -s
   
Refer to Internationalization_ chapter on the Developer's Manual.

.. _Internationalization: http://docs.nethserver.org/projects/nethserver-devel/en/latest/i18n.html
