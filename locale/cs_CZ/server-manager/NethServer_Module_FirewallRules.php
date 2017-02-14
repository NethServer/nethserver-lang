<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Spravovat pravidla brány firewall';
$L['FirewallRules_Tags'] = 'pravidlo brány firewall zásada omezování provozu';
$L['FirewallRules_Title'] = 'Pravidla brány firewall';

$L['general_header'] = 'Obecné';
$L['General_Title'] = 'Obecné předvolby';
$L['ExternalPing_label'] = 'Ping z Internetu';
$L['permissive_label'] = 'Allowed';
$L['Policy_label'] = 'Provoz do Internetu (červené rozhraní)';
$L['strict_label'] = 'Blokováno';
$L['enabled_label'] = 'Zapnuto';
$L['disabled_label'] = 'Vypnuto';
$L['MACValidation_label'] = 'Ověřování MAC adresy (spojování IP/MAC adrese)';
$L['MACValidationPolicy_label'] = 'Policy for hosts without IP/MAC binding (DHCP reservation)';
$L['drop_label'] = 'Blokovat provoz';
$L['accept_label'] = 'Umožnit provoz';

$L['Edit_header'] = 'Upravit pravidlo #${0}';
$L['status_label'] = 'Zapnuto';
$L['Action_label'] = 'Akce';
$L['Rule_label'] = 'Pravidl';
$L['ActionReject_label'] = 'Odmítnout';
$L['ActionAccept_label'] = 'Přimout';
$L['ActionDrop_label'] = 'Zahodit';
$L['Source_label'] = 'Zdroj';
$L['Destination_label'] = 'Cíl';
$L['Service_label'] = 'Služba';
$L['Time_label'] = 'Časová podmínka';
$L['PickSource_label'] = 'Zvolte jedno…';
$L['PickDestination_label'] = 'Zvolte jedno…';
$L['PickService_label'] = 'Zvolte jedno…';
$L['LogType_label'] = 'Pokud je toto pravidlo uplatněno, zapsat do záznamu událostí';

$L['PickObject_SrcRaw_header'] = 'Zvolte zdroj paketů pro pravidlo „${RuleId}“';
$L['PickObject_DstRaw_header'] = 'Zvolte cíl paketů pro pravidlo „${RuleId}“';
$L['PickObject_ServiceRaw_header'] = 'Zvolte servisní protokol pro pravidlo „${RuleId}“';
$L['PickObject_TimeRaw_header'] = 'Zvolte časovou podmínku pro pravidlo „${RuleId}“';

$L['Create_last_label'] = 'Vytvořit pravidlo na konci seznamu';
$L['Create_first_label'] = 'Vytvořit pravidlo na začátku seznamu';
$L['Create_header'] = 'Vytvořit pravidlo brány firewall';
$L['Copy_header'] = 'Vytvořit kopii z #${0}';
$L['Commit_label'] = 'Uplatnit změny';
$L['Edit_label'] = 'Upravit';
$L['EditRule_label'] = 'Upravit pravidlo';
$L['EditService_label'] = 'Upravit nastavení služby';
$L['Copy_label'] = 'Kopírovat';
$L['Delete_label'] = 'Smazat';
$L['Index_header'] = 'Pravidla brány firewall';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Hledat…';

$L['Delete_header'] = 'Smazat pravidlo #${0}';
$L['Delete_message'] = 'Potvrzení odstranění pravidla brány firewall #${id}';
$L['HostGroups_create'] = 'Create host group "${0}"';
$L['Hosts_create'] = 'Vytvořit stroj „${0}“';
$L['Zones_create'] = 'Vytvořit zónu „${0}“';
$L['Services_create'] = 'Create service object "${0}"';
$L['Time_create'] = 'Vytvořit časovou podmínku „${0}“';
$L['IpRange_create'] = 'Create IP range "${0}"';
$L['Cidr_create'] = 'Create CIDR network "${0}"';

$L['A_new_rule_label'] = "Nové pravidlo";
$L['NoRulesDefined_label'] = 'Nejsou určená žádná pravidla. Nejprve nějaké vytvořte!';

$L['any_service_label'] = 'libovolná služba';
$L['any_src_dst_label'] = 'libovolný stroj';
$L['Time_always'] = 'Vždy';
$L['Type_any_label'] = 'libovolné';
$L['Type_fw_label'] = 'brána firewall';
$L['host_label'] = 'stroj';
$L['zone_label'] = 'zóna';
$L['iprange_label'] = 'Rozsah IP adres';
$L['cidr_label'] = 'CIDR network';
$L['host-group_label'] = 'skupina';
$L['role_label'] = 'rozhraní';
$L['confirm_reload_label'] = 'No change has been applied.';

$L['FirewallObject_any_Title'] = 'Libovolné';
$L['FirewallObject_fw_Title'] = 'Brána firewall';
$L['FirewallObject_host_Title'] = 'Stroj ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Stroj ${key}';
$L['FirewallObject_role_Title'] = 'Role ${key}';
$L['FirewallObject_zone_Title'] = 'Oblast ${key}';
$L['FirewallObject_host-group_Title'] = 'Host group ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - service object';
$L['FirewallObject_time_Title'] = '${key} - time condition';
$L['FirewallObject_service_Title'] = '${key} - network service';
$L['FirewallObject_ndpi_Title'] = '${key} - DPI protocol';
$L['FirewallObject_iprange_Title'] = 'Rozsah IP adres ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR network ${key}';

$L['Show_x_outof_y_label'] = 'Showing ${partial} results out of ${total}';
$L['ActionRoute_label'] = 'Trasa do ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Záznam událostí';

$L['ShowAction_label'] = 'Zobrazit';
$L['ShowRules_label'] = 'Brána firewall';
$L['ShowRoutes_label'] = 'Policy routing';
$L['ShowServices_label'] = 'Síťové služby';
$L['ShowTrafficShaping_label'] = 'Omezování rychlosti síťového provozu';

$L['ActionPriorityHigh_label'] = 'Vysoká priorita';
$L['ActionPriorityLow_label'] = 'Nízká priorita';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Route rules do not allow the red zone to be set as Source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Route rules allow only the following Destination types: zone, host, ip range, cidr, red.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecting "local service" requires the "firewall" destination.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic shaping rules do not allow the red zone to be set as source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic shaping rules allow only the following Destination types: zone, host, IP range, CIDR, red';