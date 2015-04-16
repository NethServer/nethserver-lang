======================
Backup (configuration)
======================

Execute and restore configuration backup.

Backup
======

Configuration backup contains only system configuration files.
This type of backup is executed only if any file is changed in the last 24 hours.

You can force the execution of a new backup using the *Backup now* button.
The backup will be overwritten only if necessary.

Restore
=======

Restore last configuration backup.

When restoring, choose one of the following options:

* Same hardware (also restore network configuration)
* Different hardware (network must be reconfigured)

The restore process will reconfigure the entire system.

.. raw:: html

   {{{INCLUDE NethServer_Module_BackupConfig_*.html}}}

