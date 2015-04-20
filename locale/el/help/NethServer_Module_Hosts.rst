===
DNS
===

The DNS (Domain Name System) is responsible for Domain Name Resolution
(eg www.nethesis.it) into their corresponding numerical IP addresses
(Eg. 10.11.12.13) and vice versa. The server delegates the resolution of
names to the configured DNS servers, but you can specify addresses
for arbitrary selected names. For example, you can configure the
system for responding to requests for facebook.com with the IP address 
0.0.0.0, achieving the effect of making the Facebook site unreachable.


DNS servers
===========

Configure addresses of the DNS servers that
the server will contact to resolve names.

Primary DNS
    The address of the primary server to contact for resolving names (mandatory).

Secondary DNS
    The address of the secondary server to be contacted in case the primary is not responding (optional).

Hosts
=====

Create / Modify
---------------

Click Create to assign a host name to an IP address. The
server will return the IP address configured for requests of its name.


Host Name
    The domain name, for example www.nethesis.it. It's possible to create
    names for the local domain, which is useful for giving a mnemonic name to
    devices configured with static IP or for any domain,
    which take precedence over the provider's DNS server (see
    facebook.com example above).

IP Address
    The IP address of the host name.

Description
    An optional comment for the host name (example:
    "Block facebook" or "video server").

Server alias
============

Aliases are alternate names for this server. For example, if the
name of the server is *server.mycompany.com*, an alias may be
*mail.mycompany.com*. The server will use its own IP address
for the alias name.

Create / Modify
---------------

Allows you to create a new alias for this server.

Host Name
    The host name that you want to add or modify. It can contain only
    letters, numbers and hyphens, and must begin with a letter or a number.

Description
    An optional description useful to identify the alias.
