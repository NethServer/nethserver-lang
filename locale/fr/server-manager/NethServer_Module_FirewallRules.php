<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gérer les règles du pare-feu';
$L['FirewallRules_Tags'] = 'Politique de règle du pare-feu';
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

$L['Edit_header'] = 'Editer règle #${0}';
$L['status_label'] = 'Activé';
$L['Action_label'] = 'Action';
$L['ActionReject_label'] = 'Rejeter';
$L['ActionAccept_label'] = 'Accepter';
$L['ActionDrop_label'] = 'Abandonner (drop)';
$L['Source_label'] = 'Source';
$L['Destination_label'] = 'Destination';
$L['Service_label'] = 'Service';
$L['PickSource_label'] = 'En choisir un...';
$L['PickDestination_label'] = 'En choisir un...';
$L['PickService_label'] = 'En choisir un...';
$L['LogType_label'] = 'Ecrire dans la log si cette règle correspond';

$L['PickObject_SrcRaw_header'] = 'Choisir la source des paquets pour la règle "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Choisir la destination des paquets pour la règle "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Choisir le procole du service pour la règle "${RuleId}"';

$L['Create_last_label'] = 'Créer une règle en dernière position';
$L['Create_first_label'] = 'Créer une règle en première position';
$L['Create_header'] = 'Créer une règle de parefeu';
$L['Copy_header'] = 'Créer une copie de #${0}';
$L['Commit_label'] = 'Appliquer les changements';
$L['Edit_label'] = 'Editer';
$L['Copy_label'] = 'Copier';
$L['Delete_label'] = 'Supprimer';
$L['Index_header'] = 'Règles du pare-feu';
$L['RuleText_label'] = 'Depuis ${Src} vers ${Dst}, service ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Chercher...';

$L['Delete_header'] = 'Supprimer la règle #${0}';
$L['Delete_message'] = 'Confirmer la suppression de la règle #${id}';
$L['HostGroups_create'] = 'Créer un groupe d\'hôte "${0}"';
$L['Hosts_create'] = 'Créer hôte "${0}"';
$L['Zones_create'] = 'Créer une zone"${0}"';
$L['Services_create'] = 'Créer service "${0}"';
$L['IpRange_create'] = ' Créer plage IP "${0}"';
$L['Cidr_create'] = 'Créer réseau CIDR "${0}"';

$L['A_new_rule_label'] = "Nouvelle règle";
$L['Any_label'] = 'Tout';
$L['NoRulesDefined_label'] = 'Aucune règle définie. Créez la première maintenant !';

$L['any_service_label'] = 'Tout les services';
$L['any_src_dst_label'] = 'Tous les hôtes';
$L['all_label'] = 'tout';
$L['host_label'] = 'hôte';
$L['zone_label'] = 'zone';
$L['iprange_label'] = 'Plage d\'IP';
$L['cidr_label'] = 'Réseau CIDR';
$L['host-group_label'] = 'groupe';
$L['role_label'] = 'interface';
$L['confirm_reload_label'] = 'Aucun changement n\'a été appliqué.';

$L['FirewallObject_any_Title'] = 'Tout';
$L['FirewallObject_host_Title'] = 'Hôte ${key}';
$L['FirewallObject_local_Title'] = 'LAN hôte ${key}';
$L['FirewallObject_remote_Title'] = 'Hôte ${key}';
$L['FirewallObject_role_Title'] = 'Rôle ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Groupe d\'hôtes ${key}';
$L['FirewallObject_fwservice_Title'] = 'Service ${key}';
$L['FirewallObject_iprange_Title'] = 'Plage IP ${key}';
$L['FirewallObject_cidr_Title'] = 'Réseau CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Présentation de ${partial} resultats en dehors de ${total}';
$L['ActionRoute_label'] = 'Route vers ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Log';

$L['ShowAction_label'] = 'Voir';
$L['ShowAll_label'] = 'Tous';
$L['ShowRules_label'] = 'Pare-feu';
$L['ShowRoutes_label'] = 'Règle de routage';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Les règles de routages ne permettent pas la zone rouge d\'être mis en temps que Source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Les règles de routages permettes seulement le type de Destinations suivante : zone, hôte, ip, range, cidr, rouge.';
