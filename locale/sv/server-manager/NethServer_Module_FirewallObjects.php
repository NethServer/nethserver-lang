<?php 

$L['FirewallObjects_Description'] = 'Hantera brandväggs objekt';
$L['FirewallObjects_Tags'] = 'Brandvägg zoner värd tjänster grupp objekt';
$L['FirewallObjects_Title'] = 'Brandväggs objekt';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grupp';
$L['HostGroups_create_label'] = 'Skapa värdgrupp';
$L['HostGroups_CreateHostGroup_label'] = 'Skapa värdgrupp';
$L['HostGroups_update_label'] = 'Ändra värdgrupp "${0}"';
$L['HostGroups_Title'] = 'Värdgrupper';

$L['HostsKey_label'] = 'Värd';
$L['Host_key_exists_message'] = 'Värd identifierare användes redan';
$L['Hosts_create_label'] = 'Skapa värd';
$L['Hosts_CreateHost_label'] = 'Skapa värd';
$L['Hosts_update_label'] = 'Ändra värd "${0}"';
$L['Hosts_Title'] = 'Värdar';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interface';
$L['IpAddress_label'] = 'IP adress';
$L['Members_label'] = 'Medlammar';
$L['Members'] = 'Medlemmar';
$L['Network_label'] = 'Nätverk';
$L['Ports_label'] = 'Portar';
$L['Ports_validator'] = 'Komma separerar lista på portnummer';
$L['Protocol_label'] = 'Protokoll';
$L['name_label'] = 'Namn';
$L['ServicesKey_label'] = 'Tjänst';
$L['Services_create_label'] = 'Skapa tjänst';
$L['Service_key_exists_message'] = 'Tjänst identifierare används redan';
$L['Services_CreateService_label'] = 'Skapa tjänst';
$L['Services_update_label'] = 'Ändra tjänst "${0}"';
$L['Services_Title'] = 'Tjänster';
$L['Times_Title'] = 'Tids villkor';
$L['Times_create_label'] = 'Skapa tids villkor ';
$L['Times_update_label'] = 'Ändra tids villkor "${0}"';
$L['Times_CreateTime_label'] = 'Skapa tids villkor';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP och UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zon';
$L['Zones_create_label'] = 'Skapa zon';
$L['Zone_key_exists_message'] = 'Zon identifierare används redan';
$L['Zones_CreateZone_label'] = 'Skapa zon';
$L['Zones_update_label'] = 'Ändra zon "${0}"';
$L['Zones_Title'] = 'Zoner';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. Zonen används i brandväggens regler.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. Tjänsten används i brandväggens regler.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. Värden används i brandväggens regler';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. Värdgruppen används i brandväggens regler';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. CIDR användes i brandväggens regler.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}. IP intervall används i brandväggens regler.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Kan ej ta bort ${2}: är sista medlemmen i värdgruppen ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Kan ej ta bort ${2}: används av nätverks tjänster';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Kan ej ta bort ${2}: tids villkoren används i brandväggens regler';
$L['valid_iprange_outofbounds'] = 'Första IP måste vara lägren än avslutande IP';

$L['Cidr_Title'] = 'CIDR subnät';
$L['Address_label'] = 'Nätverk';
$L['Cidr_create_label'] = 'Skapa CIDR subnät';
$L['Cidr_update_label'] = 'Uppdatera CIDR subnät';
$L['Cidr_key_exists_message'] = 'Ett objekt med samma namn existerar redan i databasen för värdar';
$L['Cidr_CreateCidr_label'] = 'Skapa CIDR nätverk';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'IP-intervaller';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'Slut IP';
$L['IpRange_create_label'] = 'Skapa IP intervall';
$L['IpRange_update_label'] = 'Uppdatera IP intervall';
$L['IpRange_key_exists_message'] = 'Ett objekt med samma namn existerar redan i databasen för värdar';
$L['IpRange_CreateIpRange_label'] = 'Skapa IP intervall';
$L['IpRangeKey_label'] = 'IP-intervall';

$L['TimesKey_label'] = 'Villkors namn';
$L['TimeStart_label'] = 'Start tid';
$L['TimeStop_label'] = 'Stopp tid';
$L['WeekDays_label'] = 'Dag i veckan';
$L['TimeStop_compare_TimeStart_message'] = 'Värdet måste vara större än "Start tid" (${0})';

$L['WeekDay_Sun_label'] = 'Söndag';
$L['WeekDay_Mon_label'] = 'Måndag';
$L['WeekDay_Tue_label'] = 'Tisdag';
$L['WeekDay_Wed_label'] = 'Onsdag';
$L['WeekDay_Thu_label'] = 'Torsdag';
$L['WeekDay_Fri_label'] = 'Fredag';
$L['WeekDay_Sat_label'] = 'Lördag';
