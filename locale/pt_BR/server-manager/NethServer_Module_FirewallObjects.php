<?php 

$L['FirewallObjects_Description'] = 'Gerienciar objetos do firewall';
$L['FirewallObjects_Tags'] = 'Firewall zona máquina serviço grupo objetos';
$L['FirewallObjects_Title'] = 'Objetos do firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grupo';
$L['HostGroups_create_label'] = 'Criar grupo de máquinas';
$L['HostGroups_CreateHostGroup_label'] = 'Criar grupo de máquinas';
$L['HostGroups_update_label'] = 'Editar grupo de máquinas "${0}"';
$L['HostGroups_Title'] = 'Grupos de máquinas';

$L['HostsKey_label'] = 'Máquina';
$L['Host_key_exists_message'] = 'O identificador de máquina já está em uso';
$L['Hosts_create_label'] = 'Criar máquina';
$L['Hosts_CreateHost_label'] = 'Criar máquina';
$L['Hosts_update_label'] = 'Editar máquina "${0}"';
$L['Hosts_Title'] = 'Máquinas';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interface';
$L['IpAddress_label'] = 'Endereço IP';
$L['Members_label'] = 'Membros';
$L['Members'] = 'Membros';
$L['Network_label'] = 'Rede';
$L['Ports_label'] = 'Portas';
$L['Ports_validator'] = 'Lista de números de porta separados por virgula';
$L['not_valid_port_range'] = 'Invalid port range';
$L['not_valid_port_range_order'] = 'Right side of port range must be higher than left side';
$L['Port_range_validator'] = 'Port range in the form lowport-highport';
$L['Protocol_label'] = 'Protocolo';
$L['name_label'] = 'Nome';
$L['ServicesKey_label'] = 'Serviço';
$L['Services_create_label'] = 'Criar serviço';
$L['Service_key_exists_message'] = 'Indicador do serviço já está em uso';
$L['Services_CreateService_label'] = 'Criar serviço';
$L['Services_update_label'] = 'Editar serviço "${0}"';
$L['Services_Title'] = 'Serviços';
$L['Times_Title'] = 'Condição de tempo';
$L['Times_create_label'] = 'Criar condição de tempo';
$L['Times_update_label'] = 'Editar condição de tempo "${0}"';
$L['Times_CreateTime_label'] = 'Criar condição de tempo';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP e UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zona';
$L['Zones_create_label'] = 'Criar zona';
$L['Zone_key_exists_message'] = 'Identificador de zona já em uso';
$L['Zones_CreateZone_label'] = 'Criar zona';
$L['Zones_update_label'] = 'Editar zona "${0}"';
$L['Zones_Title'] = 'Zonas';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A zona está sendo utilizada pelas regras do firewall';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O serviço  está sendo utilizado pelas regras do firewall';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A máquina  está sendo utilizada pelas regras do firewall';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O grupo de máquinas  está sendo utilizado pelas regras do firewall';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. O CIDR  está sendo utilizado pelas regras do firewall';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Não é possível apagar ${2}. A faixa de IP\'s está sendo utilizada pelas regras do firewall';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Não é possível apagar ${2}. é o ultimo membro do grupo de máquinas ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Não foi possível excluir ${2}: está em uso pelos serviços de rede';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Não é possivel apagar ${2}: a condição de tempo está sendo utilizada pelas regras do firewall';
$L['valid_iprange_outofbounds'] = 'O IP inicial tem que ser menor do que o final';

$L['Cidr_Title'] = 'Sub-redes CIDR';
$L['Address_label'] = 'Rede';
$L['Cidr_create_label'] = 'Criar sub-rede CIDR';
$L['Cidr_update_label'] = 'Atualizar sub-rede CIDR';
$L['Cidr_key_exists_message'] = 'Já existe um objeto com o mesmo nome na base de dados de máquinas';
$L['Cidr_CreateCidr_label'] = 'Criar rede CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Faixas de IP';
$L['Start_label'] = 'IP inicial';
$L['End_label'] = 'IP final';
$L['IpRange_create_label'] = 'Criar faixa de IP\'s';
$L['IpRange_update_label'] = 'Atualizar faixa de IP\'s';
$L['IpRange_key_exists_message'] = 'Já existe um objeto com o mesmo nome na base de dados de máquinas';
$L['IpRange_CreateIpRange_label'] = 'Criar faixa de IP\'s';
$L['IpRangeKey_label'] = 'Faixa de IP';

$L['TimesKey_label'] = 'Nome';
$L['TimeStart_label'] = 'Inicio';
$L['TimeStop_label'] = 'Fim';
$L['WeekDays_label'] = 'Dias da Semana';
$L['TimeStop_compare_TimeStart_message'] = 'Valor tem que ser maior que "Inicio" (${0})';

$L['WeekDay_Sun_label'] = 'Domingo';
$L['WeekDay_Mon_label'] = 'Segunda';
$L['WeekDay_Tue_label'] = 'Terça';
$L['WeekDay_Wed_label'] = 'Quarta';
$L['WeekDay_Thu_label'] = 'Quinta';
$L['WeekDay_Fri_label'] = 'Sexta';
$L['WeekDay_Sat_label'] = 'Sábado';
