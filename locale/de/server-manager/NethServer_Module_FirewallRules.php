<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Verwalte Firewallregeln';
$L['FirewallRules_Tags'] = 'Firewall Regelwerk';
$L['FirewallRules_Title'] = 'Firewallregeln';

$L['general_header'] = 'Allgemein';
$L['General_Title'] = 'Allgemeine Optionen';
$L['ExternalPing_label'] = 'Ping vom Internet';
$L['permissive_label'] = 'Erlaubt';
$L['Policy_label'] = 'Traffic ins Internet (Schnittstelle rot)';
$L['strict_label'] = 'Gesperrt';
$L['enabled_label'] = 'Aktiviert';
$L['disabled_label'] = 'Deaktiviert';
$L['MACValidation_label'] = 'MAC Adressen Überprüfung (IP/MAC Bindung)';
$L['MACValidationPolicy_label'] = 'Rechte für Hosts ohne IP/MAC Bindung (DHCP Reservierung)';
$L['drop_label'] = 'Sperre Verkehr';
$L['accept_label'] = 'Erlaube Verkehr';

$L['Edit_header'] = 'Bearbeite Regel #${0}';
$L['status_label'] = 'Aktiviert';
$L['Action_label'] = 'Aktion';
$L['ActionReject_label'] = 'Ablehnen';
$L['ActionAccept_label'] = 'Akzeptieren';
$L['ActionDrop_label'] = 'Verwerfen';
$L['Source_label'] = 'Quelle';
$L['Destination_label'] = 'Ziel';
$L['Service_label'] = 'Dienst';
$L['PickSource_label'] = 'Wähle aus ...';
$L['PickDestination_label'] = 'Wähle aus ...';
$L['PickService_label'] = 'Wähle aus ...';
$L['LogType_label'] = 'Schreibe ins Log, wenn diese Regel zutrifft';

$L['PickObject_SrcRaw_header'] = 'Wähle die Paketquelle für die Regel "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Wähle das Paketziel für die Regel "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Wähle das Diensteprotokoll für die Regel "${RuleId}"';

$L['Create_last_label'] = 'Erstelle Regel am Ende';
$L['Create_first_label'] = 'Erstelle Regel am Anfang';
$L['Create_header'] = 'Erstelle Firewallregel';
$L['Copy_header'] = 'Erstelle eine Kopie von #${0}';
$L['Commit_label'] = 'Änderungen speichern';
$L['Edit_label'] = 'Ändern';
$L['Copy_label'] = 'Kopieren';
$L['Delete_label'] = 'Löschen';
$L['Index_header'] = 'Firewallregeln';
$L['RuleText_label'] = 'Von ${Src} nach ${Dst}, Dienst ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Suchen...';

$L['Delete_header'] = 'Lösche Regel #${0}';
$L['Delete_message'] = 'Bestätige das Löschen der Firewallregel #${id}';
$L['HostGroups_create'] = 'Erstelle Hostgruppe "${0}"';
$L['Hosts_create'] = 'Erstelle Host "${0}"';
$L['Zones_create'] = 'Erstelle Zone "${0}"';
$L['Services_create'] = 'Erstelle Dienst "${0}"';
$L['IpRange_create'] = 'Erstelle IP-Bereich "${0}"';
$L['Cidr_create'] = 'Erstelle CIDR Netzwerk "${0}"';

$L['A_new_rule_label'] = "Neue Regel";
$L['Any_label'] = 'Alle';
$L['NoRulesDefined_label'] = 'Keine Regeln definiert. Erstellen Sie jetzt die Erste !';

$L['any_service_label'] = 'Jeder Dienst';
$L['any_src_dst_label'] = 'Jeder Host';
$L['all_label'] = 'alle';
$L['host_label'] = 'Host';
$L['zone_label'] = 'Zone';
$L['iprange_label'] = 'IP-Bereich';
$L['cidr_label'] = 'CDIR Netzwerk';
$L['host-group_label'] = 'Gruppe';
$L['role_label'] = 'Schnittstelle';
$L['confirm_reload_label'] = 'Es wurden keine Änderungen gespeichert.';

$L['FirewallObject_any_Title'] = 'Alle';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN Host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Rolle ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Hostgruppe ${key}';
$L['FirewallObject_fwservice_Title'] = 'Dienst ${key}';
$L['FirewallObject_iprange_Title'] = 'IP-Bereich ${key}';
$L['FirewallObject_cidr_Title'] = 'CDIR Netzwerk ${key}';

$L['Show_x_outof_y_label'] = 'Zeige ${partial} Resultate von ${total}';
$L['ActionRoute_label'] = 'Route nach ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Protokollieren';

$L['ShowAction_label'] = 'Anzeigen';
$L['ShowAll_label'] = 'Alle';
$L['ShowRules_label'] = 'Firewall';
$L['ShowRoutes_label'] = 'Leitungsregeln';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Leitungsregeln verbieten das Einstellen der roten Zone als Quelle.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Leitungsregeln erlauben nur ein Ziel der folgenden Typen: Zone, Host, IP-Bereich, CIDR, rot.';
