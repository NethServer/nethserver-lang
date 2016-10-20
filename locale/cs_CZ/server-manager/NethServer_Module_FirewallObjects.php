<?php 

$L['FirewallObjects_Description'] = 'Spravovat objekty brány firewall';
$L['FirewallObjects_Tags'] = 'Brána firewal stroj služba skupina objekty';
$L['FirewallObjects_Title'] = 'Objekty brány firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Skupina';
$L['HostGroups_create_label'] = 'Create host group';
$L['HostGroups_CreateHostGroup_label'] = 'Create host group';
$L['HostGroups_update_label'] = 'Edit host group "${0}"';
$L['HostGroups_Title'] = 'Host groups';

$L['HostsKey_label'] = 'Stroj';
$L['Host_key_exists_message'] = 'Host identifier already in use';
$L['Hosts_create_label'] = 'Create host';
$L['Hosts_CreateHost_label'] = 'Create host';
$L['Hosts_update_label'] = 'Edit host "${0}"';
$L['Hosts_Title'] = 'Stroje';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Rozhraní';
$L['IpAddress_label'] = 'IP adresa';
$L['Members_label'] = 'Členové';
$L['Members'] = 'Členové';
$L['Network_label'] = 'Síť';
$L['Ports_label'] = 'Porty';
$L['Ports_validator'] = 'Seznam čísel portů – jednotlivé položky oddělujte čárkou';
$L['Protocol_label'] = 'Protokol';
$L['name_label'] = 'Název';
$L['ServicesKey_label'] = 'Služba';
$L['Services_create_label'] = 'Vytvořit službu';
$L['Service_key_exists_message'] = 'Service identifier already in use';
$L['Services_CreateService_label'] = 'Vytvořit službu';
$L['Services_update_label'] = 'Edit service "${0}"';
$L['Services_Title'] = 'Služby';
$L['Times_Title'] = 'Time conditions';
$L['Times_create_label'] = 'Create time condition';
$L['Times_update_label'] = 'Edit time condition "${0}"';
$L['Times_CreateTime_label'] = 'Create time condition';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP a UDP';
$L['udp_label'] = ' ';
$L['ZonesKey_label'] = 'Zóna';
$L['Zones_create_label'] = 'Vytvořit zónu';
$L['Zone_key_exists_message'] = 'Zone identifier already in use';
$L['Zones_CreateZone_label'] = 'Vytvořit zónu';
$L['Zones_update_label'] = 'Edit zone "${0}"';
$L['Zones_Title'] = 'Zóny';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The zone is used by firewall rules.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The service is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The host is used by firewall rules.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The host group is used by firewall rules.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The CIDR is used by firewall rules.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The IP range is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Could not delete ${2}: it is the last member of host group ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Could not delete ${2}: it is used by network services';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Could not delete ${2}: the time condition is used by firewall rules';
$L['valid_iprange_outofbounds'] = 'The start IP must be less than the end IP';

$L['Cidr_Title'] = 'CIDR podsítě';
$L['Address_label'] = 'Síť';
$L['Cidr_create_label'] = 'Create CIDR subnet';
$L['Cidr_update_label'] = 'Update CIDR subnet';
$L['Cidr_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['Cidr_CreateCidr_label'] = 'Create CIDR network';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Rozsahy IP adres';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'End IP';
$L['IpRange_create_label'] = 'Create IP range';
$L['IpRange_update_label'] = 'Update IP range';
$L['IpRange_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['IpRange_CreateIpRange_label'] = 'Create IP range';
$L['IpRangeKey_label'] = 'Rozsah IP adres';

$L['TimesKey_label'] = 'Název podmínky';
$L['TimeStart_label'] = 'Time start';
$L['TimeStop_label'] = 'Time stop';
$L['WeekDays_label'] = 'Days of the week';
$L['TimeStop_compare_TimeStart_message'] = 'Value must be greater than "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'neděle';
$L['WeekDay_Mon_label'] = 'pondělí';
$L['WeekDay_Tue_label'] = 'úterý';
$L['WeekDay_Wed_label'] = 'středa';
$L['WeekDay_Thu_label'] = 'čtvrtek';
$L['WeekDay_Fri_label'] = 'pátek';
$L['WeekDay_Sat_label'] = 'sobota';
