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

Click Create to assign a host name to an IP address. The
server will return the IP address configured for requests of its name.


Nombre de Host

    The domain name, for example www.nethesis.it. It's possible to create
    names for the local domain, which is useful for giving a mnemonic name to
    devices configured with static IP or for any domain,
    which take precedence over the provider's DNS server (see
    facebook.com example above).

Dirección IP

    The IP address of the host name.

Descripción

    An optional comment for the host name (example:
    "Block facebook" or "video server").

Alias del Servidor
==================

Aliases are alternate names for this server. For example, if the
name of the server is *server.mycompany.com*, an alias may be
*mail.mycompany.com*. The server will use its own IP address
for the alias name.

Crear / Modificar
-----------------

Allows you to create a new alias for this server.

Nombre de Host

    The host name that you want to add or modify. It can contain only
    letters, numbers and hyphens, and must begin with a letter or a number.

Descripción

    An optional description useful to identify the alias.
