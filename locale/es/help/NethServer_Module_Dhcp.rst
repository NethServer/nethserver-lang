====
DHCP
====

El DHCP (Dynamic Host Configuration Protocol) permite asignar direcciones IP
a los clientes de la red local

Servidor
========

Configurar el servidor DHCP.

Desactivado
    El servidor DHCP estará desactivado y los clientes de LAN no recibirán direcciones IP de forma 
    automática por este servidor. Seleccionar esta opción si hay otro servidor DHCP en su red local.

Activado
    El servidor emitirá direcciones IP a los clientes de la red local (recomendado).

Rango inicial
    La primera dirección IP en el rango asignado a los clientes en la red local.

Rango final
    La última dirección IP del rango, aborda entre inicio y fin para ser asignado a los clientes de la red local.

Reserva
=======

Crear / Modificar
-----------------

Agrega una nueva asignación estática (reserva) para el servidor DHCP. El
dispositivo con la dirección MAC especificada siempre recibirá la dirección IP especificada.

Nombre de host
    El nombre de host que desea asignar a los clientes en la red local con la dirección IP especificada.

Descripción
    Una descripción opcional para identificar en el sistema.

Dirección IP
    La dirección IP que desea asignar.

Dirección MAC
    La dirección MAC del sistema de red (por ejemplo,
    11:22:33:44:55:66:77:88).
