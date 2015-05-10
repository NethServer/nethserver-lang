
=============
Conector POP3
=============

Direcciones de correo electrónico externas son buzones que se comprueban a intervalos regulares usando el protocolo *POP3* ó *IMAP*.
Los mensajes contenidos en el buzón se descargan y se entregan a los usuarios o grupos locales, como la configuración en 
esta forma.

Cuentas
========

Configurar la lista de direcciones externas y la asociación con el usuario del sistema.

Crear / Modificar
-----------------

Crear ó editar una dirección externa.

Correo

    La dirección de correo electrónico externa para comprobar.

Protocolo

    El protocolo usado para acceder al servidor remoto. Puede ser *POP3* ó *IMAP* (recomendado).

Dirección del servidor

    Nombre de host o dirección IP del servidor remoto.

Nombre de usuario

    Nombre de usuario utilizado para autenticarse en el sistema remoto.

Contraseña

    La contraseña utilizada para autenticar.

Cuenta

    Seleccione el usuario o grupo que recibirá los mensajes descargados.

Habilitar SSL

    Habilitar el cifrado de la conexión con el servidor remoto.

Eliminar mensajes descargados

    Si está activado, los mensajes descargados se eliminan del servidor remoto (recomendado). Deja inhabilitado para mantener
    una copia en el servidor remoto.

Borrar
------

Eliminación de una cuenta *no* elimina los mensajes ya entregados.


Descargar ahora
---------------

Inmediatamente se inicia la descarga desde todas las direcciones externas.


General
========

Permitir

    Le permite activar ó desactivar el Fetchmail para descargar correos electrónicos de direcciones externas.

Comprobar todos

    Frecuencia de comprobación de nuevos mensajes en las direcciones externas.
    
    Se recomienda un intervalo de al menos 15 minutos.
