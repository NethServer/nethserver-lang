===
DNS
===

El DNS (Domain Name System) es responsable de la resolución de nombres de dominio
(por ejemplo www.nethesis.it) en sus correspondientes direcciones IP numéricas
(. Por ejemplo, 10.11.12.13) y viceversa. Los servidores delegan la resolución de
nombres a los servidores DNS configurados, pero se puede especificar arbitrariamente
las direcciones para los nombres seleccionados. Por ejemplo, puede configurar el
sistema para responder a las solicitudes de facebook.com con la dirección IP
0.0.0.0, logrando el efecto de hacer que el sitio de Facebook sea inalcanzable.

Servidores DNS
==============

Configurar las direcciones de los servidores DNS que
el servidor se pondrá en contacto para resolver nombres.

DNS Primario

     La dirección del servidor primario de contacto para la resolución de nombres (obligatorio).

DNS Secundario
   
     La dirección del servidor secundario a contactarse en caso de que el principal no está respondiendo (opcional).

Hosts
=====

Crear / Modificar
-----------------

Haga clic en crear para asignar un nombre de host a una dirección IP. El
servidor devolverá la dirección IP configurada para solicitudes de su nombre.


Nombre de Host

    El nombre de dominio, por ejemplo www.nethesis.it. Es posible crear
    nombres para el dominio local, que es útil para dar un nombre nemotécnico para
    dispositivos configurados con IP estática o para cualquier dominio,
    que prevalecen sobre el servidor DNS del proveedor (véase
    facebook.com ejemplo anterior).

Dirección IP

    La dirección IP del nombre de host.

Descripción

    Un comentario opcional para el nombre de host (ejemplo:
    "Bloquear facebook" o "servidor de vídeo").

Alias del Servidor
==================

Los alias son nombres alternativos para este servidor. Por ejemplo, si el
nombre del servidor es *server.mycompany.com*, un alias puede ser
*Mail.mycompany.com*. El servidor utilizará su propia dirección IP
para el nombre de alias.

Crear / Modificar
-----------------

Permite crear un nuevo alias para este servidor.

Nombre de Host

    El nombre de host que desea agregar o modificar. Puede contener solamente
    letras, números y guiones, y deben comenzar con una letra o un número.

Descripción

    Una descripción opcional útil para identificar el alias.
