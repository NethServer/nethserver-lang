<?php 

$L['FirewallObjects_Description'] = 'Verwalte Firewall Objekte';
$L['FirewallObjects_Tags'] = 'Firewall zone host service gruppe objekt';
$L['FirewallObjects_Title'] = 'Firewallobjekte';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Gruppe';
$L['HostGroups_create_label'] = 'Erstelle Host Gruppe';
$L['HostGroups_CreateHostGroup_label'] = 'Erstelle Host Gruppe';
$L['HostGroups_update_label'] = 'Edit host group "${0}"';
$L['HostGroups_Title'] = 'Host groups';

$L['HostsKey_label'] = 'Host';
$L['Host_key_exists_message'] = 'Host identifier already in use';
$L['Hosts_create_label'] = 'Erstelle Host';
$L['Hosts_CreateHost_label'] = 'Erstelle Host';
$L['Hosts_update_label'] = 'Edit host "${0}"';
$L['Hosts_Title'] = 'Hosts';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Schnittstelle';
$L['IpAddress_label'] = 'IP Adresse';
$L['Members_label'] = 'Mitglieder';
$L['Members'] = 'Mitglieder';
$L['Network_label'] = 'Netzwerk';
$L['Ports_label'] = 'Ports';
$L['Ports_validator'] = 'Comma separated list of port numbers';
$L['Protocol_label'] = 'Protokoll';
$L['name_label'] = 'Name';
$L['ServicesKey_label'] = 'Dienst';
$L['Services_create_label'] = 'Service erstellen';
$L['Service_key_exists_message'] = 'Service identifier already in use';
$L['Services_CreateService_label'] = 'Service erstellen';
$L['Services_update_label'] = 'Edit service "${0}"';
$L['Services_Title'] = 'Dienste';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP und UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zone';
$L['Zones_create_label'] = 'Zone anlegen';
$L['Zone_key_exists_message'] = 'Zone identifier already in use';
$L['Zones_CreateZone_label'] = 'Zone erstellen';
$L['Zones_update_label'] = 'Edit zone "${0}"';
$L['Zones_Title'] = 'Zonen';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The zone is used by firewall rules.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The service is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The host is used by firewall rules.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The host group is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Could not delete ${2}: it is the last member of host group ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'The start IP must be less than the end IP';

$L['Cidr_Title'] = 'CIDR subnets';
$L['Address_label'] = 'Netzwerk';
$L['Cidr_create_label'] = 'Create CIDR subnet';
$L['Cidr_update_label'] = 'Update CIDR subnet';
$L['Cidr_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['Cidr_CreateCidr_label'] = 'Create CIDR network';

$L['IpRange_Title'] = 'IP Bereich';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'End IP';
$L['IpRange_create_label'] = 'Create IP range';
$L['IpRange_update_label'] = 'Update IP Bereich';
$L['IpRange_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['IpRange_CreateIpRange_label'] = 'Create IP range';