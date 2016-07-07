===============
Windows network
===============

Manage the server role in a Windows network.

Role
====

Select the server role within the network:
workstation, domain controller or Active Directory member.

Workstation
    Enabling this option the server will behave as a normal workstation.

Workgroup name
    The name of the network workgroup identifier, used only to browse the network.

Domain Controller
    Enabling this option the server will be configured as a domain controller for the network.

Domain
    The name of the domain.

Enable roaming profiles
    If enabled, the user profile is saved on the server. All user data will be always accessible,
    regardless of the computer on which the user is logged in.

Active Directory member
    The server becomes member of an existing Active Directory domain.
    The domain administrator password is needed.

Realm
    Active Directory real, for example: mydomain.local

Domain
    Name of the Active Directory domain.

LDAP accounts branch 
    Identifies the search base for groups and users in LDAP
    database. The value depends on how Active Directory is configured;
    a typical setting would be ``ou=People``. The domain
    components (DC) parts are appended automatically.

Active Directory authentication
-------------------------------

Enter the credentials to allow server to become a member
of an Active Directory domain.

Username
    Username of the Active Directory administrator.

Password
    Password of the Active Directory administrator.

