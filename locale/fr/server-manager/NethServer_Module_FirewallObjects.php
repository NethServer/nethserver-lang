<?php 

$L['FirewallObjects_Description'] = 'Gérer les objets du pare-feu';
$L['FirewallObjects_Tags'] = 'pare-feu zone hôte service groupe objets';
$L['FirewallObjects_Title'] = 'Objets du pare-feu';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Groupe';
$L['HostGroups_create_label'] = 'Créer un groupe d\'hôte';
$L['HostGroups_CreateHostGroup_label'] = 'Créer un groupe d\'hôte';
$L['HostGroups_update_label'] = 'Editer le groupe d\'hôte "${0}"';
$L['HostGroups_Title'] = 'Groupes d\'hôtes';

$L['HostsKey_label'] = 'Hôte';
$L['Host_key_exists_message'] = 'Identifiant de l\'hôte déjà utilisé';
$L['Hosts_create_label'] = 'Créer un hôte';
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
$L['Port_range_validator'] = 'Plage de port dans la forme portbas-porthaut';
$L['Protocol_label'] = 'Protocole';
$L['name_label'] = 'Nom';
$L['ServicesKey_label'] = 'Service';
$L['Services_create_label'] = 'Créer service';
$L['Service_key_exists_message'] = 'Indentifiant du service déjà utilisé';
$L['Services_CreateService_label'] = 'Créer service';
$L['Services_update_label'] = 'Editer le service "${0}"';
$L['Services_Title'] = 'Services';
$L['Times_Title'] = 'Conditions de temps';
$L['Times_create_label'] = 'Créer une condition de temps';
$L['Times_update_label'] = 'Modifier la condition de temps "${0}"';
$L['Times_CreateTime_label'] = 'Créer une condition de temps';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP et UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zone';
$L['Zones_create_label'] = 'Créer une zone';
$L['Zone_key_exists_message'] = 'Indentifiant de zone déjà utilisé';
$L['Zones_CreateZone_label'] = 'Créer une zone';
$L['Zones_update_label'] = 'Editer la zone "${0}"';
$L['Zones_Title'] = 'Zones';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. La zone est utilisée par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le service est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. L\'hôte est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le groupe d\'hôtes est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. Le CIDR est utilisé par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2}. La plage d\'IP est utilisée par une ou des règles du pare-feu.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Impossible de supprimer ${2}: c\'est le dernier membre du groupe d\'hôtes  ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Impossible de supprimer ${2} : il est utilisé par un service réseau';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Impossible de supprimer ${2} : la condition de temps est utilisée par les règles du pare-feu.';
$L['valid_iprange_outofbounds'] = 'L\'adresse IP de début doit être inférieur à celle de fin';

$L['Cidr_Title'] = 'Sous-réseaux CIDR';
$L['Address_label'] = 'Réseau';
$L['Cidr_create_label'] = 'Créer sous-réseau CIDR';
$L['Cidr_update_label'] = 'Mettre à jour sous-réseau CIDR';
$L['Cidr_key_exists_message'] = 'Un objet avec ce nom existe déjà dans la base de donnée des hôtes';
$L['Cidr_CreateCidr_label'] = 'Créer réseau CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Plage d\'IP';
$L['Start_label'] = 'IP départ';
$L['End_label'] = 'IP fin';
$L['IpRange_create_label'] = 'Créer une plage d\'IP';
$L['IpRange_update_label'] = 'Mettre à jour la plage d\'IP';
$L['IpRange_key_exists_message'] = 'Un objet avec ce nom existe déjà dans la base de donnée des hôtes';
$L['IpRange_CreateIpRange_label'] = 'Créer une plage d\'IP';
$L['IpRangeKey_label'] = 'Plage d\'IP';

$L['TimesKey_label'] = 'Nom de la condition';
$L['TimeStart_label'] = 'Heure de départ';
$L['TimeStop_label'] = 'Heure d\'arrêt';
$L['WeekDays_label'] = 'Jours de la semaine';
$L['TimeStop_compare_TimeStart_message'] = 'La valeur doit être supérieure à "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'Dimanche';
$L['WeekDay_Mon_label'] = 'Lundi';
$L['WeekDay_Tue_label'] = 'Mardi';
$L['WeekDay_Wed_label'] = 'Mercredi';
$L['WeekDay_Thu_label'] = 'Jeudi';
$L['WeekDay_Fri_label'] = 'Vendredi';
$L['WeekDay_Sat_label'] = 'Samedi';
