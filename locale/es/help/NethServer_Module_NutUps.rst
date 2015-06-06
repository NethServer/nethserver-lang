===
UPS
===

La gestión de un sistema de alimentación ininterrumpida (UPS - Suministro energía ininterrumpible) conectado al servidor se le asigna a la NUT (Herramientas UPS de red), la cual realizará una parada en caso de ausencia de
poder. NUT soporta diferentes modelos de UPS, conectado por cable serie o USB.

En este panel se realiza la configuración de NUT, para ver los datos del UPS, utilice el cuadro de mandos.

Habilitar NUT UPS

    Activar o desactivar el servicio NUT.

Modo
========

Maestro

    Este modo debe seleccionarse si el UPS está conectado al servidor directamente mediante un cable serie o USB.

Buscar controladores para el modelo

    Le permite buscar un controlador compatible con su modelo de UPS. Después de seleccionar el modelo de la lista
    el *Controlador*, El campo será llenado con el nombre del controlador adecuado.

Conductor

    El conductor que se utilizará para el modelo de UPS conectados.

Dispositivo

    El puerto físico al que está conectado el UPS. Soportes interiores se muestra el nombre de dispositivo UNIX, en el caso de la conexión USB el nombre del dispositivo se calcula automáticamente.

Esclavo

    Este modo se debe utilizar si el UPS no está conectado directamente al servidor, sino a otro servidor configurado con NUT en el modo Maestro al servidor que se conectará.

Dirección del servidor maestro

    Dirección IP o nombre de host del servidor maestro. El cliente utilizará el *usuario* UPS para conectar con el servidor maestro.
    
    Asegúrese de que el usuario que esté configurado en el servidor maestro.

Contraseña

    La contraseña que especifique aquí es la configurada en el servidor maestro para las conexiones de esclavos.
