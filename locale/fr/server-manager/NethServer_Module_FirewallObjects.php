<?php 

$L['FirewallObjects_Description'] = 'Gérer les objets du pare-feu';
$L['FirewallObjects_Tags'] = 'pare-feu zone hôte service groupe objets';
$L['FirewallObjects_Title'] = 'Objets du pare-feu';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Groupe';
$L['HostGroups_create_label'] = 'Create host group';
$L['HostGroups_CreateHostGroup_label'] = 'Create host group';
$L['HostGroups_update_label'] = 'Editer le groupe d\'hôte "${0}"';
$L['HostGroups_Title'] = 'Groupes d\'hôtes';

$L['HostsKey_label'] = 'Hôte';
$L['Host_key_exists_message'] = 'Identifiant de l\'hôte déjà utilisé';
$L['Hosts_create_label'] = 'Create host';
$L['Hosts_CreateHost_label'] = 'Créer un hôte';
$L['Hosts_update_label'] = 'Editer l\'hôte "${0}"';
$L['Hosts_Title'] = 'Hôtes';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interface';
$L['IpAddress_label'] = 'Adresse IP';
$L['Members_label'] = 'Membres';
$L['Members'] = 'Membres';
$L['Network_label'] = 'Réseau';
$L['Ports_label'] = 'Ports';
$L['Ports_validator'] = 'Liste de numéros de ports, séparés par une virgule';
$L['Protocol_label'] = 'Protocole';
$L['name_label'] = 'Nom';
$L['ServicesKey_label'] = 'Service';
$L['Services_create_label'] = 'Create service';
$L['Service_key_exists_message'] = 'Indentifiant du service déjà utilisé';
$L['Services_CreateService_label'] = 'Create service';
$L['Services_update_label'] = 'Editer le service "${0}"';
$L['Services_Title'] = 'Services';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP et UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zone';
$L['Zones_create_label'] = 'Create zone';
$L['Zone_key_exists_message'] = 'Indentifiant de zone déjà utilisé';
$L['Zones_CreateZone_label'] = 'Create zone';
$L['Zones_update_label'] = 'Editer la zone "${0}"';
$L['Zones_Title'] = 'Zones';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. La zone est utilisée par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le service est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. L\'hôte est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le groupe d\'hôtes est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Impossible de supprimer ${2}: c\'est le dernier membre du groupe d\'hôtes  ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'The start IP must be less than the end IP';

$L['Cidr_Title'] = 'CIDR subnets';
$L['Address_label'] = 'Network';
$L['Cidr_create_label'] = 'Create CIDR subnet';
$L['Cidr_update_label'] = 'Update CIDR subnet';
$L['Cidr_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['Cidr_CreateCidr_label'] = 'Create CIDR network';

$L['IpRange_Title'] = 'IP ranges';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'End IP';
$L['IpRange_create_label'] = 'Create IP range';
$L['IpRange_update_label'] = 'Update IP range';
$L['IpRange_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['IpRange_CreateIpRange_label'] = 'Create IP range';