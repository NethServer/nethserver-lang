===
FTP
===

El módulo activa ó desactiva el servidor FTP y configura los usuarios virtuales.

Usuarios
========

Crear o editar
--------------

Crear o editar un usuario virtual.

Un usuario virtual no es un usuario del sistema y se puede acceder sólo en el servidor FTP.

Nombre de usuario

    El nombre de usuario virtual.
    
    * Puede contener sólo letras minúsculas, números, guiones, puntos y guión de piso (_)
    * debe comenzar con una letra minúscula.
    
    Por ejemplo, "luisa", "jsmith" y "liu-jo" es un nombre de usuario válido, y "4friends", "Franco negros" y "aldo / error" no lo son.

Contraseña

    La contraseña de usuario virtual: La contraseña se envía en texto sin cifrar desde el cliente.

Usuario Chroot en el directorio home

    Si se activa, el usuario puede acceder sólo a su propio directorio home del FTP.
    El directorio home del FTP se coloca en "/var/lib/nethserver/ftp/<usuario>".
    Si está desactivado, el usuario puede acceder a todo el sistema de ficheros. Esto es altamente peligroso.

Directorio chroot personalizada

    El usuario puede acceder sólo el directorio seleccionado.

    Esta función se puede utilizar para conceder acceso a los usuarios directamente dentro de una carpeta compartida.
    Introduzca la ruta de la carpeta compartida "/var/lib/nethserver/ibay/<nombre>"
    donde "<nombre>" es el nombre de la carpeta compartida.

Habilitado / Deshabilitado

    El usuario podra ser activado o desactivado.

Descripción

    Descripción del usuario opcional.
    
    Por ejemplo: El acceso del sitio web de la empresa.
