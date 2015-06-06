================
Servicios de red
================

La tabla muestra todos los servicios de red que se ejecutan localmente en el servidor.

Cada servicio puede tener varios puertos TCP/UDP abiertos. Los Puertos están abiertos en el firewall
de acuerdo a la propiedad `acceso`.

La propiedad tiene acceso a tres valores válidos:

* Localhost: el servicio es accesible sólo desde el propio servidor
* Verde: el servicio es accesible sólo desde las interfaces verdes y redes de confianza
* Rojo verde: el servicio es accesible desde redes locales y externos, pero no de color naranja y azul
* Personalizada: el servicio tiene acceso personalizado configurado a través de `Permitir hosts` o 'Denegar hosts`

Cuando el acceso al servicio es privado o público, el administrador puede especificar una lista
de anfitriones siempre permitido (o negado) para acceder al servicio.

Editar
======

Edita el acceso de un servicio de red.

El acceso desde las redes de verde y rojo

    Seleccione esta opción si el servicio debe ser de todas las redes, incluyendo Internet.
    Por ejemplo: el servidor de correo debe ser accesible desde cualquiera.

Acceso sólo a partir de redes verdes

    Seleccione esta opción si el servicio debe ser accesible sólo desde redes locales.
    Por ejemplo: un servidor de base de datos fundamental debe ser accesible desde la red local.

Acceso sólo desde localhost

    Seleccione esta opción si el servicio debe ser accesible sólo desde el propio servidor.
    Por ejemplo: en un acceso público VPS al servidor LDAP debe ser negado desde cualquier red.

Permitir hosts

    Especifique una lista separada por comas de dirección IP o redes CIDR. Listado de hosts que serán siempre garantizado el acceso al servicio de red. (Aplica sólo si el acceso es público o privado)

Denegar hosts

    Especifique una lista separada por comas de dirección IP o redes CIDR. Listado de hosts que serán siempre negado el acceso al servicio de red. (Aplica sólo si el acceso es público o privado)
