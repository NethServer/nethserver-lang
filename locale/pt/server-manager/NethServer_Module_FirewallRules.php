<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gerir regras da firewall';
$L['FirewallRules_Tags'] = 'firewall rule policy traffic shaping';
$L['FirewallRules_Title'] = 'Regras da firewall';

$L['general_header'] = 'Geral';
$L['General_Title'] = 'Opções gerais';
$L['ExternalPing_label'] = 'Ping a partir da Internet';
$L['permissive_label'] = 'Permitido';
$L['Policy_label'] = 'Tráfego para a Internet (interface vermelho)';
$L['strict_label'] = 'Bloqueado';
$L['enabled_label'] = 'Activo';
$L['disabled_label'] = 'Desactivado';
$L['MACValidation_label'] = 'Validação MAC (ligação IP/MAC)';
$L['MACValidationPolicy_label'] = 'Politica para máquinas sem ligação IP/MAC (reservas DHCP)';
$L['drop_label'] = 'Bloquear tráfego';
$L['accept_label'] = 'Permitir tráfego';

$L['Edit_header'] = 'Editar regra #${0}';
$L['status_label'] = 'Activo';
$L['Action_label'] = 'Acção';
$L['Rule_label'] = 'Regra';
$L['ActionReject_label'] = 'Rejeitar';
$L['ActionAccept_label'] = 'Aceitar';
$L['ActionDrop_label'] = 'Descartar';
$L['Source_label'] = 'Fonte';
$L['Destination_label'] = 'Destino';
$L['Service_label'] = 'Serviço';
$L['Time_label'] = 'Condição de tempo';
$L['PickSource_label'] = 'Escolha um...';
$L['PickDestination_label'] = 'Escolha um...';
$L['PickService_label'] = 'Escolha um...';
$L['LogType_label'] = 'Escrever para o registo se esta regra corresponder';

$L['PickObject_SrcRaw_header'] = 'Escolha a fonte de pacotes para a regra "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Escolha o destino dos pacotes para a regra "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Escolha o protocolo do serviço para a regra "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Choose the time condition for rule "${RuleId}"';

$L['Create_last_label'] = 'Nova regra em baixo';
$L['Create_first_label'] = 'Nova regra em cima';
$L['Create_header'] = 'Nova regra da firewall';
$L['Copy_header'] = 'Nova cópia de #${0}';
$L['Commit_label'] = 'Aplicar as alterações';
$L['Edit_label'] = 'Editar';
$L['EditRule_label'] = 'Editar regra';
$L['EditService_label'] = 'Editar serviço';
$L['Copy_label'] = 'Copiar';
$L['Delete_label'] = 'Apagar';
$L['Index_header'] = 'Regras da firewall';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Procurar...';

$L['Delete_header'] = 'Apagar regra #${0}';
$L['Delete_message'] = 'Confirmar a eliminação da regra #${id}';
$L['HostGroups_create'] = 'Novo grupo de máquinas "${0}"';
$L['Hosts_create'] = 'Nova máquina "${0}"';
$L['Zones_create'] = 'Nova zona "${0}"';
$L['Services_create'] = 'Create service object "${0}"';
$L['Time_create'] = 'Create time condition "${0}"';
$L['IpRange_create'] = 'Nova gama de IP\'s "${0}"';
$L['Cidr_create'] = 'Nova rede CIDR "${0}"';

$L['A_new_rule_label'] = "Nova regra";
$L['NoRulesDefined_label'] = 'Não está definida qualquer regra. Crie a primeira agora!';

$L['any_service_label'] = 'qualquer serviço';
$L['any_src_dst_label'] = 'qualquer máquina';
$L['Time_always'] = 'Sempre';
$L['Type_any_label'] = 'qualquer';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'máquina';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'gama de IP\'s';
$L['cidr_label'] = 'rede CIDR';
$L['host-group_label'] = 'grupo';
$L['role_label'] = 'interface';
$L['confirm_reload_label'] = 'As alterações não foram aplicadas';

$L['FirewallObject_any_Title'] = 'Qualquer';
$L['FirewallObject_fw_Title'] = 'Firewall';
$L['FirewallObject_host_Title'] = 'Máquina ${key}';
$L['FirewallObject_local_Title'] = 'Máquina de rede ${key}';
$L['FirewallObject_remote_Title'] = 'Máquina ${key}';
$L['FirewallObject_role_Title'] = 'Função ${key}';
$L['FirewallObject_zone_Title'] = 'Zona ${key}';
$L['FirewallObject_host-group_Title'] = 'Grupo de máquinas ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - objeto de serviço';
$L['FirewallObject_time_Title'] = '${key} - condição de tempo';
$L['FirewallObject_service_Title'] = '${key} - serviço de rede';
$L['FirewallObject_ndpi_Title'] = '${name} - DPI protocol';
$L['FirewallObject_iprange_Title'] = 'Gama de IP\'s ${key}';
$L['FirewallObject_cidr_Title'] = 'Rede CIDR ${key}';

$L['Show_x_outof_y_label'] = 'A mostrar resultado parcial ${partial} de ${total}';
$L['ActionRoute_label'] = 'Route to ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Registo';

$L['ShowAction_label'] = 'Mostrar';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Policy routing (${0})';
$L['ShowServices_label'] = 'Serviços de rede (${0})';
$L['ShowTrafficShaping_label'] = 'Traffic shaping (${0})';

$L['ActionPriorityHigh_label'] = 'Prioridade alta';
$L['ActionPriorityLow_label'] = 'Prioridade baixa';
$L['ActionPriority_label'] = 'Prioridade ${0}';
$L['ActionPrioLo_label'] = 'Prio.-Baixa';
$L['ActionPrioHi_label'] = 'Prio.-Alta';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Route rules do not allow the red zone to be set as Source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Route rules allow only the following Destination types: zone, host, ip range, cidr, red.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,5'] = 'Route rules do not allow to set a DPI protocol as Service.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecting "local service" requires the "firewall" destination.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic shaping rules do not allow the red zone to be set as source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic shaping rules allow only the following Destination types: zone, host, IP range, CIDR, red';
