<?php 

$L['FirewallObjects_Description'] = 'Administrar objetos del firewall';
$L['FirewallObjects_Tags'] = 'Zona de Firewall de grupo de objetos de servicios de host';
$L['FirewallObjects_Title'] = 'Objetos del Firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grupo';
$L['HostGroups_create_label'] = 'Crear grupo de hosts';
$L['HostGroups_CreateHostGroup_label'] = 'Crear grupo de hosts';
$L['HostGroups_update_label'] = 'Editar  Grupo "${0}"';
$L['HostGroups_Title'] = 'Grupos de Host';

$L['HostsKey_label'] = 'Host';
$L['Host_key_exists_message'] = 'Identificador de Host ya utilizado';
$L['Hosts_create_label'] = 'Crear host';
$L['Hosts_CreateHost_label'] = 'Crear host';
$L['Hosts_update_label'] = 'Editar host "${0}"';
$L['Hosts_Title'] = 'Hosts';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interfaz';
$L['IpAddress_label'] = 'Direccion IP';
$L['Members_label'] = 'Miembros';
$L['Members'] = 'Miembros';
$L['Network_label'] = 'Red';
$L['Ports_label'] = 'Puertos';
$L['Ports_validator'] = 'Lista de puertos separados por coma.';
$L['Protocol_label'] = 'Protocolo';
$L['name_label'] = 'Nombre';
$L['ServicesKey_label'] = 'Servicio';
$L['Services_create_label'] = 'Crear servicio';
$L['Service_key_exists_message'] = 'Identificador de servicio ya utilizado';
$L['Services_CreateService_label'] = 'Crear servicio';
$L['Services_update_label'] = 'Editar servicio "${0}"';
$L['Services_Title'] = 'Servicios';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP and UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zona';
$L['Zones_create_label'] = 'Crear zona';
$L['Zone_key_exists_message'] = 'Identificador de Zona ya utilizado';
$L['Zones_CreateZone_label'] = 'Crear zona';
$L['Zones_update_label'] = 'Edit zona "${0}"';
$L['Zones_Title'] = 'Zonas';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'No se puede eliminar ${2}. La zona se utiliza en reglas de Firewall.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'No se puede eliminar ${2}. La zona se utiliza en reglas de Firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'No se puede eliminar ${2}. El host es utilizado en reglas de Firewall.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'No se puede eliminar ${2}. El grupo de host es utilizado por las reglas de Firewall.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'No se pudo eliminar ${2}. El CIDR es utilizado por las reglas del cortafuegos.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'No se pudo eliminar ${2}. El rango de IP es utilizada por las reglas de firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'No se puede eliminar ${2}. Es el ultimo miembro de este grupo de Host ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'No se pudo eliminar ${2}: es utilizado por los servicios de red';
$L['valid_iprange_outofbounds'] = 'La IP de inicio debe ser menor que la IP final';

$L['Cidr_Title'] = 'Subredes CIDR';
$L['Address_label'] = 'Red';
$L['Cidr_create_label'] = 'Crear subred CIDR';
$L['Cidr_update_label'] = 'Actualizar subred CIDR';
$L['Cidr_key_exists_message'] = 'Un objeto con el mismo nombre ya existe dentro de la base de datos hosts';
$L['Cidr_CreateCidr_label'] = 'Crear red CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Rangos de IP';
$L['Start_label'] = 'IP inicio';
$L['End_label'] = 'IP final';
$L['IpRange_create_label'] = 'Crear rango de IP';
$L['IpRange_update_label'] = 'Actualizar rango de IP';
$L['IpRange_key_exists_message'] = ' Un objeto con el mismo nombre ya existe dentro de la base de datos hosts';
$L['IpRange_CreateIpRange_label'] = 'Crear rango de IP';
$L['IpRangeKey_label'] = 'Rango de IP';
