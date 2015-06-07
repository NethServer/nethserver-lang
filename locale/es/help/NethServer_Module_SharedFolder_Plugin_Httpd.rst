.. --initial-header-level=3 

Acceso  Web
^^^^^^^^^^^

Permite el acceso a la carpeta compartida de la web.

Host virtual

    Le permite elegir qué nombre de host está disponible en la compartida
    carpeta. La lista viene de la pestaña de "Alias del Servidor" en el
    módulo "DNS."

Dirección Web (URL)

    Define la dirección web en la que el recurso está disponible.

Permitir el acceso sólo desde redes de confianza

    Si solamente está activado, restringe el acceso al recurso sólo para confianza
    redes.

Requerir una contraseña

    El acceso a los recursos de la web no requiere autenticación. Active esta opción para solicitar una contraseña: especifique en el campo de abajo.

Requerir SSL conexión cifrada

    Los clientes Web se verán obligados a conectarse a la carpeta compartida utilizando
    el protocolo HTTPS.

Permitir .htaccess y escritura permisos anulaciones

    Un archivo llamado ``.htaccess`` en la raíz carpeta compartida se considera una web
    archivo de configuración del servidor. Véase `howto`_ Apache .htaccess.
    
    Un archivo llamado ``.htwritable`` en la raíz carpeta compartida permite el acceso de escritura
    en subdirectorios específicos. Los contenidos previstos de ese archivo son una lista
    de subdirectorios (uno antes de cada línea) cuando se conceda el servidor web obtiene
    permiso de escritura.
    
.. _Apache .htaccess howto: http://httpd.apache.org/docs/2.2/howto/htaccess.html
