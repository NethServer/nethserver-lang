<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Διαχειριστείτε τους κανόνες του τείχους προστασίας';
$L['FirewallRules_Tags'] = 'τοίχος-προστασίας κανόνας πολιτική';
$L['FirewallRules_Title'] = 'Κανόνες τείχους προστασίας';

$L['general_header'] = 'Γενικά';
$L['General_Title'] = 'Γενικές επιλογές';
$L['ExternalPing_label'] = 'Ping από Internet';
$L['permissive_label'] = 'Επιτρεπόμενο';
$L['Policy_label'] = 'Κίνηση προς το Internet (κόκκινη διασύνδεση)';
$L['strict_label'] = 'Αποκλεισμένο';
$L['enabled_label'] = 'Ενεργοποιημένο';
$L['disabled_label'] = 'Απενεργοποιημένο';
$L['MACValidation_label'] = 'MAC validation (IP/MAC binding)';
$L['MACValidationPolicy_label'] = 'Policy for hosts without IP/MAC binding (DHCP reservation)';
$L['drop_label'] = 'Block traffic';
$L['accept_label'] = 'Allow trafic';

$L['Edit_header'] = 'Επεξεργασία κανόνα #${0}';
$L['status_label'] = 'Ενεργοποιημένο';
$L['Action_label'] = 'Ενέργεια';
$L['ActionReject_label'] = 'Απόρριψη';
$L['ActionAccept_label'] = 'Αποδοχή';
$L['ActionDrop_label'] = 'Πτώση';
$L['Source_label'] = 'Πηγή';
$L['Destination_label'] = 'Προορισμός';
$L['Service_label'] = 'Υπηρεσία';
$L['PickSource_label'] = 'Διάλεξε ένα...';
$L['PickDestination_label'] = 'Διάλεξε ένα...';
$L['PickService_label'] = 'Διάλεξε ένα...';
$L['LogType_label'] = 'Να γίνει εγγραφή στο αρχείο καταγραφής εάν αυτός ο κανόνας εφαρμοστεί ';

$L['PickObject_SrcRaw_header'] = 'Επιλέξτε την πηγή πακέτου για τον κανόνα  "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Επιλέξτε τον προορισμό πακέτου για τον κανόνα  "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Επιλέξτε το πρωτόκολλο υπηρεσία για τον κανόνα "${RuleId}"';

$L['Create_last_label'] = 'Δημιουργία κανόνα στο τέλος';
$L['Create_first_label'] = 'Δημιουργία κανόνα στην κορυφή';
$L['Create_header'] = 'Create firewall rule';
$L['Copy_header'] = 'Δημιουργία αντιγράφου του #${0}';
$L['Commit_label'] = 'Εφαρμογή αλλαγών';
$L['Edit_label'] = 'Επεξεργασία';
$L['Copy_label'] = 'Αντιγραφή';
$L['Delete_label'] = 'Διαγραφή';
$L['Index_header'] = 'Κανόνες τείχους προστασίας';
$L['RuleText_label'] = 'Από ${Src} σε ${Dst}, υπηρεσία ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Αναζήτηση...';

$L['Delete_header'] = 'Διαγραφή κανόνα #${0}';
$L['Delete_message'] = 'Επιβεβαίωση διαγραφής του κανόνα #${id} του τείχου προστασίας';
$L['HostGroups_create'] = 'Create host group "${0}"';
$L['Hosts_create'] = 'Create host "${0}"';
$L['Zones_create'] = 'Create zone"${0}"';
$L['Services_create'] = 'Create service "${0}"';
$L['IpRange_create'] = 'Create IP range "${0}"';
$L['Cidr_create'] = 'Create CIDR network "${0}"';

$L['A_new_rule_label'] = "Νέος κανόνας";
$L['Any_label'] = 'Οποιοσδήποτε';
$L['NoRulesDefined_label'] = 'Δεν βρέθηκαν κανόνες. Δημιουργία πρώτου κανόνα τώρα!';

$L['any_service_label'] = 'οποιαδήποτε υπηρεσία';
$L['any_src_dst_label'] = 'Οποιοσδήποτε φορέας';
$L['all_label'] = 'Οποιοσδήποτε';
$L['host_label'] = 'φορέας';
$L['zone_label'] = 'ζώνη';
$L['iprange_label'] = 'IP range';
$L['cidr_label'] = 'CIDR network';
$L['host-group_label'] = 'ομάδα';
$L['role_label'] = 'διασύνδεση';
$L['confirm_reload_label'] = 'Καμία αλλαγή δεν έχει εφαρμοστεί.';

$L['FirewallObject_any_Title'] = 'Οποιοσδήποτε';
$L['FirewallObject_host_Title'] = 'Φορέας ${key}';
$L['FirewallObject_local_Title'] = 'Φορέας LAN ${key}';
$L['FirewallObject_remote_Title'] = 'Φορέας ${key}';
$L['FirewallObject_role_Title'] = 'Ρόλος ${key}';
$L['FirewallObject_zone_Title'] = 'Ζώνη ${key}';
$L['FirewallObject_host-group_Title'] = 'Ομάδα φορέα ${key}';
$L['FirewallObject_fwservice_Title'] = 'Υπηρεσία ${key}';
$L['FirewallObject_iprange_Title'] = 'IP range ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR network ${key}';

$L['Show_x_outof_y_label'] = 'Εμφανίζονται ${partial} αποτελέσματα από ${total}';
