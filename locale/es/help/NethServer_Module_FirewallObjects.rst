====================
Objetos del Firewall
====================

Los objetos del Firewall facilitan la creación de reglas en el firewall.

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


Grupos de hosts
===============

Un grupo de hosts es un grupo de máquinas con una dirección IP. Los hosts de un grupo deben ser homogéneos.
Por ejemplo, una lista de hosts con direcciones públicas, o un grupo de máquinas dentro de la red local.

Nombre

    Identificador de nombre para el grupo anfitrión.

Miembros

   Lista de objeto host. Los objetos de host deben crearse dentro de la pestaña Hosts antes de su uso dentro de un grupo.

Descripción
    
    Descripción opcional.

Subredes CIDR
=============

Un conjunto de hosts dentro de una red expresada en formato CIDR.

Ejemplos:

* 10.0.0.0/24: 254 direcciones de 10.0.0.0 a 10.0.0.255
* 192.168.1.8/29: 6 direcciones de 192.168.1.8 a 192.168.1.15

Nombre

    Nombre identificador de la subred.

Red

    Red en la notación CIDR.

Descripción

    Descripción opcional.

Rangos de IP
============

Una lista de los hosts dentro de una red expresada en formato de rango de IP.

Ejemplos:

* 10.0.0.1-10.0.0.21: 21 hosts
* 192.168.1.8-192.168.1.10: 2 hosts

Nombre

    Identificador de nombre para el rango.

IP Inicio

    Primera IP del rango.

IP Final

    Última IP del rango.

Descripción

    Descripción opcional.


Servicios
=========

Un servicio es la representación de un software de red que responde a un puerto con un protocolo específico.

Por ejemplo, SSH y DNS son servicios:

* SSH: protocolo TCP, puerto 22
* HTTP: UDP protocolo, puerto 53

Nombre

    Identificador de nombre para el servicio.

Protocolo

   Seleccione uno de los protocolos disponibles.

Puertos

   Un numero entero que representa a un puerto, ó a una lista de números enteros separados por comas.

Descripción

    Descripción opcional.

Zonas
=====

Una zona es un grupo de host identificado con una dirección de red en formato CIDR (Classless Inter-Domain Routing).

Por ejemplo, dada la red CIDR 192.168.1.0/29, que representa a todos los hosts desde 192.168.1.2 a 192.168.1.6,
192.168.1.1, donde es la puerta de entrada y 192.168.1.7 es la salida.

Nombre

    Nombre identificador para la zona. Max 5 caracteres.

Red

    Una red en formato CIDR.

Interfaz

    La interfaz donde se conectan los hosts.

Descripción
    
    Descripción opcional.
