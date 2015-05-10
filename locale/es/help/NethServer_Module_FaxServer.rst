
===============
Servidor de fax
===============

El servidor fax le permite enviar y recibir faxes a través de un módem conectado directamente a un puerto del servidor
(COM ó USB) ó a través de un módem IAX virtual.

El módem debe ser compatible con el envío y recepción de faxes preferentemente en la clase 1 o 1,0 (2, 2,0 y 2,1 clases también son compatibles).

General
========

Código del país
  
    El prefijo internacional que se antepone a su número de fax.

Prefijo

    Código de área.

Fax

    El número de fax del remitente.

Remitente (TSI - Transmisión de identificación del suscriptor)

    La TSI se imprime en la cabecera del fax del destinatario, por lo general en la fila superior. Es posible introducir
    el número de fax o nombre de una longitud total de hasta 20 caracteres (se recomienda su nombre de la empresa). 
    
    Sólo se permiten caracteres alfanuméricos.


Módem
=====

Módem
    
    El puerto físico (COM ó USB) a la que el módem está conectado ó módem fax virtual

    * Estándar de dispositivos: le permite seleccionar el dispositivo de una lista de puertos comunes
    * Dispositivo personalizado: permite especificar un dispositivo personalizado para ser utilizado como un módem fax. * Debe ser el nombre de un dispositivo en el sistema. *

Modo

    Especifica el modo de funcionamiento del dispositivo seleccionado. Los modos disponibles son:

    * Enviar y recibir: el módem se utiliza para enviar y recibir faxes
    * Sólo Recibir: el módem sólo se utilizará para recibir faxes
    * Sólo Enviar: el módem sólo será utilizada para el envío de faxes

Prefijo PBX

    * Si el fax módem está conectado a una centralita, puede que tenga que introducir un código de acceso a 
    "obtener una línea exterior."
    * Si el módem está conectado directamente a una línea, ó al PBX no requiere ningún código, deje el campo vacío.
    * Si estás detrás de un PBX, introduzca el prefijo a marcar.

Espere el tono de marcación

    Algunos módems no son capaces de reconocer el tono de marcación (Especialmente si está conectado a un PBX) y 
    no marcar el número señalando con la ausencia de tono (dará error "No hay tono de marcado").

    Para configurar el módem para ignorar la ausencia de la línea y marcar inmediatamente el número seleccione "Deshabilitado".
    La configuración recomendada es "Habilitado", es posible que desee desactivar *Espere el tono de marcación* sólo en caso 
    de problemas.
    

Notificaciones por correo electrónico
=====================================

Formato de los faxes recibidos

    Por defecto, el servidor de fax envía los faxes recibidos como mensajes de correo electrónico con un archivo adjunto.
    Especifique la dirección de correo electrónico donde serán entregados los faxes, y uno o más formatos del adjunto. 
    Para no recibir el fax como archivo adjunto, pero sólo una notificación de recepción, anule la selección de todos los
    formatos.

Reenviar los faxes recibidos a

    * Grupo "faxmaster"
     
        De forma predeterminada, los faxes recibidos se envían a *faxmaster*: si
        un usuario necesita para recibir faxes entrantes deben añadirse a esta
        grupo.
    
    * Correo electrónico externo
    
        Introduzca una dirección de correo electrónico externa en caso de que desee enviar los faxes recibidos 
        a una dirección de correo electrónico que no este en el servidor.

Formato de faxes enviados

    Si así lo solicita el cliente, el servidor envía una notificación por correo electrónico con un archivo adjunto.
    Elija el formato en el que prefiere recibir el fax.
    
    De seleccionar todas las opciones si no quiere recibir el fax adjunto.
    

Añadir notificación de entrega

    Si se selecciona, se suma un informe de notificación de entrega en el correo electrónico enviado por fax.



Funciones adicionales
=====================

Ver los faxes enviados por el cliente

    Los clientes de fax también le permiten ver todos los faxes entrantes. Si, por razones de confidencialidad, 
    desea filtrar faxes recibidos, desactive esta opción.

Imprimir automáticamente los faxes recibidos

    Imprimir automáticamente todos los faxes recibidos en una impresora compatible con PCL5 configurado en el servidor.
    La impresora adecuada debe ser seleccionada en el menú desplegable.

SambaFax

    Al seleccionar esta opción, el servidor de fax puede poner a disposición de la red local una impresora virtual
    llamada "sambafax" que debera ser configurado en el cliente, seleccionando el controlador Apple LaserWriter
    16/600 PS. Documentos impresos en la impresora de red sambafax debe contener la frase exacta "Numero de Fax:" seguido del
    número de fax del destinatario.

Enviar informe diario

    Enviar un informe diario al administrador
