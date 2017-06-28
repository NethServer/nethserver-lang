<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gestionează regulile firewall';
$L['FirewallRules_Tags'] = 'firewall regulă politică trafic ajustare';
$L['FirewallRules_Title'] = 'Reguli firewall';

$L['general_header'] = 'General';
$L['General_Title'] = 'Opțiuni generale';
$L['ExternalPing_label'] = 'Ping din Internet';
$L['permissive_label'] = 'Permis';
$L['Policy_label'] = 'Trafic spre Internet (interfață roșie)';
$L['strict_label'] = 'Blocat';
$L['enabled_label'] = 'Activat';
$L['disabled_label'] = 'Dezactivat';
$L['MACValidation_label'] = 'Validare MAC (IP/MAC binding)';
$L['MACValidationPolicy_label'] = 'Politică pentru gazdele fără IP/MAC binding (rezervare DHCP)';
$L['drop_label'] = 'Blochează trafic';
$L['accept_label'] = 'Permite trafic';

$L['Edit_header'] = 'Editează regula #${0}';
$L['status_label'] = 'Activat';
$L['Action_label'] = 'Acțiune';
$L['Rule_label'] = 'Regulă';
$L['ActionReject_label'] = 'Respinge';
$L['ActionAccept_label'] = 'Acceptă';
$L['ActionDrop_label'] = 'Abandonează';
$L['Source_label'] = 'Sursă';
$L['Destination_label'] = 'Destinație';
$L['Service_label'] = 'Serviciu';
$L['Time_label'] = 'Condiție de timp';
$L['PickSource_label'] = 'Alege unul/una....';
$L['PickDestination_label'] = 'Alege unul/una....';
$L['PickService_label'] = 'Alege unul/una....';
$L['LogType_label'] = 'Scrie în jurnal dacă regula se potrivește';

$L['PickObject_SrcRaw_header'] = 'Alege sursa pachetului pentru regula "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Alege destinația pachetului pentru regula "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Alege protocolul de serviciu pentru regula "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Alege condiția de timp pentru regula "${RuleId}"';

$L['Create_last_label'] = 'Crează o regulă la sfârșit';
$L['Create_first_label'] = 'Crează o regulă la început';
$L['Create_header'] = 'Crează o regulă firewall';
$L['Copy_header'] = 'Crează o copie a #${0}';
$L['Commit_label'] = 'Aplică modificările';
$L['Edit_label'] = 'Editează';
$L['EditRule_label'] = 'Editează regulă';
$L['EditService_label'] = 'Editează serviciu';
$L['Copy_label'] = 'Copiază';
$L['Delete_label'] = 'Șterge';
$L['Index_header'] = 'Reguli firewall';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Caută...';

$L['Delete_header'] = 'Șterge regula #${0}';
$L['Delete_message'] = 'Confirmă ștergerea regulii de firewall #${id}';
$L['HostGroups_create'] = 'Crează grupul gazdă "${0}"';
$L['Hosts_create'] = 'Crează gazda "${0}"';
$L['Zones_create'] = 'Crează zona "${0}"';
$L['Services_create'] = 'Crează obiectul de serviciu "${0}"';
$L['Time_create'] = 'Crează condiția de timp "${0}"';
$L['IpRange_create'] = 'Crează interval IP "${0}"';
$L['Cidr_create'] = 'Crează rețea CIDR "${0}"';

$L['A_new_rule_label'] = "Regulă nouă";
$L['NoRulesDefined_label'] = 'Nu există nici o regulă definită. Crează prima acum!';

$L['any_service_label'] = 'orice serviciu';
$L['any_src_dst_label'] = 'orice gazdă';
$L['Time_always'] = 'Întodeauna';
$L['Type_any_label'] = 'oricare';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'gazdă';
$L['zone_label'] = 'zonă';
$L['iprange_label'] = 'Interval IP';
$L['cidr_label'] = 'Rețea CIDR';
$L['host-group_label'] = 'grup';
$L['role_label'] = 'interfață';
$L['confirm_reload_label'] = 'Nici o modificare nu a fost aplicată.';

$L['FirewallObject_any_Title'] = 'Oricare';
$L['FirewallObject_fw_Title'] = 'Firewall';
$L['FirewallObject_host_Title'] = 'Gazda ${key}';
$L['FirewallObject_local_Title'] = 'Gazda LAN ${key}';
$L['FirewallObject_remote_Title'] = 'Gazda ${key}';
$L['FirewallObject_role_Title'] = 'Rolul ${key}';
$L['FirewallObject_zone_Title'] = 'Zona ${key}';
$L['FirewallObject_host-group_Title'] = 'Grupul gazdă ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - obiect serviciu';
$L['FirewallObject_time_Title'] = '${key} - condiție de timp';
$L['FirewallObject_service_Title'] = '${key} - serviciu rețea';
$L['FirewallObject_ndpi_Title'] = '${key} - protocol DPI';
$L['FirewallObject_iprange_Title'] = 'Interval IP ${key}';
$L['FirewallObject_cidr_Title'] = 'Rețea CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Arată rezultate ${partial} din ${total}';
$L['ActionRoute_label'] = 'Rută către ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Jurnal';

$L['ShowAction_label'] = 'Arată';
$L['ShowRules_label'] = 'Firewall';
$L['ShowRoutes_label'] = 'Politică rutare';
$L['ShowServices_label'] = 'Servicii de rețea';
$L['ShowTrafficShaping_label'] = 'Configurare trafic';

$L['ActionPriorityHigh_label'] = 'Prioritate înaltă';
$L['ActionPriorityLow_label'] = 'Prioritate scăzută';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Regulile de rutare nu permit zonei roșii să fie setată drept sursă';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Regulile de rutare permit numai următoarele tipuri de destinații: zonă, gazdă, interval IP, cidr, roșu.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selectarea "serviciului local" necesită destinația "firewall"';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Regulile de configurare a traficului nu permit zonei roșii să fie setată drept sursă';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Regulile de configurare a traficului permit numai următoarele tipuri de destinații: zonă, gazdă, interval IP, CIDR, roșu.';