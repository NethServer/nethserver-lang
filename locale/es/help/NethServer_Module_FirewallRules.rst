======================
Las reglas de firewall
======================

Las reglas de firewall describen lo que está permitido o bloqueado en el tráfico de la red.

Los paquetes que atraviesan las zonas del firewall se analizan en consecuencia a las reglas existentes.

La primera regla que coincide con los criterios se aplica.

Desde la página principal se puede cambiar el orden de las reglas simplemente arrastrándolos.

En esta página también contiene tres botones:

* Crear una regla en la parte inferior
* Creación de una regla en la parte superior
* Configurar

Cuando se hayan completado todos los cambios deseados, haga clic en el
:guilabel: botón "Aplicar Cambios" para aplicar las reglas.

Configurar
==========

Configurar las políticas básicas de firewall.

Tráfico de interfaz de red de Internet

  Las opciones posibles son:
    
  **Permitido*: todo el tráfico de LAN (verde) a Internet (red) está activada por defecto.
  
  **Bloqueado*: todo el tráfico de LAN (verde) a Internet (rojo) está desactivado por defecto.
    
    En este caso, debe crear explícitamente reglas para todos los servicios que necesita ser permitido. 
    
    Por ejemplo, una regla que permita el tráfico web por los (puertos 80 y 443) de verde a rojo.

Ping desde Internet

  Si se activa, las interfaces públicas (rojo) responderán a las solicitudes de ping (ACEPTAR).
  
  Si se desactiva, las interfaces públicas (rojo) rechazaran las solicitudes de ping (SOLTAR).
  
  Para simplificar la solución de problemas, se recomienda dejar el ping habilitado.

Validación MAC (IP/MAC vinculante)

  Si está activado, todo el tráfico de anfitriones en las interfaces de verdes y azules se verifica con una lista de IP con direcciones MAC asociadas.

  La asociación de IP / MAC se puede configurar mediante la página DHCP.

Política de hosts sin IP / MAC de enlace (reserva DHCP)

  Si la validación MAC está activado, seleccione la directiva de hosts sin reserva DHCP.

Crear / Editar
=============

Al crear y reglas de edición, puede crear los siguientes tipos de objetos de firewall:

* Host
* Grupos de host
* Zona
* Servicios

Cada regla se compone de los siguientes campos.

Activado
     
     Activar o desactivar la regla.
     
     Una regla desactivada no se guarda en el archivo de configuración.

Acción

     La acción a tomar si el paquete coincide con los criterios de la regla.

     Las acciones posibles son:

     **Aceptar*: aceptar el tráfico de la red
     **Rechazar*: bloquear el tráfico y notificar al host remitente
     **Soltar*: bloquea el tráfico, los paquetes se caeran y no enviara notificación al host remitente

Fuente

    Es el origen del tráfico, puede ser: un host, un grupo de hosts ó una zona.

Destino

    Es el destino del tráfico, puede ser: un host, un grupo de hosts ó una zona.

Servicio

    Una red de servicio que consta de protocolo y el puerto (opcional).

Escribe para registrar si esta regla coincide

    Si se activa, todos los paquetes coincidentes serán registrados en el archivo de registro
    :file:`/var/log/firewall.log`.

Descripción

    Descripción opcional.
