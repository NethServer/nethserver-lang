===
FTP
===

The module enables/disables the FTP server and configures the virtual users.

Users
=====

Create or edit
--------------

Create or edit a virtual user.
A virtual user is not a system user and can access only the FTP server.

User name
    The name of virtual user.
    It can contain only lowercase letters, numbers, dashes, dots, and underscore (_)
    and must start with a lowercase letter. 
    For example, "luisa", "jsmith" and "liu-jo" is a valid user name, and "4Friends", "Franco Blacks" and "aldo / mistake" are not.

Password
    The password of virtual user. The password is sent in clear text from the client.

Chroot user on home directory
    If enabled, the user can access only his own FTP home.
    The FTP home is placed in ``/var/lib/nethserver/ftp/<user>``.
    If disabled, the user can access all the filesystem. This is  highly *discouraged*.

Custom chroot directory
    The user can access only the selected directory.

    This function can be used to grant access to users directly inside a shared folder.
    Enter the shared folder path ``/var/lib/nethserver/ibay/<name>``
    where ``<name>`` is the name of shared folder.

Enabled/Disabled
    The user can be enabled or disabled.

Description
    Optional user's description.
    For example: Access for the company site.

