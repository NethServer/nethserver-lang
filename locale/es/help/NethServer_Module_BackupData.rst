
==================
Copia de Seguridad
==================

La copia de seguridad contiene todos los datos, como directorios de los usuarios domésticos, carpetas compartidas,
mensajes de correo electrónico, sino también a todas las configuraciones del sistema. Funciona todos los días y 
puede ser total o incrementales, según el día de la semana y la configuración. 

Los medios disponibles para la copia de seguridad son: disco USB, recurso compartido de Windows o Recurso compartido NFS. 

Al final del procedimiento de copia de seguridad, enviara una notificación por correo electrónico al administrador
a una dirección personalizada.

General
=======

Activar copia de seguridad automática
    Esta opción activa o desactiva el procedimiento de copia de seguridad. El valor por defecto está habilitada.

Horario de copia de seguridad
    El momento en que la copia de seguridad se iniciará. Cambie el valor directamente en el campo.

Completo
    Al seleccionar esta opción se ejecutará una copia de seguridad completa todos los días de la semana

Incremental
    Al seleccionar esta opción se ejecutará una copia de seguridad completa en el día seleccionado a través del campo
    específico, mientras que el resto de la semana se ejecutará una copia de seguridad incremental.

Política de retención
    Introduzca el número de días en que se guardará la copia de seguridad.

Destino
=======

Disco USB
    Seleccione el destino de copia de seguridad en una unidad USB. El disco USB debe ser formateado con un sistema
    de archivos compatible (ext2/3/4 o FAT, NTFS no es compatible) y una etiqueta configurada.

    * Sistema de Archivos de etiquetas: las listas de discos USB conectados.
      Si se monta el disco, que está marcado con una "M".

Recurso Compartido de Windows (CIFS)
    Seleccione el destino de copia de seguridad, un recurso compartido de Windows (CIFS). Se requiere autenticación.

    * Servidor: La dirección IP o el FQDN del servidor de Windows destino
    * Compartir: el nombre de la carpeta compartida en el sistema Windows destino
    * Usuario: nombre de usuario para utilizar para la autenticación
    * Contraseña: contraseña a usar para la autenticación.

Recurso Compartido NFS
    Seleccione el destino de copia de seguridad en un recurso compartido NFS

Host
   La dirección IP o el FQDN del servidor NFS

   * Compartir: nombrar el recurso compartido de NFS

Notificaciones
==============

En caso de error
    Enviar notificación, sólo en el caso de fallo de la copia de seguridad.

Siempre
    Siempre envíe notificaciones, si tiene éxito o en caso de fallo.

Nunca
    Usted no recibirá ninguna notificación.

Enviar notificación a
    Introducir quien recibirá la notificación de correo electrónico
   
    * Administrador del Sistema: La notificación de la copia de seguridad se enviará al administrador del sistema (usuario admin)
    * Dirección Personalizada: La notificación de la copia de seguridad se enviará a una dirección personalizada.
