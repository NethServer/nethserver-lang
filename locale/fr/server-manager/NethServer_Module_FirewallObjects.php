<?php 

/* NethServer_Module_FirewallObjects translation, language: en */

$L['FirewallObjects_Description'] = 'Gérer les objets du pare-feu';
$L['FirewallObjects_Tags'] = 'pare-feu zone hôte service groupe objets';
$L['FirewallObjects_Title'] = 'Objets du pare-feu';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Groupe';
$L['HostGroups_create_label'] = 'Créer un nouveau groupe d\'hôtes';
$L['HostGroups_CreateHostGroup_label'] = 'Créer un nouveau groupe d\'hôtes';
$L['HostGroups_update_label'] = 'Editer le groupe d\'hôte "${0}"';
$L['HostGroups_Title'] = 'Groupes d\'hôtes';
$L['HostsKey_label'] = 'Hôte';
$L['Host_key_exists_message'] = 'Identifiant de l\'hôte déjà utilisé';
$L['Hosts_create_label'] = 'Créer un nouvel hôte';
$L['Hosts_CreateHost_label'] = 'Créer un nouvel hôte';
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
$L['Services_create_label'] = 'Créer une nouveau service';
$L['Service_key_exists_message'] = 'Indentifiant du service déjà utilisé';
$L['Services_CreateService_label'] = 'Créer un nouveau service';
$L['Services_update_label'] = 'Editer le service "${0}"';
$L['Services_Title'] = 'Services';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP et UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zone';
$L['Zones_create_label'] = 'Créer une nouvelle zone';
$L['Zone_key_exists_message'] = 'Indentifiant de zone déjà utilisé';
$L['Zones_CreateZone_label'] = 'Créer une nouvelle zone';
$L['Zones_update_label'] = 'Editer la zone "${0}"';
$L['Zones_Title'] = 'Zones';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. La zone est utilisée par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le service est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. L\'hôte est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le groupe d\'hôtes est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Impossible de supprimer ${2}: c\'est le dernier membre du groupe d\'hôtes  ${${reason}}.';
