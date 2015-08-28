<?php 

$L['FirewallObjects_Description'] = 'Управление объектами экрана';
$L['FirewallObjects_Tags'] = 'Объекты группы зоны межсетевого экрана';
$L['FirewallObjects_Title'] = 'Объекты межсетевого экрана';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Группа';
$L['HostGroups_create_label'] = 'Создать группу хостов';
$L['HostGroups_CreateHostGroup_label'] = 'Создать группу хостов';
$L['HostGroups_update_label'] = 'Изменить группу хостов "${0}"';
$L['HostGroups_Title'] = 'Группы хостов';

$L['HostsKey_label'] = 'Хост';
$L['Host_key_exists_message'] = 'Идентификатор хоста уже существует';
$L['Hosts_create_label'] = 'Создать хост';
$L['Hosts_CreateHost_label'] = 'Создать хост';
$L['Hosts_update_label'] = 'Изменить хост "${0}"';
$L['Hosts_Title'] = 'Хосты';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Интерфейс';
$L['IpAddress_label'] = 'Адрес IP';
$L['Members_label'] = 'Члены';
$L['Members'] = 'Члены';
$L['Network_label'] = 'Сеть';
$L['Ports_label'] = 'Порты';
$L['Ports_validator'] = 'Разделенный запятой список портов';
$L['Protocol_label'] = 'Протокол';
$L['name_label'] = 'Название';
$L['ServicesKey_label'] = 'Служба';
$L['Services_create_label'] = 'Создать службу';
$L['Service_key_exists_message'] = 'Идентификатор службы уже занят';
$L['Services_CreateService_label'] = 'Создать службу';
$L['Services_update_label'] = 'Изменить службу "${0}"';
$L['Services_Title'] = 'Службы';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP и UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Зона';
$L['Zones_create_label'] = 'Создать зону';
$L['Zone_key_exists_message'] = 'Идентификатор зоны уже занят';
$L['Zones_CreateZone_label'] = 'Создать зону';
$L['Zones_update_label'] = 'Изменить зону "${0}"';
$L['Zones_Title'] = 'Зоны';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Невозможно удалить ${2}. Зона используется правилами экрана.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Невозможно удалить ${2}. Сервис используется правилами экрана.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Нельзя удалить ${2}. Хост использован в правилах межсетевого экрана.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Невозможно удалить ${2}. Группа хостов используется правилами экрана.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Невозможно удалить ${2}. CIDR используется правилами файрвола.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Невозможно удалить ${2}. Диапазон IP используется правилами файрвола.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Невозможно удалить ${2}: это последний член группы хостов ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'Первый адрес должен быть меньше последнего.';

$L['Cidr_Title'] = 'CIDR подсети';
$L['Address_label'] = 'Сеть';
$L['Cidr_create_label'] = 'Создать CIDR подсеть';
$L['Cidr_update_label'] = 'Обновить CIDR подсеть';
$L['Cidr_key_exists_message'] = 'Объект с таким именем уже существует в базе данных хостов';
$L['Cidr_CreateCidr_label'] = 'Создать CIDR сеть';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Диапазоны IP';
$L['Start_label'] = 'От';
$L['End_label'] = 'До';
$L['IpRange_create_label'] = 'Создать IP диапазон';
$L['IpRange_update_label'] = 'Обновить IP диапазон';
$L['IpRange_key_exists_message'] = 'Объект с таким именем уже существует в базе данных хостов';
$L['IpRange_CreateIpRange_label'] = 'Создать IP диапазон';
$L['IpRangeKey_label'] = 'Диапазон IP';
