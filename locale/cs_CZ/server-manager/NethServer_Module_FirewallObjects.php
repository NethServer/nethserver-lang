<?php 

$L['FirewallObjects_Description'] = 'Spravovat objekty brány firewall';
$L['FirewallObjects_Tags'] = 'Brána firewal stroj služba skupina objekty';
$L['FirewallObjects_Title'] = 'Objekty brány firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Skupina';
$L['HostGroups_create_label'] = 'Create host group';
$L['HostGroups_CreateHostGroup_label'] = 'Create host group';
$L['HostGroups_update_label'] = 'Upravit skupinu stroje „${0}“';
$L['HostGroups_Title'] = 'Skupiny stroje';

$L['HostsKey_label'] = 'Stroj';
$L['Host_key_exists_message'] = 'Identifikátor stroje je už používán';
$L['Hosts_create_label'] = 'Vytvořit stroj';
$L['Hosts_CreateHost_label'] = 'Vytvořit hostitele';
$L['Hosts_update_label'] = 'Upravit stroj „${0}“';
$L['Hosts_Title'] = 'Stroje';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Rozhraní';
$L['IpAddress_label'] = 'IP adresa';
$L['Members_label'] = 'Členové';
$L['Members'] = 'Členové';
$L['Network_label'] = 'Síť';
$L['Ports_label'] = 'Porty';
$L['Ports_validator'] = 'Seznam čísel portů – jednotlivé položky oddělujte čárkou';
$L['Port_range_validator'] = 'Port range in the form lowport-highport';
$L['Protocol_label'] = 'Protokol';
$L['name_label'] = 'Název';
$L['ServicesKey_label'] = 'Služba';
$L['Services_create_label'] = 'Vytvořit službu';
$L['Service_key_exists_message'] = 'Tento identifikátor služby je už v systému používán';
$L['Services_CreateService_label'] = 'Vytvořit službu';
$L['Services_update_label'] = 'Upravit službu „${0}“';
$L['Services_Title'] = 'Služby';
$L['Times_Title'] = 'Časové podmínky';
$L['Times_create_label'] = 'Vytvořit časovou podmínku';
$L['Times_update_label'] = 'Upravit časovou podmínku „${0}“';
$L['Times_CreateTime_label'] = 'Vytvořit časovou podmínku';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP a UDP';
$L['udp_label'] = ' ';
$L['ZonesKey_label'] = 'Zóna';
$L['Zones_create_label'] = 'Vytvořit zónu';
$L['Zone_key_exists_message'] = 'Tento identifikátor zóny je už v systému používán';
$L['Zones_CreateZone_label'] = 'Vytvořit zónu';
$L['Zones_update_label'] = 'Upravit zónu „${0}“';
$L['Zones_Title'] = 'Zóny';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The zone is used by firewall rules.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = '${2} není možné smazat. Služba je používána pravidly brány firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = '${2} není možné smazat. Stroj je používán v pravidlech brány firewall.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Nelze smazat ${2}. Skupina stroje je používána v pravidlech brány firewall.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The CIDR is used by firewall rules.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = '${2} není možné smazat. Daný IP adresní rozsah je používán v pravidlech brány firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Could not delete ${2}: it is the last member of host group ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = '${2} nelze smazat: je používáno síťovými službami';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = '${2} není možné smazat: tato časová podmínka je používaná pravidly brány firewall';
$L['valid_iprange_outofbounds'] = 'Je třeba, aby počáteční IP adresa byla nižší než ta koncová';

$L['Cidr_Title'] = 'CIDR podsítě';
$L['Address_label'] = 'Síť';
$L['Cidr_create_label'] = 'Vytvořit CIDR podsíť';
$L['Cidr_update_label'] = 'Aktualizovat CIDR podsíť';
$L['Cidr_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['Cidr_CreateCidr_label'] = 'Vytvořit CIDR podsíť';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Rozsahy IP adres';
$L['Start_label'] = 'Počáteční IP adresa';
$L['End_label'] = 'Koncová IP adresa';
$L['IpRange_create_label'] = 'Vytvořit rozsah IP adres';
$L['IpRange_update_label'] = 'Aktualizovat rozsah IP adres';
$L['IpRange_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['IpRange_CreateIpRange_label'] = 'Vytvořit IP rozsah';
$L['IpRangeKey_label'] = 'Rozsah IP adres';

$L['TimesKey_label'] = 'Název podmínky';
$L['TimeStart_label'] = 'Time start';
$L['TimeStop_label'] = 'Time stop';
$L['WeekDays_label'] = 'Dny v týdnu';
$L['TimeStop_compare_TimeStart_message'] = 'Value must be greater than "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'neděle';
$L['WeekDay_Mon_label'] = 'pondělí';
$L['WeekDay_Tue_label'] = 'úterý';
$L['WeekDay_Wed_label'] = 'středa';
$L['WeekDay_Thu_label'] = 'čtvrtek';
$L['WeekDay_Fri_label'] = 'pátek';
$L['WeekDay_Sat_label'] = 'sobota';
