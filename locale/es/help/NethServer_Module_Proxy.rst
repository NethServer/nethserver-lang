=========
Proxy web
=========

Configure el proxy web (Squid) y las reglas de derivación.

Proxy
=====

El proxy web trabaja para reducir el uso de ancho de banda mediante el almacenamiento en caché
las páginas que visitan. También puede hacer cumplir el filtrado de contenido.

Proxy Web sólo se puede activar en zona verde (redes locales) y zonas azules (redes invitados).

Manual

    Squid escuchará en el puerto 3128. Todo cliente debe ser configurado explícitamente para utilizar el proxy.

Autenticado

    Cada usuario se verá obligado a introducir nombre de usuario y contraseña.
    Squid escuchará en el puerto 3128. Todo cliente debe ser configurado explícitamente para utilizar el proxy.

Transparente

    Todo el tráfico HTTP se redirige a través del proxy.
    
    No se necesita ninguna configuración del cliente.

Transparente con SSL

    Todo tráfico HTTP y HTTPS se redirigir a través del proxy.
    
    El certificado de servidor (CA) debe estar instalado en cada cliente para permitir el tráfico HTTPS.

Bloquear los puertos HTTP y HTTPS

    Si está activado, los clientes no podrán utilizar el servidor proxy.
    
    Puertos 80 y 443 será accesible sólo mediante el proxy.

Proxy padre

    Introduzca la dirección IP y el puerto del proxy padre. La sintaxis correcta es
    
    Dirección_IP: puerto.
    
    *NO* introducir la dirección IP de este servidor.

Hosts sin proxy
===============

Establecer algunos hosts les permite evadir el proxy transparente y tenr acceso al Internet sin ser filtrada.

Nombre

    Un nombre único para la regla de derivación.

Activado

    Activar o desactivar la regla de derivación.

Host

    Seleccionar una serie entre equipos locales y objetos de firewall.

Descripción

    Descripción personalizada (opcional).

Páginas sin proxy
=================

Configuración algunos hosts remotos que necesitan acceder directamente.

Es útil para los sitios mal escrito que no funcionan correctamente con proxy.

Nombre

    Un nombre único para la regla de derivación.

Activado

    Activar o desactivar la regla de derivación.

Host

    Seleccione un host entre hosts remotos y objetos de firewall.

Descripción

    Descripción personalizada (opcional).

Cache
=====

Configuración de caché de Squid (habilitado o desactivado) mediante el establecimiento de estos parámetros:

Tamaño de la caché de disco

    Establecer en (MB) el tamaño de la memoria caché

Tamaño min del objeto

    Establecer en (kB) el tamaño mínimo de caché del objeto.

Tamaño max del objeto

    Establecer en (kB) el tamaño máximo de caché del objeto.
