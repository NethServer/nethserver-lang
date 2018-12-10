<?php 

$L['FirewallObjects_Description'] = 'Διαχειριστείτε τα αντικείμενα του τείχους προστασίας';
$L['FirewallObjects_Tags'] = 'Τοίχος-προστασίας ζώνη φορέας υπηρεσία ομάδα αντικείμενα';
$L['FirewallObjects_Title'] = 'Αντικείμενα τείχους προστασίας';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Ομάδα';
$L['HostGroups_create_label'] = 'Δημιουργία ομάδας φορέων';
$L['HostGroups_CreateHostGroup_label'] = 'Δημιουργία ομάδας φορέων';
$L['HostGroups_update_label'] = 'Επεξεργασία ομάδων φορέων "${0}"';
$L['HostGroups_Title'] = 'Ομάδες φορέων';

$L['HostsKey_label'] = 'Φορέας';
$L['Host_key_exists_message'] = 'Το αναγνωριστικό του φορέα χρησιμοποιείται ήδη';
$L['Hosts_create_label'] = 'Δημιουργία φορέα';
$L['Hosts_CreateHost_label'] = 'Δημιουργία φορέα';
$L['Hosts_update_label'] = 'Επεξεργασία φορέα "${0}"';
$L['Hosts_Title'] = 'Φορείς';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Διασύνδεση';
$L['IpAddress_label'] = 'Διεύθυνση IP';
$L['Members_label'] = 'Μέλη';
$L['Members'] = 'Μέλη';
$L['Network_label'] = 'Δίκτυο';
$L['Ports_label'] = 'Θύρες';
$L['Ports_validator'] = 'Λίστα αριθμών θύρας χωρισμένα με κόμμα';
$L['Port_range_validator'] = 'Port range in the form lowport-highport';
$L['Protocol_label'] = 'Πρωτόκολλο';
$L['name_label'] = 'Όνομα';
$L['ServicesKey_label'] = 'Υπηρεσία';
$L['Services_create_label'] = 'Δημιουργία υπηρεσίας';
$L['Service_key_exists_message'] = 'Το αναγνωριστικό του διακομιστή χρησιμοποιείται ήδη';
$L['Services_CreateService_label'] = 'Δημιουργία υπηρεσίας';
$L['Services_update_label'] = 'Επεξεργασία υπηρεσίας "${0}"';
$L['Services_Title'] = 'Υπηρεσίες';
$L['Times_Title'] = 'Time conditions';
$L['Times_create_label'] = 'Create time condition';
$L['Times_update_label'] = 'Edit time condition "${0}"';
$L['Times_CreateTime_label'] = 'Create time condition';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP και UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Ζώνη';
$L['Zones_create_label'] = 'Δημιουργία ζώνης';
$L['Zone_key_exists_message'] = 'Το αναγνωριστικό της ζώνης χρησιμοποιείται ήδη';
$L['Zones_CreateZone_label'] = 'Δημιουργία ζώνης';
$L['Zones_update_label'] = 'Επεξεργασία ζώνης "${0}"';
$L['Zones_Title'] = 'Ζώνες';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. H ζώνη χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Η υπηρεσία χρησιμοποιείται σε κανόνες του τοίχου προσστασίας';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Ο φορέας χρησιμοποιείται σε κανόνες του τοίχους προστασίας';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Η ομάδα φορέων χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Το CIDR χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. H εμβέλεια IP χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Είναι το τελευταίο μέλος της ομάδας φορέων ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = 'Could not delete ${2}: it is used by network services';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = 'Could not delete ${2}: the time condition is used by firewall rules';
$L['valid_iprange_outofbounds'] = 'Η IP έναρξης θα πρέπει να είναι μικρότερη από την IP λήξης';

$L['Cidr_Title'] = 'Υποδίκτυα CIDR';
$L['Address_label'] = 'Δίκτυο';
$L['Cidr_create_label'] = 'Δημιουργία υποδικτύου CIDR';
$L['Cidr_update_label'] = 'Ανανέωση υποδικτύου CIDR';
$L['Cidr_key_exists_message'] = 'Ένα αντικείμενο με το ίδιο όνομα υπάρχει ήδη μέσα στην βάση φορέων';
$L['Cidr_CreateCidr_label'] = 'Δημιουργία δικτύου CIDR';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'Εμβέλειες IP';
$L['Start_label'] = 'IP έναρξης';
$L['End_label'] = 'IP λήξης';
$L['IpRange_create_label'] = 'Δημιουργία εμβέλειας IP';
$L['IpRange_update_label'] = 'Ανανέωση εμβέλειας IP';
$L['IpRange_key_exists_message'] = 'Ένα αντικείμενο με το ίδιο όνομα υπάρχει ήδη μέσα στην βάση φορέων';
$L['IpRange_CreateIpRange_label'] = 'Δημιουργία εμβέλειας IP';
$L['IpRangeKey_label'] = 'Εμβέλεια IP';

$L['TimesKey_label'] = 'Condition name';
$L['TimeStart_label'] = 'Time start';
$L['TimeStop_label'] = 'Time stop';
$L['WeekDays_label'] = 'Days of the week';
$L['TimeStop_compare_TimeStart_message'] = 'Value must be greater than "Time start" (${0})';

$L['WeekDay_Sun_label'] = 'Κυριακή';
$L['WeekDay_Mon_label'] = 'Δευτέρα';
$L['WeekDay_Tue_label'] = 'Τρίτη';
$L['WeekDay_Wed_label'] = 'Τετάρτη';
$L['WeekDay_Thu_label'] = 'Πέμπτη';
$L['WeekDay_Fri_label'] = 'Παρασκευή';
$L['WeekDay_Sat_label'] = 'Σάββατο';
