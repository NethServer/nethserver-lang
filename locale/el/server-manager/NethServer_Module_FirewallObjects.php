<?php 

$L['FirewallObjects_Description'] = 'Διαχειριστείτε τα αντικείμενα του τείχους προστασίας';
$L['FirewallObjects_Tags'] = 'Τοίχος-προστασίας ζώνη φορέας υπηρεσία ομάδα αντικείμενα';
$L['FirewallObjects_Title'] = 'Αντικείμενα τείχους προστασίας';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Ομάδα';
$L['HostGroups_create_label'] = 'Create host group';
$L['HostGroups_CreateHostGroup_label'] = 'Create host group';
$L['HostGroups_update_label'] = 'Επεξεργασία ομάδων φορέων "${0}"';
$L['HostGroups_Title'] = 'Ομάδες φορέων';

$L['HostsKey_label'] = 'Φορέας';
$L['Host_key_exists_message'] = 'Το αναγνωριστικό του φορέα χρησιμοποιείται ήδη';
$L['Hosts_create_label'] = 'Create host';
$L['Hosts_CreateHost_label'] = 'Create host';
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
$L['Protocol_label'] = 'Πρωτόκολλο';
$L['name_label'] = 'Όνομα';
$L['ServicesKey_label'] = 'Υπηρεσία';
$L['Services_create_label'] = 'Create service';
$L['Service_key_exists_message'] = 'Το αναγνωριστικό του διακομιστή χρησιμοποιείται ήδη';
$L['Services_CreateService_label'] = 'Create service';
$L['Services_update_label'] = 'Επεξεργασία υπηρεσίας "${0}"';
$L['Services_Title'] = 'Υπηρεσίες';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP και UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Ζώνη';
$L['Zones_create_label'] = 'Create zone';
$L['Zone_key_exists_message'] = 'Το αναγνωριστικό της ζώνης χρησιμοποιείται ήδη';
$L['Zones_CreateZone_label'] = 'Create zone';
$L['Zones_update_label'] = 'Επεξεργασία ζώνης "${0}"';
$L['Zones_Title'] = 'Ζώνες';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. H ζώνη χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Η υπηρεσία χρησιμοποιείται σε κανόνες του τοίχου προσστασίας';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Ο φορέας χρησιμοποιείται σε κανόνες του τοίχους προστασίας';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Η ομάδα φορέων χρησιμοποιείται σε κανόνες του τοίχου προστασίας';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The CIDR is used by firewall rules.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Could not delete ${2}. The IP range is used by firewall rules.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Δεν ήταν δυνατή η διαγραφή του ${2}. Είναι το τελευταίο μέλος της ομάδας φορέων ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'The start IP must be less than the end IP';

$L['Cidr_Title'] = 'CIDR subnets';
$L['Address_label'] = 'Network';
$L['Cidr_create_label'] = 'Create CIDR subnet';
$L['Cidr_update_label'] = 'Update CIDR subnet';
$L['Cidr_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['Cidr_CreateCidr_label'] = 'Create CIDR network';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'IP ranges';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'End IP';
$L['IpRange_create_label'] = 'Create IP range';
$L['IpRange_update_label'] = 'Update IP range';
$L['IpRange_key_exists_message'] = 'An object with the same name already exists inside the hosts database';
$L['IpRange_CreateIpRange_label'] = 'Create IP range';
$L['IpRangeKey_label'] = 'IP range';
