==============================
NethServer localization (l10n)
==============================

Initialize the environment
--------------------------

1. Clone this git repository into your machine::

     git clone https://github.com/NethServer/nethserver-lang.git

2. Install and configure the `Transifex client`_. Some Linux
   distributions have already packaged it.

3. Install ``nethserver-mock`` package (available for NethServer and
   Fedora).

.. _`Transifex client`: http://docs.transifex.com/developer/client/


Build localization packages
---------------------------

1. Pull updates from Transifex: ::

     tx pull -a

2. Commit changes to git repository: ::

     git commit -a -m 'Pulled translation strings from Transifex'

2. Build RPMs: ::

     make-rpms nethserver-lang.spec


Push updated sources to Transifex
---------------------------------

TODO
   
