<?php 

$L['FirewallObjects_Description'] = 'Gestionează obiecte firewall';
$L['FirewallObjects_Tags'] = 'Firewall zonă gazdă serviciu grup obiecte';
$L['FirewallObjects_Title'] = 'Obiecte firewall';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grup';
$L['HostGroups_create_label'] = 'Crează grup gazdă';
$L['HostGroups_CreateHostGroup_label'] = 'Crează grup gazdă';
$L['HostGroups_update_label'] = 'Editează grup gazdă "${0}"';
$L['HostGroups_Title'] = 'Grupuri gazdă';

$L['HostsKey_label'] = 'Gazdă';
$L['Host_key_exists_message'] = 'Identificator gazdă deja în uz';
$L['Hosts_create_label'] = 'Crează gazdă';
$L['Hosts_CreateHost_label'] = 'Crează gazdă';
$L['Hosts_update_label'] = 'Editează gazdă "${0}"';
$L['Hosts_Title'] = 'Gazde';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Interfață';
$L['IpAddress_label'] = 'Adresă IP';
$L['Members_label'] = 'Membri';
$L['Members'] = 'Membri';
$L['Network_label'] = 'Rețea';
$L['Ports_label'] = 'Porturi';
$L['Ports_validator'] = 'Listă cu numerele de porturi separate prin virgulă';
$L['Protocol_label'] = 'Protocol';
$L['name_label'] = 'Nume';
$L['ServicesKey_label'] = 'Serviciu';
$L['Services_create_label'] = 'Crează serviciu';
$L['Service_key_exists_message'] = 'Identificator serviciu deja în uz';
$L['Services_CreateService_label'] = 'Crează serviciu';
$L['Services_update_label'] = 'Editează serviciu "${0}"';
$L['Services_Title'] = 'Servicii';
$L['Times_Title'] = 'Condiții interval timp';
$L['Times_create_label'] = 'Crează condiție de timp';
$L['Times_update_label'] = 'Editează condiția de timp "${0}"';
$L['Times_CreateTime_label'] = 'Crează condiție de timp';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP și UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zonă';
$L['Zones_create_label'] = 'Crează zonă';
$L['Zone_key_exists_message'] = 'Identificator zonă deja în uz';
$L['Zones_CreateZone_label'] = 'Crează zonă';
$L['Zones_update_label'] = 'Editează zona "${0}"';
$L['Zones_Title'] = 'Zone';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. Zona este utilizată de către regulile firewall.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. Serviciul este utilizat de către regulile firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. Gazda este utilizată de către regulile firewall.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. Grupul gazdei este utilizat de către regulile firewall.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. CIDR este utilizat de către regulile firewall.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}. Intervalul IP este utilizat de regulile firewall.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Nu se poate șterge ${2}: este ultimul membru al grupului gazdă ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Nu se poate șterge ${2}: este utilizat de serviciile de rețea.';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Nu se poate șterge ${2}: condiția de timp este utilizată de către regulile firewall.';
$L['valid_iprange_outofbounds'] = 'IP-ul de pornire trebuie sa fie mai mic decât IP-ul de final';

$L['Cidr_Title'] = 'Subrețele CIDR';
$L['Address_label'] = 'Rețea';
$L['Cidr_create_label'] = 'Crează subrețea CIDR';
$L['Cidr_update_label'] = 'Actualizează subrețea CIDR';
$L['Cidr_key_exists_message'] = 'Un obiect cu același nume există în baza de date a gazdelor';
$L['Cidr_CreateCidr_label'] = 'Crează rețea CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Intervalele IP';
$L['Start_label'] = 'IP de start';
$L['End_label'] = 'IP de final';
$L['IpRange_create_label'] = 'Crează interval IP';
$L['IpRange_update_label'] = 'Actualizează interval IP';
$L['IpRange_key_exists_message'] = 'Un obiect cu același nume există în baza de date a gazdelor';
$L['IpRange_CreateIpRange_label'] = 'Crează interval IP';
$L['IpRangeKey_label'] = 'Interval IP';

$L['TimesKey_label'] = 'Nume condiție';
$L['TimeStart_label'] = 'Oră pornire';
$L['TimeStop_label'] = 'Oră oprire';
$L['WeekDays_label'] = 'Zilele săptămânii';
$L['TimeStop_compare_TimeStart_message'] = 'Valoarea trebuie să fie mai mare decât "Ora de pornire" (${0})';

$L['WeekDay_Sun_label'] = 'Duminică';
$L['WeekDay_Mon_label'] = 'Luni';
$L['WeekDay_Tue_label'] = 'Marți';
$L['WeekDay_Wed_label'] = 'Miercuri';
$L['WeekDay_Thu_label'] = 'Joi';
$L['WeekDay_Fri_label'] = 'Vineri';
$L['WeekDay_Sat_label'] = 'Sâmbătă';
