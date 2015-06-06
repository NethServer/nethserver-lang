=============
Proxy de POP3
=============

El proxy intercepta conexiones POP3 a servidores externos, entonces se analiza el correo entrante para bloquear virus
y la etiqueta de spam.

El proceso es completamente transparente para los clientes de correo, el usuario creé conectarse directamente a su servidor POP3 de su ISP, pero el servidor interceptará todo el tráfico y manejará las conexiones a servidores externos.

Habilitado/Deshabilitado

    Si está activado, todas las conexiones al puerto POP3 (110), será interceptado por el firewall y enviado al proxy.

Antivirus

    Habilitar comprobación de virus en correos descargados.

Antispam

    Habilitar chequeo de spam en mensajes descargados.

POP3s escanear (puerto 995)

    Habilitar todos los controles de POP3 con SSL (POP3s):
    
    Todas las conexiones al puerto 995 serán interceptados por el firewall y se envían al proxy.
    El servidor se encargará de establecer conexiones seguras a servidores externos, mientras que las transferencias de datos a la red local de clientes estarán en texto claro.
    
    *NOTA*: los clientes deben estar configurados para conectarse al puerto 995, pero tendrán que desactivar el cifrado.

Lenguaje de plantillas de correo
 
    En caso de detección de virus, el cliente es notificado con un mensaje especial. Este campo le permite elegir el idioma del mensaje de notificación.
    
