<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Διαχειριστείτε τους κανόνες του τείχους προστασίας';
$L['FirewallRules_Tags'] = 'firewall rule policy traffic shaping';
$L['FirewallRules_Title'] = 'Κανόνες τείχους προστασίας';

$L['general_header'] = 'Γενικά';
$L['General_Title'] = 'Γενικές επιλογές';
$L['ExternalPing_label'] = 'Ping από Internet';
$L['permissive_label'] = 'Επιτρεπόμενο';
$L['Policy_label'] = 'Κίνηση προς το Internet (κόκκινη διασύνδεση)';
$L['strict_label'] = 'Αποκλεισμένο';
$L['enabled_label'] = 'Ενεργοποιημένο';
$L['disabled_label'] = 'Απενεργοποιημένο';
$L['MACValidation_label'] = 'Επαλήθευση MAC (σύνδεση IP/MAC )';
$L['MACValidationPolicy_label'] = 'Πολιτική για φορείς χωρίς επαλήθευση IP/MAC (δια μέσου DHCP)';
$L['drop_label'] = 'Φραγή κίνησης';
$L['accept_label'] = 'Να επιτρέπεται η κίνηση';

$L['Edit_header'] = 'Επεξεργασία κανόνα #${0}';
$L['status_label'] = 'Ενεργοποιημένο';
$L['Action_label'] = 'Ενέργεια';
$L['Rule_label'] = 'Rule';
$L['ActionReject_label'] = 'Απόρριψη';
$L['ActionAccept_label'] = 'Αποδοχή';
$L['ActionDrop_label'] = 'Πτώση';
$L['Source_label'] = 'Πηγή';
$L['Destination_label'] = 'Προορισμός';
$L['Service_label'] = 'Υπηρεσία';
$L['Time_label'] = 'Time condition';
$L['PickSource_label'] = 'Διάλεξε ένα...';
$L['PickDestination_label'] = 'Διάλεξε ένα...';
$L['PickService_label'] = 'Διάλεξε ένα...';
$L['LogType_label'] = 'Να γίνει εγγραφή στο αρχείο καταγραφής εάν αυτός ο κανόνας εφαρμοστεί ';

$L['PickObject_SrcRaw_header'] = 'Επιλέξτε την πηγή πακέτου για τον κανόνα  "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Επιλέξτε τον προορισμό πακέτου για τον κανόνα  "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Επιλέξτε το πρωτόκολλο υπηρεσία για τον κανόνα "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Choose the time condition for rule "${RuleId}"';

$L['Create_last_label'] = 'Δημιουργία κανόνα στο τέλος';
$L['Create_first_label'] = 'Δημιουργία κανόνα στην κορυφή';
$L['Create_header'] = 'Δημιουργία κανόνα τείχους προστασίας';
$L['Copy_header'] = 'Δημιουργία αντιγράφου του #${0}';
$L['Commit_label'] = 'Εφαρμογή αλλαγών';
$L['Edit_label'] = 'Επεξεργασία';
$L['EditRule_label'] = 'Edit rule';
$L['EditService_label'] = 'Edit service';
$L['Copy_label'] = 'Αντιγραφή';
$L['Delete_label'] = 'Διαγραφή';
$L['Index_header'] = 'Κανόνες τείχους προστασίας';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Αναζήτηση...';

$L['Delete_header'] = 'Διαγραφή κανόνα #${0}';
$L['Delete_message'] = 'Επιβεβαίωση διαγραφής του κανόνα #${id} του τείχου προστασίας';
$L['HostGroups_create'] = 'Δημιουργία ομάδας φορέων "${0}"';
$L['Hosts_create'] = 'Δημιουργία φορέα "${0}"';
$L['Zones_create'] = 'Δημιουργία ζώνης "${0}"';
$L['Services_create'] = 'Create service object "${0}"';
$L['Time_create'] = 'Create time condition "${0}"';
$L['IpRange_create'] = 'Δημιουργία εμβέλειας IP "${0}"';
$L['Cidr_create'] = 'Δημιουργία δικτύου CIDR "${0}"';

$L['A_new_rule_label'] = "Νέος κανόνας";
$L['NoRulesDefined_label'] = 'Δεν βρέθηκαν κανόνες. Δημιουργία πρώτου κανόνα τώρα!';

$L['any_service_label'] = 'οποιαδήποτε υπηρεσία';
$L['any_src_dst_label'] = 'Οποιοσδήποτε φορέας';
$L['Time_always'] = 'Πάντα';
$L['Type_any_label'] = 'Οποιοσδήποτε';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'φορέας';
$L['zone_label'] = 'ζώνη';
$L['iprange_label'] = 'Εμβέλεια IP';
$L['cidr_label'] = 'Δίκτυο CIDR';
$L['host-group_label'] = 'ομάδα';
$L['role_label'] = 'διασύνδεση';
$L['confirm_reload_label'] = 'Καμία αλλαγή δεν έχει εφαρμοστεί.';

$L['FirewallObject_any_Title'] = 'Οποιοσδήποτε';
$L['FirewallObject_fw_Title'] = 'Τείχος προστασίας';
$L['FirewallObject_host_Title'] = 'Φορέας ${key}';
$L['FirewallObject_local_Title'] = 'Φορέας LAN ${key}';
$L['FirewallObject_remote_Title'] = 'Φορέας ${key}';
$L['FirewallObject_role_Title'] = 'Ρόλος ${key}';
$L['FirewallObject_zone_Title'] = 'Ζώνη ${key}';
$L['FirewallObject_host-group_Title'] = 'Ομάδα φορέα ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - service object';
$L['FirewallObject_time_Title'] = '${key} - time condition';
$L['FirewallObject_service_Title'] = '${key} - network service';
$L['FirewallObject_ndpi_Title'] = '${name} - DPI protocol';
$L['FirewallObject_iprange_Title'] = 'Εμβέλεια IP ${key}';
$L['FirewallObject_cidr_Title'] = 'Δίκτυο CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Εμφανίζονται ${partial} αποτελέσματα από ${total}';
$L['ActionRoute_label'] = 'Δρομολόγηση προς ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Ιστορικό';

$L['ShowAction_label'] = 'Εμφάνιση';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Policy routing (${0})';
$L['ShowServices_label'] = 'Network services (${0})';
$L['ShowTrafficShaping_label'] = 'Traffic shaping (${0})';

$L['ActionPriorityHigh_label'] = 'High priority';
$L['ActionPriorityLow_label'] = 'Low priority';
$L['ActionPriority_label'] = 'Priority ${0}';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Οι κανόνες δρομολόγησης δεν επιτρέπουν την κόκκινη ζώνη να τεθεί ως Πηγή.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Οι κανόνες δρομολόγησης επιτρέπουν μόνο τους ακόλουθους τύπους Προορισμών: ζώνη, φορέας, εύρος διευθύνσεων IP, cidr, κόκκινο.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecting "local service" requires the "firewall" destination.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic shaping rules do not allow the red zone to be set as source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic shaping rules allow only the following Destination types: zone, host, IP range, CIDR, red';

$L['valid_platform,fwrule-modify,fwrule-ndpi,3'] = 'Rules using DPI protocol as a service do not allow "Any" as source nor destination.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,4'] = 'Rules using DPI protocol as a service do not allow "Firewall" as source nor destination.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,5'] = 'Route rules do not allow to set a DPI protocol as service.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,6'] = 'Action "Reject" is not supported for rules using a DPI protocol as service: use "Drop" action instead.';
