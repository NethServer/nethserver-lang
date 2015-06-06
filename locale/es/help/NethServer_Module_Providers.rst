=========
Multi WAN
=========

Si usted tiene más de una conexión a Internet, debe configurar la conexión individual WAN
(ISP) y establecer políticas de uso (por ejemplo preferir una conexión a través de otro).


Configurar
==========

Seleccione la política de gestión del proveedor:

* Balanceado: utiliza todas las conexiones a la vez
* Respaldo: usar conexiones de respaldo en caso de problemas con el proveedor de la más alta prioridad

Crear o Editar
==============

Crear o editar la configuración de los proveedores.

Nombre

     Un nombre para identificar la conexión (ISP). Max 5 caracteres.

Habilitado/Deshabilitado

     Activar o desactivar el proveedor.

Carga
     La "carga" de la conexión.
     
     El tráfico se dirigirá de forma proporcional a la carga: mayor carga significa más tráfico.
     
     Un proveedor con un carga de 100 recibirá dos veces el tráfico de uno con la carga 50.
     Por favor, asignar ponderaciones de acuerdo al ancho de banda de conexión.
     
     Al utilizar el modo de respaldo activa, la carga determina el uso de la línea.
     Si el primer proveedor tiene una carga de 100 y el segundo tiene una carga de 50,
     el tráfico siempre se envía a la primera proveedor. El segundo se utilizará sólo si el primer proveedor pierde conexión.

Descripción
     
     Una descripción opcional para identificar el proveedor.

Comprobar IP
     
     Un ping es enviado a Comprobar IP cada 5 segundos.
     
     En caso de falta de respuesta, el sistema desactiva el proveedor hasta que comienzan a recibir respuestas de nuevo.
     Precaución: la IP debe estar dentro de la red del proveedor.
    
     El sistema determina automáticamente, recomendamos no cambiar la IP preestablecido.
     
     En caso de problemas de conectividad, el host Comprobará la IP que no es accesible. 

