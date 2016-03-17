<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Spravovat pravidla brány firewall';
$L['FirewallRules_Tags'] = 'firewall rule policy';
$L['FirewallRules_Title'] = 'Pravidla brány firewall';

$L['general_header'] = 'Obecné';
$L['General_Title'] = 'Obecné předvolby';
$L['ExternalPing_label'] = 'Ping from Internet';
$L['permissive_label'] = 'Allowed';
$L['Policy_label'] = 'Traffic to Internet (red interface)';
$L['strict_label'] = 'Blokováno';
$L['enabled_label'] = 'Zapnuto';
$L['disabled_label'] = 'Vypnuto';
$L['MACValidation_label'] = 'MAC validation (IP/MAC binding)';
$L['MACValidationPolicy_label'] = 'Policy for hosts without IP/MAC binding (DHCP reservation)';
$L['drop_label'] = 'Block traffic';
$L['accept_label'] = 'Allow trafic';

$L['Edit_header'] = 'Upravit pravidlo #${0}';
$L['status_label'] = 'Zapnuto';
$L['Action_label'] = 'Akce';
$L['ActionReject_label'] = 'Odmítnout';
$L['ActionAccept_label'] = 'Přimout';
$L['ActionDrop_label'] = 'Zahodit';
$L['Source_label'] = 'Zdroj';
$L['Destination_label'] = 'Cíl';
$L['Service_label'] = 'Služba';
$L['PickSource_label'] = 'Pick one...';
$L['PickDestination_label'] = 'Pick one...';
$L['PickService_label'] = 'Pick one...';
$L['LogType_label'] = 'Write to log if this rule matches';

$L['PickObject_SrcRaw_header'] = 'Choose the packet source for rule "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Choose the packet destination for rule "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Choose the service protocol for rule "${RuleId}"';

$L['Create_last_label'] = 'Create rule at bottom';
$L['Create_first_label'] = 'Create rule at top';
$L['Create_header'] = 'Vytvořit pravidlo brány firewall';
$L['Copy_header'] = 'Create a copy of #${0}';
$L['Commit_label'] = 'Uplatnit změny';
$L['Edit_label'] = 'Upravit';
$L['Copy_label'] = 'Kopírovat';
$L['Delete_label'] = 'Smazat';
$L['Index_header'] = 'Pravidla brány firewall';
$L['RuleText_label'] = 'From ${Src} to ${Dst}, service ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Hledat…';

$L['Delete_header'] = 'Delete rule #${0}';
$L['Delete_message'] = 'Confirm deletion of firewall rule #${id}';
$L['HostGroups_create'] = 'Create host group "${0}"';
$L['Hosts_create'] = 'Create host "${0}"';
$L['Zones_create'] = 'Create zone"${0}"';
$L['Services_create'] = 'Create service "${0}"';
$L['IpRange_create'] = 'Create IP range "${0}"';
$L['Cidr_create'] = 'Create CIDR network "${0}"';

$L['A_new_rule_label'] = "Nové pravidlo";
$L['Any_label'] = 'Any';
$L['NoRulesDefined_label'] = 'No rules are defined. Create the first one now!';

$L['any_service_label'] = 'any service';
$L['any_src_dst_label'] = 'any host';
$L['all_label'] = 'any';
$L['host_label'] = 'stroj';
$L['zone_label'] = 'zóna';
$L['iprange_label'] = 'Rozsah IP adres';
$L['cidr_label'] = 'CIDR network';
$L['host-group_label'] = 'skupina';
$L['role_label'] = 'rozhraní';
$L['confirm_reload_label'] = 'No change has been applied.';

$L['FirewallObject_any_Title'] = 'Any';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Role ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Host group ${key}';
$L['FirewallObject_fwservice_Title'] = 'Service ${key}';
$L['FirewallObject_iprange_Title'] = 'IP range ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR network ${key}';

$L['Show_x_outof_y_label'] = 'Showing ${partial} results out of ${total}';
$L['ActionRoute_label'] = 'Route to ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Záznam událostí';

$L['ShowAction_label'] = 'Zobrazit';
$L['ShowAll_label'] = 'Vše';
$L['ShowRules_label'] = 'Brána firewall';
$L['ShowRoutes_label'] = 'Policy routing';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Route rules do not allow the red zone to be set as Source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Route rules allow only the following Destination types: zone, host, ip range, cidr, red.';
