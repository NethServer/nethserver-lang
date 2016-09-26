<?php 

$L['FirewallObjects_Description'] = 'Gestione oggetti del firewall';
$L['FirewallObjects_Tags'] = 'firewall zone host servizio servizi gruppo gruppi oggetti';
$L['FirewallObjects_Title'] = 'Oggetti firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Gruppo';
$L['HostGroups_create_label'] = 'Crea un nuovo gruppo di host';
$L['HostGroups_CreateHostGroup_label'] = 'Crea un nuovo gruppo di host';
$L['HostGroups_update_label'] = 'Modifica il gruppo di host "${0}"';
$L['HostGroups_Title'] = 'Gruppi di host';

$L['HostsKey_label'] = 'Host';
$L['Host_key_exists_message'] = 'Identificatore host già in uso';
$L['Hosts_create_label'] = 'Crea un nuovo host';
$L['Hosts_CreateHost_label'] = 'Crea un nuovo host';
$L['Hosts_update_label'] = 'Modifica l\'host "${0}"';
$L['Hosts_Title'] = 'Host';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interfaccia';
$L['IpAddress_label'] = 'Indirizzo IP';
$L['Members_label'] = 'Membri';
$L['Members'] = 'Membri';
$L['Network_label'] = 'Indirizzo di rete';
$L['Ports_label'] = 'Porte';
$L['Ports_validator'] = 'Elenco di porte separato da virgola';
$L['Protocol_label'] = 'Protocollo';
$L['name_label'] = 'Nome';
$L['ServicesKey_label'] = 'Servizio';
$L['Services_create_label'] = 'Crea un nuovo servizio';
$L['Service_key_exists_message'] = 'Identificatore servizio già in uso';
$L['Services_CreateService_label'] = 'Crea un nuovo servizio';
$L['Services_update_label'] = 'Modifica il servizio "${0}"';
$L['Services_Title'] = 'Servizi';
$L['Times_Title'] = 'Condizioni temporali';
$L['Times_create_label'] = 'Create condizione temporale';
$L['Times_update_label'] = 'Modifica condizione temporale "${0}"';
$L['Times_CreateTime_label'] = 'Create condizione temporale';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP e UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zona';
$L['Zones_create_label'] = 'Crea una nuova zona';
$L['Zone_key_exists_message'] = 'Identificatore zona già in uso';
$L['Zones_CreateZone_label'] = 'Crea una nuova zona';
$L['Zones_update_label'] = 'Modifica la zona "${0}"';
$L['Zones_Title'] = 'Zone';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. La zona è utilizzata dalle regole del firewall.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. Il servizio è utilizzato dalle regole del firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. L\'host è utilizzato dalle regole del firewall.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. Il gruppo di host è utilizzato dalle regole del firewall.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. La rete CIDR è usata dalle regole del firewall.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. Il range IP è usata dalle regole del firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Impossibile eliminare ${2}: è l\'ultimo membro del gruppo di host ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Impossibile eliminare ${2}: è utilizzato da servizi di rete';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Impossibile eliminare ${2}. La condizione temporale è utilizzata dalle regole del firewall.';
$L['valid_iprange_outofbounds'] = 'L\'IP iniziale deve essere più piccolo di quello finale';

$L['Cidr_Title'] = 'Reti CIDR';
$L['Address_label'] = 'Rete';
$L['Cidr_create_label'] = 'Crea una rete CIDR';
$L['Cidr_update_label'] = 'Aggiorna rete CIDR';
$L['Cidr_key_exists_message'] = 'Un oggetto con lo stesso identificatore esiste già';
$L['Cidr_CreateCidr_label'] = 'Crea rete CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Range IP';
$L['Start_label'] = 'IP inizio';
$L['End_label'] = 'IP fine';
$L['IpRange_create_label'] = 'Crea un range IP';
$L['IpRange_update_label'] = 'Aggiorna range IP';
$L['IpRange_key_exists_message'] = 'Un oggetto con lo stesso identificatore esiste già';
$L['IpRange_CreateIpRange_label'] = 'Crea range IP';
$L['IpRangeKey_label'] = 'Range IP';

$L['TimesKey_label'] = 'Nome';
$L['TimeStart_label'] = 'Ora inizio';
$L['TimeStop_label'] = 'Ora fine';
$L['WeekDays_label'] = 'Giorni della settimana';
$L['TimeStop_compare_TimeStart_message'] = 'Il tempo di fine deve essere maggiore del tempo di inizio';

$L['WeekDay_Sun_label'] = 'Domenica';
$L['WeekDay_Mon_label'] = 'Lunedì';
$L['WeekDay_Tue_label'] = 'Martedì';
$L['WeekDay_Wed_label'] = 'Mercoledì';
$L['WeekDay_Thu_label'] = 'Giovedì';
$L['WeekDay_Fri_label'] = 'Venerdì';
$L['WeekDay_Sat_label'] = 'Sabato';
