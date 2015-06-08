====================
Carpetas compartidas
====================

Una carpeta compartida es un recurso en el sistema que puede ser
visitada según los servicios instalados en el sistema y establecer permisos
por este módulo.

Crear nueva/editar
------------------

Dependiendo de los servicios instalados en el sistema verá varias pestañas.

General
^^^^^^^

Nombre

    El nombre de la carpeta compartida. Sólo puede contener letras minúsculas,
    números, puntos, guiones y guiones bajos. La longitud máxima del nombre es de 12 caracteres.

Descripción

    Campo opcional para una breve descripción de la carpeta compartida.

Propietario del Grupo

    El grupo propietario de la carpeta compartida, sólo los miembros del
    grupo pueden acceder a la carpeta.

Permitir escritura al propietario del grupo

    Permitir el acceso de escritura a los miembros del grupo propietario.

Permitir el acceso de lectura a todos

    Permitir el acceso de lectura a cualquier persona que se conecte al sistema, así como
    redes públicas.

.. raw:: html

   {{{INCLUDE NethServer_Module_SharedFolder_Plugin_*.html}}}

ACL
^^^

La lista de control de acceso permite especificar los permisos de acceso a la
carpeta compartida para cada uno de los usuarios o grupos, además de los del
propietario del grupo.

Leer

    Permitir o denegar el acceso de lectura al usuario o grupo seleccionado.

Escribir

    Permitir o denegar el acceso de escritura para el usuario o grupo
    seleccionado.


Borrar
------

Elimina la carpeta y todo su contenido. *La acción no es
reversible!* La única manera de recuperar el contenido de una carpeta compartida
que a medida de haberla quitado es restaurar una copia de seguridad.

Restablecer los permisos
------------------------

Establece al propietario del grupo y ACL configurar mediante este módulo
en todos los archivos de la carpeta. La operación se lleva a cabo de forma recursiva en
todos los archivos y subcarpetas de la carpeta compartida.
