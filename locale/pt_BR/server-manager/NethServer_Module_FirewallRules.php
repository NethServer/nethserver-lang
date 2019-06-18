<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gerenciar regras do firewall';
$L['FirewallRules_Tags'] = 'política de regra de firewall para prioridade de tráfego ';
$L['FirewallRules_Title'] = 'Regras do firewall';

$L['general_header'] = 'Geral';
$L['General_Title'] = 'Opções gerais';
$L['ExternalPing_label'] = 'Ping a partir da Internet';
$L['permissive_label'] = 'Permitido';
$L['Policy_label'] = 'Tráfego para a Internet (interface vermelha)';
$L['strict_label'] = 'Bloqueado';
$L['enabled_label'] = 'Ativo';
$L['disabled_label'] = 'Desativado';
$L['MACValidation_label'] = 'Validação MAC (ligação IP/MAC)';
$L['MACValidationPolicy_label'] = 'Politica para máquinas sem ligação IP/MAC (reservas DHCP)';
$L['drop_label'] = 'Bloquear tráfego';
$L['accept_label'] = 'Permitir tráfego';

$L['Edit_header'] = 'Editar regra #${0}';
$L['status_label'] = 'Ativo';
$L['Action_label'] = 'Ação';
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
$L['LogType_label'] = 'Escrever no registo se esta regra corresponder';

$L['PickObject_SrcRaw_header'] = 'Escolha a fonte de pacotes para a regra "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Escolha o destino dos pacotes para a regra "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Escolha o protocolo do serviço para a regra "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Escolha a condição de tempo para regra "${RuleId}"';

$L['Create_last_label'] = 'Criar regra na parte inferior';
$L['Create_first_label'] = 'Criar regra na parte superior';
$L['Create_header'] = 'Criar regra do firewall';
$L['Copy_header'] = 'Criar cópia de #${0}';
$L['Commit_label'] = 'Aplicar as alterações';
$L['Edit_label'] = 'Editar';
$L['EditRule_label'] = 'Editar regra';
$L['EditService_label'] = 'Editar serviço';
$L['Copy_label'] = 'Copiar';
$L['Delete_label'] = 'Apagar';
$L['Index_header'] = 'Regras do firewall';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Procurar...';

$L['Delete_header'] = 'Apagar regra #${0}';
$L['Delete_message'] = 'Confirmar a exclusão da regra #${id}';
$L['HostGroups_create'] = 'Criar grupo de máquinas "${0}"';
$L['Hosts_create'] = 'Criar máquina "${0}"';
$L['Zones_create'] = 'Criar zona "${0}"';
$L['Services_create'] = 'Criar objeto de serviço "${0}"';
$L['Time_create'] = 'Criar condição de tempo "${0}"';
$L['IpRange_create'] = 'Criar faixa de IP\'s "${0}"';
$L['Cidr_create'] = 'Criar rede CIDR "${0}"';

$L['A_new_rule_label'] = "Criar regra";
$L['NoRulesDefined_label'] = 'Nenhuma regra está definida. Crie a primeira agora!';

$L['any_service_label'] = 'qualquer serviço';
$L['any_src_dst_label'] = 'qualquer máquina';
$L['Time_always'] = 'Sempre';
$L['Type_any_label'] = 'qualquer';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'máquina';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'faixa de IP\'s';
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
$L['FirewallObject_time_Title'] = '${key} - condição de tempo ';
$L['FirewallObject_service_Title'] = '${key} - serviço de rede';
$L['FirewallObject_ndpi_Title'] = '${name} - protocolo DPI';
$L['FirewallObject_iprange_Title'] = 'Faixa de IP\'s ${key}';
$L['FirewallObject_cidr_Title'] = 'Rede CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Exibir resultado parcial ${partial} de ${total}';
$L['ActionRoute_label'] = 'Rota para ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Log';

$L['ShowAction_label'] = 'Exibir';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Roteamento de políticas (${0})';
$L['ShowServices_label'] = 'Serviços de rede (${0})';
$L['ShowTrafficShaping_label'] = 'Modelagem de tráfego (${0})';

$L['ActionPriorityHigh_label'] = 'Alta prioridade';
$L['ActionPriorityLow_label'] = 'Baixa prioridade';
$L['ActionPriority_label'] = 'Priority ${0}';
$L['ActionPrioLo_label'] = 'B-Prior';
$L['ActionPrioHi_label'] = 'A-Prior';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Regras de rota não permitem a zona vermelha a ser definida como Fonte.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Regras de rota permitir que apenas os seguintes tipos de destino: zona, máquina, faixa de ip, cidr, vermelha.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecionar "serviço local" requer o "firewall" como destino.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'As regras de configuração de tráfego não permitem que a zona vermelha seja definida como fonte';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Regras de configuração de tráfego permite que apenas os seguintes tipos de destino: zona, máquina, faixa de ip, cidr, vermelha.';

$L['valid_platform,fwrule-modify,fwrule-ndpi,3'] = 'Rules using DPI protocol as a service do not allow "Any" as source nor destination.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,4'] = 'Rules using DPI protocol as a service do not allow "Firewall" as source nor.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,5'] = 'Route rules do not allow to set a DPI protocol as service.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,6'] = 'Action "Reject" is not supported for rules using a DPI protocol as service: use "Drop" action instead.';
