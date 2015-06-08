========================
Filtro de contenidos Web
========================

El filtro de contenidos web se utiliza para controlar la navegación web y bloquear sitios utilizando algunas variables
tales como palabras clave, dirección IP, los usuarios internos, o evaluar el contenido de la página web, o extensiones de
archivo. Con esta herramienta es posible por ejemplo para permitir acceso sólo en algunos sitios deseados (tales como los
de interés de la compañía) mientras que el bloqueo de todos los demás.

El filtro de contenidos se basa en perfiles.
Un perfil se compone de tres partes:

* Quién: host o usuario está accediendo a la web
* Qué: un filtro compuesto por múltiples categorías permitidas o bloqueadas
* Cuándo: se filtra un plazo dentro del acceso

También hay un perfil especial que se aplica a cualquier cliente
en cualquier momento.


General
=======

Configuración general común a todas las pestañas.

Activar el filtro
     Activar o desactivar el filtro.

Habilitar expresión igualan URL
    Filtro URL usando expresiones regulares.
    Por ejemplo, las direcciones URL de bloques que contienen la palabra *sexo*.
    No recomendado: este tipo de filtro puede conducir a falsos positivos.

Lista de extensión de archivo bloqueado
    Una lista de extensiones de archivos bloqueados por el filtro separado por una coma *,*.

Lista negra global
   Lista de sitios o direcciones URL bloqueadas, se puede activar o desactivar para cada filtro.

Lista blanca global
   Lista de sitios o direcciones URL permitidas, se puede activar o desactivar para cada filtro.


Perfiles
========

Un perfil describe quién puede acceder a los contenidos dentro de plazos definidos.

Nombre
   Identificador de nombre único.

¿Quién
   Puede ser:

   * Un usuario local
   * Un grupo de usuarios locales
   * Un host
   * Un grupo de host
   * Una zona
   * Una subred CIDR
   * Un rango de IP
   * Un usuario de Directorio Activo, si el servidor se ha unido al dominio

¿Qué
   Un filtro creado previamente dentro de la pestaña de filtro o el filtro predeterminado.

¿Cuándo
   Un período de tiempo previamente creado dentro de la pestaña de veces.

Descripción
    Descripción personalizada (opcional).


Filtros
=======

Un filtro describe lo que está permitido o bloqueado por el tipo de contenido.

Nombre
    Identificador de nombre único.

Descripción
    Descripción personalizada (opcional).

Bloquear el acceso a sitios web utilizando la dirección IP
    Si está activado, los clientes no pueden acceder a sitios web que utilizan la dirección IP, pero sólo el nombre de host.

Habilitar lista negra global
    Habilitar la lista negra de dominio/URL se define en la ficha General.

Habilitar lista blanca global
    Habilitar la lista blanca de dominio/URL se define en la ficha General.

Extensiones de archivo a bloquear
    Bloquear todas las extensiones de archivo definidas en la ficha General.

Modo
    El filtro web puede trabajar en dos modos diferentes:

    * Bloquear todo, permitir que el contenido seleccionado: categorías seleccionadas se les permite, a cualquier otro sitio está bloqueado
    * Permitir todo, bloque de contenido seleccionado: categorías seleccionadas se bloquean, cualquier otro sitio se permite

Categorías
    Lista de las categorías de las listas negras configurados dentro pestaña Lista Negra.
    También contiene todas las categorías personalizadas definidas.

Horarios
========

Definir una lista de marcos de tiempo.

Nombre
    Identificador de nombre único.

Descripción
    Descripción personalizada (opcional).

Días de la semana
    Seleccione uno o más días de la semana.

Hora de inicio
    Una hora de inicio del período de tiempo.

Hora de finalización
    Una hora de finalización para el período de tiempo.


Categorías personalizadas
=========================

Categorías personalizadas se pueden usar dentro de la ficha Filtro.

Nombre
    Identificador de nombre único.

Descripción
    Descripción personalizada (opcional).

Dominios
    Una lista de los dominios personalizados, uno por línea.


Las listas negras
=================

Las listas negras se descargan una vez al día durante la noche.

Listas disponibles son:

* Shalla (libre para uso no comercial)
* UrlBlacklist.com (comercial)
* Université Toulouse (libre)
* Personalizada: establecer una URL personalizada, la lista debe estar en un formato
  adecuado para SquidGuard

.. raw:: html

   {{{INCLUDE NethServer_Module_ContentFilter_*.html}}}
