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
$L['not_valid_port_range'] = 'Invalid port range';
$L['not_valid_port_range_order'] = 'Right side of port range must be higher than left side';
$L['Port_range_validator'] = 'Port range in the form lowport-highport';
$L['Protocol_label'] = 'Protocolo';
$L['name_label'] = 'Nome';
$L['ServicesKey_label'] = 'Serviço';
$L['Services_create_label'] = 'Novo serviço';
$L['Service_key_exists_message'] = 'Indicador do serviço já está em uso';
$L['Services_CreateService_label'] = 'Novo serviço';
$L['Services_update_label'] = 'Editar serviço "${0}"';
$L['Services_Title'] = 'Serviços';
$L['Times_Title'] = 'Time conditions';
$L['Times_create_label'] = 'Create time condition';
$L['Times_update_label'] = 'Edit time condition "${0}"';
$L['Times_CreateTime_label'] = 'Create time condition';
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
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O CIDR é usado pelas regras da firewall';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A gama de IP\'s é usada pelas regras da firewall';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Não é possível apagar ${2}. é o ultimo membro do grupo de máquinas ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Could not delete ${2}: it is used by network services';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Could not delete ${2}: the time condition is used by firewall rules';
$L['valid_iprange_outofbounds'] = 'O IP inicial tem que ser menor do que o final';

$L['Cidr_Title'] = 'Sub-redes CIDR';
$L['Address_label'] = 'Rede';
$L['Cidr_create_label'] = 'Nova sub-rede CIDR';
$L['Cidr_update_label'] = 'Actualizar sub-rede CIDR';
$L['Cidr_key_exists_message'] = 'Já existe um objecto com o mesmo nome na base de dados de máquinas';
$L['Cidr_CreateCidr_label'] = 'Nova rede CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Gamas de IP';
$L['Start_label'] = 'IP inicial';
$L['End_label'] = 'IP final';
$L['IpRange_create_label'] = 'Nova gama de IP\'s';
$L['IpRange_update_label'] = 'Actualizar gama de IP\'s';
$L['IpRange_key_exists_message'] = 'Já existe um objecto com o mesmo nome na base de dados de máquinas';
$L['IpRange_CreateIpRange_label'] = 'Nova gama de IP\'s';
$L['IpRangeKey_label'] = 'Gama de IP';

$L['TimesKey_label'] = 'Condition name';
$L['TimeStart_label'] = 'Time start';
$L['TimeStop_label'] = 'Time stop';
$L['WeekDays_label'] = 'Days of the week';
$L['TimeStop_compare_TimeStart_message'] = 'Value must be greater than "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'Domingo';
$L['WeekDay_Mon_label'] = 'Segunda-feira';
$L['WeekDay_Tue_label'] = 'Terça-feira';
$L['WeekDay_Wed_label'] = 'Quarta-feira';
$L['WeekDay_Thu_label'] = 'Quinta-feira';
$L['WeekDay_Fri_label'] = 'Sexta-feira';
$L['WeekDay_Sat_label'] = 'Sábado';
