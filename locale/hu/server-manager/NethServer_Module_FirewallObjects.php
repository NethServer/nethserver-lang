<?php 

$L['FirewallObjects_Description'] = 'Tűzfal objektumok kezelése';
$L['FirewallObjects_Tags'] = 'Firewall zone host service group objects';
$L['FirewallObjects_Title'] = 'Tűzfal objektumok';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Csoport';
$L['HostGroups_create_label'] = 'Hoszt csoport létrehozása';
$L['HostGroups_CreateHostGroup_label'] = 'Hoszt csoport létrehozása';
$L['HostGroups_update_label'] = 'Hoszt csoport szerkesztése "${0}"';
$L['HostGroups_Title'] = 'Hoszt csoportok';

$L['HostsKey_label'] = 'Hoszt';
$L['Host_key_exists_message'] = 'Hoszt azonosító már létezik';
$L['Hosts_create_label'] = 'Hoszt létrehozása';
$L['Hosts_CreateHost_label'] = 'Hoszt létrehozása';
$L['Hosts_update_label'] = 'Hoszt szerkesztése "${0}"';
$L['Hosts_Title'] = 'Hosztok';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interfész';
$L['IpAddress_label'] = 'IP cím';
$L['Members_label'] = 'Tagok';
$L['Members'] = 'Tagok';
$L['Network_label'] = 'Hálózat';
$L['Ports_label'] = 'Portok';
$L['Ports_validator'] = 'Comma separated list of port numbers';
$L['Protocol_label'] = 'Protokoll';
$L['name_label'] = 'Név';
$L['ServicesKey_label'] = 'Szolgáltatás';
$L['Services_create_label'] = 'Szolgáltatás létrehozása';
$L['Service_key_exists_message'] = 'Service identifier already in use';
$L['Services_CreateService_label'] = 'Szolgáltatás létrehozása';
$L['Services_update_label'] = 'Szolgáltatás szerkesztése "${0}"';
$L['Services_Title'] = 'Szolgáltatások';
$L['Times_Title'] = 'Time conditions';
$L['Times_create_label'] = 'Create time condition';
$L['Times_update_label'] = 'Edit time condition "${0}"';
$L['Times_CreateTime_label'] = 'Create time condition';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP és UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zóna';
$L['Zones_create_label'] = 'Zóna létrehozása';
$L['Zone_key_exists_message'] = 'Zóna azonosító már létezik';
$L['Zones_CreateZone_label'] = 'Zóna létrehozása';
$L['Zones_update_label'] = 'Zóna szerkesztése "${0}"';
$L['Zones_Title'] = 'Zónák';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Nem tudom törölni ${2}. A zóna szerepel a tűzfalszabályok között';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Nem tudom törölni ${2}. A szolágáltatás szerepel a tűzfalszabályok között';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = '${2} nem törölhető.A hoszt tűzfalszabályok között szerepel.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = '${2} nem törölhető.A hoszt csoport a tűzfalszabályok között szerepel.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The CIDR is used by firewall rules.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The IP range is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Could not delete ${2}: it is the last member of host group ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Could not delete ${2}: it is used by network services';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Could not delete ${2}: the time condition is used by firewall rules';
$L['valid_iprange_outofbounds'] = 'The start IP must be less than the end IP';

$L['Cidr_Title'] = 'CIDR alhálózatok';
$L['Address_label'] = 'Hálózat';
$L['Cidr_create_label'] = 'Új CIDR alhálózat létrehozása';
$L['Cidr_update_label'] = 'CIDR subnet frissítése';
$L['Cidr_key_exists_message'] = 'Ez az objektum `$ {1} \'már használatban van a hálózati adatbázison belül';
$L['Cidr_CreateCidr_label'] = 'Új CIDR alhálózat létrehozása';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'IP tartományok';
$L['Start_label'] = 'Kezdő IP cím';
$L['End_label'] = 'Utolsó IP cím';
$L['IpRange_create_label'] = 'IP tartomány létrehozása';
$L['IpRange_update_label'] = 'IP tartomány frissítése';
$L['IpRange_key_exists_message'] = 'Ez az objektum már használatban van a hálózati adatbázison belül';
$L['IpRange_CreateIpRange_label'] = 'IP tartomány létrehozása';
$L['IpRangeKey_label'] = 'IP tartomány';

$L['TimesKey_label'] = 'Condition name';
$L['TimeStart_label'] = 'Time start';
$L['TimeStop_label'] = 'Time stop';
$L['WeekDays_label'] = 'Days of the week';
$L['TimeStop_compare_TimeStart_message'] = 'Value must be greater than "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'vasárnap';
$L['WeekDay_Mon_label'] = 'hétfő';
$L['WeekDay_Tue_label'] = 'kedd';
$L['WeekDay_Wed_label'] = 'szerda';
$L['WeekDay_Thu_label'] = 'csütörtök';
$L['WeekDay_Fri_label'] = 'péntek';
$L['WeekDay_Sat_label'] = 'szombat';
