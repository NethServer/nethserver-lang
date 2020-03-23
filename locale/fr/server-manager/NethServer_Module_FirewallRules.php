<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gérer les règles du pare-feu';
$L['FirewallRules_Tags'] = 'Règle du pare-feu pour le lissage du trafic';
$L['FirewallRules_Title'] = 'Règles du pare-feu';

$L['general_header'] = 'Général';
$L['General_Title'] = 'Options générales';
$L['ExternalPing_label'] = 'ping depuis Internet';
$L['permissive_label'] = 'Autorisé';
$L['Policy_label'] = 'Trafic vers Internet (interface rouge)';
$L['strict_label'] = 'Bloqué';
$L['enabled_label'] = 'Activé';
$L['disabled_label'] = 'Désactivé';
$L['MACValidation_label'] = 'Validation MAC (association fixe IP/MAC )';
$L['MACValidationPolicy_label'] = 'Politique pour les hôtes sans IP/MAC fixée (réservation DHCP)';
$L['drop_label'] = 'Bloquer le trafic';
$L['accept_label'] = 'Autoriser le trafic';

$L['Edit_header'] = 'Éditer règle #${0}';
$L['status_label'] = 'Activé';
$L['Action_label'] = 'Action';
$L['Rule_label'] = 'Règle';
$L['ActionReject_label'] = 'Rejeter';
$L['ActionAccept_label'] = 'Accepter';
$L['ActionDrop_label'] = 'Abandonner (drop)';
$L['Source_label'] = 'Source';
$L['Destination_label'] = 'Destination';
$L['Service_label'] = 'Service';
$L['Time_label'] = 'Condition de temps';
$L['PickSource_label'] = 'En choisir un...';
$L['PickDestination_label'] = 'En choisir un...';
$L['PickService_label'] = 'En choisir un...';
$L['LogType_label'] = 'Écrire dans le journal si cette règle correspond';

$L['PickObject_SrcRaw_header'] = 'Choisissez la source de paquet pour la règle "$ {RuleId}"';
$L['PickObject_DstRaw_header'] = 'Choisir la destination du paquet pour la règle "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Choisir le protocole du service pour la règle "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Choisissez la condition de temps pour la règle "$ {RuleId}"';

$L['Create_last_label'] = 'Créer une règle en dernière position';
$L['Create_first_label'] = 'Créer une règle en première position';
$L['Create_header'] = 'Créer une règle de pare-feu';
$L['Copy_header'] = 'Créer une copie de #${0}';
$L['Commit_label'] = 'Appliquer les modifications';
$L['Edit_label'] = 'Éditer';
$L['EditRule_label'] = 'Éditer la règle';
$L['EditService_label'] = 'Éditer le service';
$L['Copy_label'] = 'Copier';
$L['Delete_label'] = 'Supprimer';
$L['Index_header'] = 'Règles du pare-feu';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Chercher...';

$L['Delete_header'] = 'Supprimer la règle #${0}';
$L['Delete_message'] = 'Confirmer la suppression de la règle #${id}';
$L['HostGroups_create'] = 'Créer un groupe d\'hôte "${0}"';
$L['Hosts_create'] = 'Créer hôte "${0}"';
$L['Zones_create'] = 'Créer une zone"${0}"';
$L['Services_create'] = 'Créer un objet de service "${0}"';
$L['Time_create'] = 'Créer une condition de temps "${0}"';
$L['IpRange_create'] = ' Créer une plage IP "${0}"';
$L['Cidr_create'] = 'Créer réseau CIDR "${0}"';

$L['A_new_rule_label'] = "Nouvelle règle";
$L['NoRulesDefined_label'] = 'Aucune règle définie. Créez la première maintenant !';

$L['any_service_label'] = 'Tous les services';
$L['any_src_dst_label'] = 'Tous les hôtes';
$L['Time_always'] = 'Toujours';
$L['Type_any_label'] = 'tout';
$L['Type_fw_label'] = 'pare-feu';
$L['host_label'] = 'hôte';
$L['zone_label'] = 'zone';
$L['iprange_label'] = 'Plage d\'IP';
$L['cidr_label'] = 'Réseau CIDR';
$L['host-group_label'] = 'groupe';
$L['role_label'] = 'interface';
$L['confirm_reload_label'] = 'Aucun changement n\'a été appliqué.';

$L['FirewallObject_any_Title'] = 'Tout';
$L['FirewallObject_fw_Title'] = 'Pare-feu';
$L['FirewallObject_host_Title'] = 'Hôte ${key}';
$L['FirewallObject_local_Title'] = 'Hôte LAN ${key}';
$L['FirewallObject_remote_Title'] = 'Hôte ${key}';
$L['FirewallObject_role_Title'] = 'Rôle ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Groupe d\'hôtes ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - objet de service';
$L['FirewallObject_time_Title'] = '${key} - condition de temps';
$L['FirewallObject_service_Title'] = '${key} - service réseau';
$L['FirewallObject_ndpi_Title'] = '${name} - protocole DPI';
$L['FirewallObject_iprange_Title'] = 'Plage IP ${key}';
$L['FirewallObject_cidr_Title'] = 'Réseau CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Affichage des résultats ${partiels} sur ${total}';
$L['ActionRoute_label'] = 'Route vers ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Journal';

$L['ShowAction_label'] = 'Montrer';
$L['ShowRules_label'] = 'Pare-feu (${0})';
$L['ShowRoutes_label'] = 'Stratégie de routage (${0})';
$L['ShowServices_label'] = 'Services réseau (${0})';
$L['ShowTrafficShaping_label'] = 'Lissage du trafic (${0})';

$L['ActionPriorityHigh_label'] = 'Priorité haute ';
$L['ActionPriorityLow_label'] = 'Priorité basse';
$L['ActionPriority_label'] = 'Priorité ${0}';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Les règles de routage ne permettent pas de définir la zone rouge en tant que source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Les règles de routages permettent seulement les types de destinations suivants : zone, hôte, ip, plage, cidr, rouge.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'La sélection de "service local" nécessite la destination "pare-feu".';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Les règles de lissage du trafic ne permettent pas de définir la zone rouge en tant que source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Les règles de lissage du trafic autorisent uniquement les types de destination suivants : zone, hôte, plage IP, CIDR, rouge';

$L['valid_platform,fwrule-modify,fwrule-ndpi,3'] = 'Les règles utilisant le protocole DPI en tant que service ne permettent pas "Tous" comme source ou destination.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,4'] = 'Les règles utilisant le protocole DPI comme service n\'autorisent pas le "pare-feu" comme source ni destination.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,5'] = 'Les règles de routage ne permettent pas de définir un protocole DPI en tant que service.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,6'] = 'L\'action "Rejeter" n\'est pas prise en charge pour les règles utilisant un protocole DPI en tant que service: utilisez plutôt l\'action "Abandonner".';
