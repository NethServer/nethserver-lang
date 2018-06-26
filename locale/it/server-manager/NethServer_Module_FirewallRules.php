<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gestione regole del firewall';
$L['FirewallRules_Tags'] = 'firewall regole rule policy traffic shaping qos';
$L['FirewallRules_Title'] = 'Regole firewall';

$L['general_header'] = 'Generale';
$L['General_Title'] = 'Opzioni generali';
$L['ExternalPing_label'] = 'Ping da Internet';
$L['permissive_label'] = 'Permesso';
$L['Policy_label'] = 'Traffico verso Internet (interfaccia red)';
$L['strict_label'] = 'Bloccato';
$L['enabled_label'] = 'Abilitato';
$L['disabled_label'] = 'Disabilitato';
$L['MACValidation_label'] = 'Validazione MAC (Binding IP/MAC)';
$L['MACValidationPolicy_label'] = 'Policy per host senza binding IP/MAC (riserva DHCP)';
$L['drop_label'] = 'Blocca traffico';
$L['accept_label'] = 'Permetti traffico';

$L['Edit_header'] = 'Modifica la regola #${0}';
$L['status_label'] = 'Abilitato';
$L['Action_label'] = 'Azione';
$L['Rule_label'] = 'Regola';
$L['ActionReject_label'] = 'Reject';
$L['ActionAccept_label'] = 'Accept';
$L['ActionDrop_label'] = 'Drop';
$L['Source_label'] = 'Origine';
$L['Destination_label'] = 'Destinazione';
$L['Service_label'] = 'Servizio';
$L['Time_label'] = 'Condizione temporale';
$L['PickSource_label'] = 'Scegli...';
$L['PickDestination_label'] = 'Scegli...';
$L['PickService_label'] = 'Scegli...';
$L['LogType_label'] = 'Registra nel log se questa regola viene applicata';

$L['PickObject_SrcRaw_header'] = 'Scegli l\'origine dei pacchetti per la regola "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Scegli la destinazione dei pacchetti per la regola "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Scegli il protocollo del servizio per la regola "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Scegli la condizione temporale per la regola "${RuleId}"';

$L['Create_last_label'] = 'Crea una regola in fondo';
$L['Create_first_label'] = 'Crea una regola in cima';
$L['Create_header'] = 'Crea una nuova regola per il firewall';
$L['Copy_header'] = 'Crea una copia di #${0}';
$L['Commit_label'] = 'Applica modifiche';
$L['Edit_label'] = 'Modifica';
$L['EditRule_label'] = 'Modifica regola';
$L['EditService_label'] = 'Modifica servizio';
$L['Copy_label'] = 'Copia';
$L['Delete_label'] = 'Elimina';
$L['Index_header'] = 'Regole del firewall';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Trova...';

$L['Delete_header'] = 'Elimina la regola #${0}';
$L['Delete_message'] = 'Confermare l\'eliminazione della regola #${id}';
$L['HostGroups_create'] = 'Crea un nuovo gruppo di host "${0}"';
$L['Hosts_create'] = 'Crea un nuovo host "${0}"';
$L['Zones_create'] = 'Crea una nuova zona "${0}"';
$L['Services_create'] = 'Crea un nuovo servizio "${0}"';
$L['Time_create'] = 'Create condizione temporale "${0}"';
$L['IpRange_create'] = 'Crea un IP range "${0}"';
$L['Cidr_create'] = 'Crea una rete CIDR "${0}"';

$L['A_new_rule_label'] = "Nuova regola";
$L['NoRulesDefined_label'] = 'Non è definita alcuna regola. Crea ora la prima!';

$L['any_service_label'] = 'qualsiasi';
$L['any_src_dst_label'] = 'tutti gli host';
$L['Time_always'] = 'Sempre';
$L['Type_any_label'] = 'Qualsiasi';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'host';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'IP range';
$L['cidr_label'] = 'Rete CIDR';
$L['host-group_label'] = 'gruppo';
$L['role_label'] = 'interfaccia';
$L['confirm_reload_label'] = 'Le modifiche non sono state applicate.';

$L['FirewallObject_any_Title'] = 'Tutti (any)';
$L['FirewallObject_fw_Title'] = 'Firewall';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Ruolo ${key}';
$L['FirewallObject_zone_Title'] = 'Zona ${key}';
$L['FirewallObject_host-group_Title'] = 'Gruppo di host ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - servizio';
$L['FirewallObject_time_Title'] = '${key} - condizione temporale';
$L['FirewallObject_service_Title'] = '${key} - servizio di rete';
$L['FirewallObject_ndpi_Title'] = '${key} - protocollo DPI';
$L['FirewallObject_iprange_Title'] = 'IP range ${key}';
$L['FirewallObject_cidr_Title'] = 'Rete CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Mostrati ${partial} risultati su ${total}';
$L['ActionRoute_label'] = 'Devia su ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Log';

$L['ShowAction_label'] = 'Mostra';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Policy routing (${0})';
$L['ShowServices_label'] = 'Servizi di rete (${0})';
$L['ShowTrafficShaping_label'] = 'Gestione banda (${0})';

$L['ActionPriorityHigh_label'] = 'Alta priorità (Hi-Prio)';
$L['ActionPriorityLow_label'] = 'Bassa priorità (Lo-Prio)';
$L['ActionPriority_label'] = 'Priorità ${0}';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Le regole di routing non consentono di utilizzare una zona red come sorgente.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Le regole di routing consentono solo i seguenti tipi di destinazione: zona, host, range ip, CIDR, red.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,5'] = 'Route rules do not allow to set a DPI protocol as Service.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Se si seleziona un Servizio di rete la destinazione deve essere Firewall';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Le regole di gestione banda non consentono di utilizzare una zona red come sorgente.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Le regole di gestione banda consentono solo i seguenti tipi di destinazione: zona, host, range ip, CIDR, red.';
