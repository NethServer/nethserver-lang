============
Port forward
============

Use this panel to change firewall rules, i.e. to open a specific port
(or a range of ports) on the server and forward the traffic from a
port to another.  Port forwarding rules allow access to hosts on the
local network from the Internet.

Create / Modify
===============

Source port
    Insert the port open on the public IP.

Destination port
    Insert the port on the internal host which will be destination of the traffic.

Destination host
    Select the internal machine where traffic will be redirected.

Allow only
    Allow traffic forward only from some networks or hosts.
    Insert a comma-separated list of IP addresses or networks in CIDR format.

Description
    Optional description of port forwarding rule.

Enable / Disable
====================

Port forwarding rules are enabled by default on
creation. You can temporarily enable/disable them
using this button

Haripin NAT
============

Enable Hairpin NAT to make all port forwards available from local network.
