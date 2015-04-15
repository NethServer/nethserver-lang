========
Usuarios
========

Se requiere un usuario del sistema para acceder a muchos servicios prestados por el servidor (de correo electrónico, carpetas compartidas, etc.).

Cada usuario se caracteriza por un par de credenciales (usuario y contraseña). Una cuenta de usuario recién creada permanece bloqueada hasta que establezca una contraseña. Un usuario bloqueado no puede utilizar los servicios de servidores que requieren autenticación.

Crear / Modificar
=================

Le permite crear o modificar los datos de usuario, el nombre de usuario no puede ser cambiado después de la creación.

Usuario
-------

Información básica sobre el usuario. Estos campos son requeridos. 

Nombre de usuario
    El *Nombre de usuario* se utilizará para acceder a los servicios. Se puede contener sólo letras en minúscula, números, guiones, puntos y guión bajo (_) y debe comenzar con una letra minúscula. Por ejemplo, "luisa", "jsmith" y "liu-jo" es un nombre de usuario válido y "4friends", "Franco Blacks" y "aldo / error" no lo son.
Nombre
    Es el nombre real del usuario. Por ejemplo, "John"
Apellido
    El apellido del usuario
Grupos
    Uso de la barra de búsqueda, puede seleccionar los grupos a los que se agregará el usuario. El usuario puede pertenecer a varios grupos.

Cambiar contraseña
------------------

Permite establecer una contraseña inicial, o cambiar la contraseña del usuario.

La contraseña debe cumplir los siguientes requisitos:

* Debe tener al menos 5 caracteres diferentes 
* No debe estar presente en los diccionarios de palabras comunes 
* Debe ser diferente de su nombre de usuario 
* No se puede tener repeticiones de patrones formados por 3 personajes más (por ejemplo, As1 contraseña. $ AS1. $ No es válida)


Bloquear / Desbloquear
----------------------

Le permite bloquear o desbloquear un usuario. Los datos del usuario 
no se eliminarán.

Borrar
------

Eliminar el usuario. Se borrarán todos los datos del usuario.

Detalles
--------

En este apartado se recoge información sobre la organización a la que pertenece el usuario y es opcional. Los valores por defecto se pueden especificar en el elemento de menú *Organización de datos*. 

Durante los siguientes campos, puede especificar un valor personalizado, de lo contrario, el ajuste realizado por el módulo de datos "organización ", estará disponible sólo para el administrador del sistema.

* Empresa
* Oficina
* Dirección
* Ciudad
* Teléfono


Servicio
--------

Esta sección contiene la lista de servicios a los que el usuario está permitido.

.. raw:: html

   {{{INCLUDE NethServer_Module_User_Plugin_*.html}}}
