============
DNS Dinámico
============


DNS Dinámico (DDNS o DynDNS)
============================

Es un método de actualización automática de un servidor de nombres en el Sistema de Nombres de Dominio (DNS), a menudo en tiempo real con la configuración DNS activa de sus nombres de host configurados, direcciones u otra información.

Los usuarios finales de conexión a Internet reciben una asignación de direcciones IP, a menudo sólo una única dirección, por su proveedor de servicios de Internet. Las direcciones asignadas pueden ser fijas (o estática), o pueden cambiar de vez en cuando, una situación llamada dinámica. direcciones dinámicas se dan por lo general sólo a los clientes residenciales y pequeñas empresas, como la mayoría de las empresas requieren específicamente direcciones estáticas.

Las direcciones IP dinámicas presentan un problema si el cliente quiere ofrecer un servicio a los demás usuarios de la Internet, como un servicio web. A medida que la dirección IP puede cambiar con frecuencia, los nombres de dominio correspondientes deben ser rápidamente re-mapeados en el DNS, para mantener la accesibilidad mediante una URL conocida.

Muchos proveedores ofrecen servicio de DNS dinámico comercial o gratuito para este escenario. La reconfiguración automática se lleva a cabo aquí por el software 'ddclient'.

====
DDNS
====

Crear / Modificar
=================

Haga clic en Crear para agregar un nuevo nombre de host DNS dinámico

Nombre de host DNS dinámico
===========================

    El nombre de host DNS dinámico debe ser un nombre cualificado completo para su proveedor de DNS dinámico, por ejemplo arthur-rimbaud.dyndns.org. Puede contener sólo letras, números y guiones, y debe comenzar con una letra o un número.

Descripción
===========

    Un comentario opcional para el nombre de host.

Iniciar sesión
==============

    El inicio de sesión debe ser un inicio de sesión válido para el proveedor de DNS dinámico.

Contraseña
==========

    La contraseña debe tener una contraseña válida para el proveedor de DNS dinámico.

nombre de host de intercambio de correo
=======================================

    Puedes aquí colocar su campo MX, no está disponible para todos los proveedores de DynDNS.

Proveedor personalizado Dinámico
================================

    Aquí puede introducir sus ajustes personalizados. Es posible que su proveedor de DNS dinámico utilice una configuración específica, no está disponible aquí.

        * Dirección del servidor (FQDN): Es el nombre de dominio completo de su servidor de proveedor
        
	* Protocolo ddclient: Es el protocolo ddclient que debe utilizar con su proveedor.

Los proveedores de DNS dinámico
===============================

    Se puede elegir entre estos proveedores, si el suyo no están disponibles, por favor pregunte para añadirlo.

.. raw:: html

   {{{INCLUDE NethServer_Module_ddclient_*.html}}}
