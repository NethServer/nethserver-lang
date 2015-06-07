================================
Administración de ancho de banda
================================

El gestor de ancho de banda le permite cambiar las prioridades para el tráfico a través del firewall 
(que debe tener al menos dos interfaces de red).

General
=======

Activa o desactiva la gestión de ancho de banda.


Reglas de interfaz
==================

Para cada interfaz en la que desea administrar la prioridad de ancho de banda es
necesario especificar la cantidad máxima de ancho de banda disponible en
direcciones salientes y entrantes. No hay datos que se transmitan a una velocidad
sobre la configurada. Es imprescindible utilizar los valores reales,
medido preferiblemente con pruebas de velocidad, en particular para la banda en
cargar (saliente). La tabla muestra los valores configurados en cada
interfaz, lo que le permite modificar los límites de ancho de banda.

Crear/Modificar
---------------

Crear una configuración de límites de ancho de banda de la interfaz.

Interfaz

    Seleccione la interfaz a la que se le aplica los límites de ancho de banda.
     En general, el ancho de banda está limitado sólo en las interfaces WAN.

Ancho de banda entrante (kbps)

    Ajuste la cantidad de ancho de banda de entrada (descarga).

Ancho de banda de salida (kbps)

    Ajuste la cantidad de ancho de banda de salida (carga).

Descripción

    Una nota opcional (por ejemplo: ADSL 1280/256).


Reglas de direcciones
=====================

La tabla muestra la lista de hosts o zonas de red que tienen
reglas de prioridad personalizados. Por ejemplo, usted puede decidir que el tráfico
de un equipo específico en la red local tiene una prioridad baja o
alto en comparación con otros.


Crear/Modificar
---------------

Dirección IP origen

     Seleccione un host o zona de la red.

Descripción

     Una descripción opcional para identificar
     claramente el propósito de la regla. Por ejemplo,
     *Alta prioridad para el jefe*.

Reglas de puerto
================

La tabla muestra la lista de puertos TCP/UDP que tienen reglas con
prioridad personalizado. Por ejemplo, puede especificar que el
el tráfico en un servicio de red en particular (con origen o destino
un puerto en particular) tiene una prioridad alta o baja
en comparación con el tráfico de red normal.


Crear
-----

Puerto

    Especifique el puerto utilizado por el servicio de red.

Protocolo

    Introduzca el protocolo IP.

Descripción

    Una descripción opcional que establece claramente la finalidad de la norma. Por ejemplo,
    *Servicio FTP*.
