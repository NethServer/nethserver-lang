<?php 

$L['FirewallObjects_Description'] = 'Gerir objectos da firewall';
$L['FirewallObjects_Tags'] = 'Firewall zona máquina serviço grupo objectos';
$L['FirewallObjects_Title'] = 'Objectos da firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grupo';
$L['HostGroups_create_label'] = 'Novo grupo de máquinas';
$L['HostGroups_CreateHostGroup_label'] = 'Novo grupo de máquinas';
$L['HostGroups_update_label'] = 'Editar grupo de máquinas "${0}"';
$L['HostGroups_Title'] = 'Grupos de máquinas';

$L['HostsKey_label'] = 'Máquina';
$L['Host_key_exists_message'] = 'O identificador de máquina já está em uso';
$L['Hosts_create_label'] = 'Nova máquina';
$L['Hosts_CreateHost_label'] = 'Nova máquina';
$L['Hosts_update_label'] = 'Editar máquina "${0}"';
$L['Hosts_Title'] = 'Máquinas';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interface';
$L['IpAddress_label'] = 'Endereço IP';
$L['Members_label'] = 'Membros';
$L['Members'] = 'Membros';
$L['Network_label'] = 'Rede';
$L['Ports_label'] = 'Portos';
$L['Ports_validator'] = 'Lista de números de porto separados por virgula';
$L['Protocol_label'] = 'Protocolo';
$L['name_label'] = 'Nome';
$L['ServicesKey_label'] = 'Serviço';
$L['Services_create_label'] = 'Novo serviço';
$L['Service_key_exists_message'] = 'Indicador do serviço já está em uso';
$L['Services_CreateService_label'] = 'Novo serviço';
$L['Services_update_label'] = 'Editar serviço "${0}"';
$L['Services_Title'] = 'Serviços';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP e UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zona';
$L['Zones_create_label'] = 'Nova zona';
$L['Zone_key_exists_message'] = 'Identificador de zona já em uso';
$L['Zones_CreateZone_label'] = 'Nova zona';
$L['Zones_update_label'] = 'Editar zona "${0}"';
$L['Zones_Title'] = 'Zonas';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A zona está em uso pelas regras da firewall';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O serviço está em uso pelas regras da firewall';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A máquina está em uso pelas regras da firewall';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O grupo de máquinas está em uso pelas regras da firewall';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Não é possível apagar ${2}. é o ultimo membro do grupo de máquinas ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'O IP inicial tem que ser menor do que o final';

$L['Cidr_Title'] = 'Sub-redes CIDR';
$L['Address_label'] = 'Rede';
$L['Cidr_create_label'] = 'Nova sub-rede CIDR';
$L['Cidr_update_label'] = 'Actualizar sub-rede CIDR';
$L['Cidr_key_exists_message'] = 'Já existe um objecto com o mesmo nome na base de dados de máquinas';
$L['Cidr_CreateCidr_label'] = 'Nova rede CIDR';

$L['IpRange_Title'] = 'Gamas de IP';
$L['Start_label'] = 'IP inicial';
$L['End_label'] = 'IP final';
$L['IpRange_create_label'] = 'Nova gama de IP\'s';
$L['IpRange_update_label'] = 'Actualizar gama de IP\'s';
$L['IpRange_key_exists_message'] = 'Já existe um objecto com o mesmo nome na base de dados de máquinas';
$L['IpRange_CreateIpRange_label'] = 'Nova gama de IP\'s';