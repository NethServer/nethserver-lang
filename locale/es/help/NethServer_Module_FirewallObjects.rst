====================
Objetos del Firewall
====================

Objetos Firewall facilitan la creación de reglas de firewall.

Un objeto puede ser utilizado en cualquier número de regla.

Hosts
=====

Un host representa a una máquina con una dirección IP. Puede ser local ó remota.
Cuando las reglas se escriben en un archivo, el host se traducirá en su propia dirección IP.

Nombre
 
     Identificador de nombre para el host.

Dirección IP
 
     Dirección IP del host.

Descripción
 
     Descripción opcional.

Host groups
===========

A host group is a group of machines with an IP address.
Hosts in a group should be homogeneous.
For example, a list of hosts with public addresses, or
a group of machines inside the LAN.

Name
    Name identifier for the host group.

Members
   List of host object. Host objects must be created
   inside the Hosts tab before use inside a group.

Description
    Optional description.

CIDR subnets
============

A set of hosts inside a network expressed in CIDR format.

Examples:

* 10.0.0.0/24: 254 addresses, from 10.0.0.0 to 10.0.0.255
* 192.168.1.8/29: 6 addresses, from 192.168.1.8 to 192.168.1.15

Name
    Name identifier for the subnet.

Network
    Network in CIDR notation.

Description
    Optional description.

IP ranges
=========

A list of hosts inside a network expressed in IP range format.

Examples:

* 10.0.0.1-10.0.0.21: 21 hosts
* 192.168.1.8-192.168.1.10: 2 hosts

Name
    Name identifier for the range.

Start IP
    First IP of the range.

End IP
    Last IP of the range.

Description
    Optional description.


Services
========

A service is the representation of a network software responding
to a port with a specific protocol.
For example, SSH and DNS are services:

* SSH: protocol TCP, port 22
* HTTP: protocol UDP, port 53

Name
    Name identifier for the service.

Protocol
   Select one of the available protocols.

Ports
   An integer representing a port, or a list of integers separated by commas.

Description
    Optional description.

Zones
=====

A zone is a group of host identified with a network address in CIDR format (Classless Inter-Domain Routing).
For example, given the CIDR network 192.168.1.0/29, it represents all hosts
from 192.168.1.2 to 192.168.1.6, where 192.168.1.1 is the gateway and 192.168.1.7 is the broadcast.

Name
    Name identifier for the zone. Max 5 characters.

Network
    A network in CIDR format.

Interface
    The interface where the hosts are connected.

Description
    Optional description.
