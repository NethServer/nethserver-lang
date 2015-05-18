<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Verwalte Firewallregeln';
$L['FirewallRules_Tags'] = 'firewall regel regel';
$L['FirewallRules_Title'] = 'Firewallregeln';

$L['general_header'] = 'Allgemein';
$L['General_Title'] = 'Allgemeine Optionen';
$L['ExternalPing_label'] = 'Ping vom Internet';
$L['permissive_label'] = 'Erlaubt';
$L['Policy_label'] = 'Traffic to Internet (red interface)';
$L['strict_label'] = 'Gesperrt';
$L['enabled_label'] = 'aktiviert';
$L['disabled_label'] = 'deaktiviert';
$L['MACValidation_label'] = 'MAC validation (IP/MAC binding)';
$L['MACValidationPolicy_label'] = 'Policy for hosts without IP/MAC binding (DHCP reservation)';
$L['drop_label'] = 'Gesperrter Verkehr';
$L['accept_label'] = 'Erlaube Verkehr';

$L['Edit_header'] = 'Edit rule #${0}';
$L['status_label'] = 'aktiviert';
$L['Action_label'] = 'Aktion';
$L['ActionReject_label'] = 'Reject';
$L['ActionAccept_label'] = 'Akzeptieren';
$L['ActionDrop_label'] = 'Verwerfen';
$L['Source_label'] = 'Quelle';
$L['Destination_label'] = 'Ziel';
$L['Service_label'] = 'Dienst';
$L['PickSource_label'] = 'Pick one...';
$L['PickDestination_label'] = 'Pick one...';
$L['PickService_label'] = 'Pick one...';
$L['LogType_label'] = 'Write to log if this rule matches';

$L['PickObject_SrcRaw_header'] = 'Choose the packet source for rule "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Choose the packet destination for rule "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Choose the service protocol for rule "${RuleId}"';

$L['Create_last_label'] = 'Create rule at bottom';
$L['Create_first_label'] = 'Create rule at top';
$L['Create_header'] = 'Create firewall rule';
$L['Copy_header'] = 'Create a copy of #${0}';
$L['Commit_label'] = 'Apply changes';
$L['Edit_label'] = 'ändern';
$L['Copy_label'] = 'Kopieren';
$L['Delete_label'] = 'löschen';
$L['Index_header'] = 'Firewallregeln';
$L['RuleText_label'] = 'From ${Src} to ${Dst}, service ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Suchen...';

$L['Delete_header'] = 'Delete rule #${0}';
$L['Delete_message'] = 'Confirm deletion of firewall rule #${id}';
$L['HostGroups_create'] = 'Create host group "${0}"';
$L['Hosts_create'] = 'Create host "${0}"';
$L['Zones_create'] = 'Create zone"${0}"';
$L['Services_create'] = 'Create service "${0}"';
$L['IpRange_create'] = 'Create IP range "${0}"';
$L['Cidr_create'] = 'Create CIDR network "${0}"';

$L['A_new_rule_label'] = "Neue Regel";
$L['Any_label'] = 'Any';
$L['NoRulesDefined_label'] = 'No rules are defined. Create the first one now!';

$L['any_service_label'] = 'any service';
$L['any_src_dst_label'] = 'any host';
$L['all_label'] = 'any';
$L['host_label'] = 'host';
$L['zone_label'] = 'Zone';
$L['iprange_label'] = 'IP Bereich';
$L['cidr_label'] = 'CDIR Netzwerk';
$L['host-group_label'] = 'Gruppe';
$L['role_label'] = 'Schnittstelle';
$L['confirm_reload_label'] = 'No change has been applied.';

$L['FirewallObject_any_Title'] = 'Any';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Role ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Host group ${key}';
$L['FirewallObject_fwservice_Title'] = 'Service ${key}';
$L['FirewallObject_iprange_Title'] = 'IP Range ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR network ${key}';

$L['Show_x_outof_y_label'] = 'Showing ${partial} results out of ${total}';
