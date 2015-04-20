==============
POP3 connector
==============

External email addresses are mailboxes that
are checked at regular intervals using the **POP3** or **IMAP4** protocol.
Messages contained in the mailbox are downloaded and delivered to
local users or groups, as per configuration in 
this form.

Accounts
========

Configure the list of external addresses and the association with the user of the system.

Create / Modify
---------------

Create or edit an external address.

Email
    The external email address to check.

Protocol
    The protocol used to access the remote server. It can be *POP3* or *IMAP4* (recommended).

Server Address
    Host name or IP address of the remote server.

Username
    Username used for authentication to the remote system.

Password
    The password used to authenticate.

Account
    Select the user or group that will receive the downloaded messages. 

Enable SSL
    Enable encryption of the connection with the remote server.

Delete messages downloaded
    If enabled, downloaded messages will be deleted from the remote server (recommended). Leave disabled to keep
    a copy on remote server.

Delete
-------

Deleting an account will *not* delete the messages already delivered.


Download now
------------

Immediately starts the download from all external addresses.


General
========

Enable
    Allows you to enable or disable the Fetchmail daemon that
    downloads emails from external addresses.

Check every
    Frequency of checking for new messages on the external addresses.
    It is recommended an interval of at least 15 minutes.
