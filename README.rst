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

1. The ``create-tarball.sh`` script executes ``tx pull`` and produces
   the source tarball in the local directory: ::

     ./create-tarball.sh

2. Build RPMs: ::

     make-rpms nethserver-lang.spec


Push updated sources to Transifex
---------------------------------

TODO
   
