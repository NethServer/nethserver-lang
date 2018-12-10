<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Firewallregeln verwalten';
$L['FirewallRules_Tags'] = 'Firewall Regel Policy Traffic Shaping';
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
$L['Rule_label'] = 'Regel';
$L['ActionReject_label'] = 'Ablehnen';
$L['ActionAccept_label'] = 'Akzeptieren';
$L['ActionDrop_label'] = 'Verwerfen';
$L['Source_label'] = 'Quelle';
$L['Destination_label'] = 'Ziel';
$L['Service_label'] = 'Dienst';
$L['Time_label'] = 'Zeitbedingung';
$L['PickSource_label'] = 'Wähle aus ...';
$L['PickDestination_label'] = 'Wähle aus ...';
$L['PickService_label'] = 'Wähle aus ...';
$L['LogType_label'] = 'Schreibe ins Log, wenn diese Regel zutrifft';

$L['PickObject_SrcRaw_header'] = 'Wähle die Paketquelle für die Regel "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Wähle das Paketziel für die Regel "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Wähle das Diensteprotokoll für die Regel "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Wähle die Zeitbedingung für die Regel "${Ruled}"';

$L['Create_last_label'] = 'Erstelle Regel am Ende';
$L['Create_first_label'] = 'Erstelle Regel am Anfang';
$L['Create_header'] = 'Erstelle Firewallregel';
$L['Copy_header'] = 'Erstelle eine Kopie von #${0}';
$L['Commit_label'] = 'Änderungen speichern';
$L['Edit_label'] = 'Ändern';
$L['EditRule_label'] = 'Regel bearbeiten';
$L['EditService_label'] = 'Dienst bearbeiten';
$L['Copy_label'] = 'Kopieren';
$L['Delete_label'] = 'Löschen';
$L['Index_header'] = 'Firewallregeln';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Suchen...';

$L['Delete_header'] = 'Lösche Regel #${0}';
$L['Delete_message'] = 'Bestätige das Löschen der Firewallregel #${id}';
$L['HostGroups_create'] = 'Erstelle Hostgruppe "${0}"';
$L['Hosts_create'] = 'Erstelle Host "${0}"';
$L['Zones_create'] = 'Erstelle Zone "${0}"';
$L['Services_create'] = 'Erstelle Dienstobjekt "${0}"';
$L['Time_create'] = 'Erstelle Zeitbedingung "${0}"';
$L['IpRange_create'] = 'Erstelle IP-Bereich "${0}"';
$L['Cidr_create'] = 'Erstelle CIDR Netzwerk "${0}"';

$L['A_new_rule_label'] = "Neue Regel";
$L['NoRulesDefined_label'] = 'Keine Regeln definiert. Erstellen Sie jetzt die Erste !';

$L['any_service_label'] = 'Jeder Dienst';
$L['any_src_dst_label'] = 'Jeder Host';
$L['Time_always'] = 'Immer';
$L['Type_any_label'] = 'alle';
$L['Type_fw_label'] = 'Firewall';
$L['host_label'] = 'Host';
$L['zone_label'] = 'Zone';
$L['iprange_label'] = 'IP-Bereich';
$L['cidr_label'] = 'CDIR Netzwerk';
$L['host-group_label'] = 'Gruppe';
$L['role_label'] = 'Schnittstelle';
$L['confirm_reload_label'] = 'Es wurden keine Änderungen gespeichert.';

$L['FirewallObject_any_Title'] = 'Alle';
$L['FirewallObject_fw_Title'] = 'Firewall';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN Host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Rolle ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Hostgruppe ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - Dienstobjekt';
$L['FirewallObject_time_Title'] = '${key} - Zeitbedingung';
$L['FirewallObject_service_Title'] = '${key} - Netzwerkdienst';
$L['FirewallObject_ndpi_Title'] = '${name} - DPI-Protokoll';
$L['FirewallObject_iprange_Title'] = 'IP-Bereich ${key}';
$L['FirewallObject_cidr_Title'] = 'CDIR Netzwerk ${key}';

$L['Show_x_outof_y_label'] = 'Zeige ${partial} Resultate von ${total}';
$L['ActionRoute_label'] = 'Route nach ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Protokollieren';

$L['ShowAction_label'] = 'Anzeigen';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Richtlinienrouting (${0})';
$L['ShowServices_label'] = 'Netzwerkdienste (${0})';
$L['ShowTrafficShaping_label'] = 'Traffic-Shaping (${0})';

$L['ActionPriorityHigh_label'] = 'Hohe Priorität';
$L['ActionPriorityLow_label'] = 'Niedrige Priorität';
$L['ActionPriority_label'] = 'Priorität ${0}';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Leitungsregeln verbieten das Einstellen der roten Zone als Quelle.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Leitungsregeln erlauben nur ein Ziel der folgenden Typen: Zone, Host, IP-Bereich, CIDR, rot.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,5'] = 'Bei den Routenregeln ist es nicht möglich, ein DPI-Protokoll als Dienst festzulegen.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Die Auswahl von "Lokaler Dienst" setzt "Firewall" als Ziel voraus';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic Shaping Regeln erlauben es nicht die rote Zone als Quelle zu setzen';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic Shaping Regeln erlauben nur die folgenden Zielzonen: Zone, Host, IP-Adressbereich, CIDR, Rot';
