.. _nethserver-lang-module:

nethserver-lang
===============

The localization process turns around the Transifex online tool. 

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

Refer also to :ref:`section-i18n` in the Developer's Manual.

.. _`Transifex client`: http://docs.transifex.com/developer/client/
.. _`EPEL`: https://dl.fedoraproject.org/pub/epel/6/x86_64/repoview/transifex-client.html


Building a release RPM
----------------------

Periodic builds of the RPM are **started automatcally at Travis CI**. See
:ref:`nethserver-makerpms-module` in the Developer's Manual for more information
about the automated builds on Travis CI.

According to the ``.travis.yml`` and ``build.sh`` scripts, the build procedure pulls translations
of existing catalogs from Transifex, creates, adds a release tag and pushes a git commit and tag.
Then starts the build of a new RPM that is published in the ``updates`` repository.

As alternative, a release commit can be manually prepared with the :releasetag-section: command, as for
other ``nethserver-*`` packages. ::

    $ releasetag -T X.Y.Z
    ...edit the changelog entry
    $ git push --follow-tags

The manual procedure is still useful when new resources are added to ``.tx/config``.
See the :ref:`adding-new-resources-section` section below.

Building RPMs for testing
-------------------------

To manually build the RPMs for testing prepare the build environment:

* Install a build environment as described in
  `Building RPMs <https://docs.nethserver.org/projects/nethserver-devel/en/latest/building_rpms.html>`_.

* (Fork and) Clone the git repository into your machine::

     git clone https://github.com/NethServer/nethserver-lang.git

Then run this workflow with :ref:`nethserver-makerpms-module`:

1. Pull updates from Transifex: ::

     tx pull -a

2. (optional) clean up partially translated languages: ::

     git add <files for new configurations just added to .tx/config>
     git clean -f -d

3. Commit changes to git repository: ::

     git commit -a -m 'Pulled translation strings from Transifex'

4. Build RPMs: ::

     makerpms nethserver-lang.spec

5. If everything is ok, do not forget to push the commit back to GitHub, and open a Pull Request: ::

     git push

.. _adding-new-resources-section:

Adding new resources
--------------------

After the developer has pushed sources to Transifex,
the new resources must be added here, inside the ``.tx/config`` file.

For Cockpit resources, refer to
https://nethserver.github.io/nethserver-cockpit/i18n/#translations-packages

For for PHP resources add to ``.tx/config`` a section like this :: 

  [nethserver.MyModule]
  file_filter = locale/<lang>/server-manager/NethServer_Module_MyModule.php
  source_file = locale/en/server-manager/NethServer_Module_MyModule.php
  source_lang = en
  type = PHP_ALT_ARRAY

Then retrieve all files: ::

  tx pull -r nethserver.MyModule -a

Finally, add all files to the repository: ::

  git add *NethServer_Module_MyModule*

And push the commit and open a Pull Request on GitHub ::

  git push
