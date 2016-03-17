<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gerenciar regras do firewall';
$L['FirewallRules_Tags'] = 'política de regras do firewall';
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
$L['ActionReject_label'] = 'Rejeitar';
$L['ActionAccept_label'] = 'Aceitar';
$L['ActionDrop_label'] = 'Descartar';
$L['Source_label'] = 'Fonte';
$L['Destination_label'] = 'Destino';
$L['Service_label'] = 'Serviço';
$L['PickSource_label'] = 'Escolha um...';
$L['PickDestination_label'] = 'Escolha um...';
$L['PickService_label'] = 'Escolha um...';
$L['LogType_label'] = 'Escrever no registo se esta regra corresponder';

$L['PickObject_SrcRaw_header'] = 'Escolha a fonte de pacotes para a regra "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Escolha o destino dos pacotes para a regra "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Escolha o protocolo do serviço para a regra "${RuleId}"';

$L['Create_last_label'] = 'Criar regra na parte inferior';
$L['Create_first_label'] = 'Criar regra na parte superior';
$L['Create_header'] = 'Criar regra do firewall';
$L['Copy_header'] = 'Criar cópia de #${0}';
$L['Commit_label'] = 'Aplicar as alterações';
$L['Edit_label'] = 'Editar';
$L['Copy_label'] = 'Copiar';
$L['Delete_label'] = 'Apagar';
$L['Index_header'] = 'Regras do firewall';
$L['RuleText_label'] = 'De ${Src} para ${Dst}, serviço ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Procurar...';

$L['Delete_header'] = 'Apagar regra #${0}';
$L['Delete_message'] = 'Confirmar a exclusão da regra #${id}';
$L['HostGroups_create'] = 'Criar grupo de máquinas "${0}"';
$L['Hosts_create'] = 'Criar máquina "${0}"';
$L['Zones_create'] = 'Criar zona "${0}"';
$L['Services_create'] = 'Criar serviço "${0}"';
$L['IpRange_create'] = 'Criar faixa de IP\'s "${0}"';
$L['Cidr_create'] = 'Criar rede CIDR "${0}"';

$L['A_new_rule_label'] = "Criar regra";
$L['Any_label'] = 'Qualquer';
$L['NoRulesDefined_label'] = 'Nenhuma regra está definida. Crie a primeira agora!';

$L['any_service_label'] = 'qualquer serviço';
$L['any_src_dst_label'] = 'qualquer máquina';
$L['all_label'] = 'qualquer';
$L['host_label'] = 'máquina';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'faixa de IP\'s';
$L['cidr_label'] = 'rede CIDR';
$L['host-group_label'] = 'grupo';
$L['role_label'] = 'interface';
$L['confirm_reload_label'] = 'As alterações não foram aplicadas';

$L['FirewallObject_any_Title'] = 'Qualquer';
$L['FirewallObject_host_Title'] = 'Máquina ${key}';
$L['FirewallObject_local_Title'] = 'Máquina de rede ${key}';
$L['FirewallObject_remote_Title'] = 'Máquina ${key}';
$L['FirewallObject_role_Title'] = 'Função ${key}';
$L['FirewallObject_zone_Title'] = 'Zona ${key}';
$L['FirewallObject_host-group_Title'] = 'Grupo de máquinas ${key}';
$L['FirewallObject_fwservice_Title'] = 'Serviço ${key}';
$L['FirewallObject_iprange_Title'] = 'Faixa de IP\'s ${key}';
$L['FirewallObject_cidr_Title'] = 'Rede CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Exibir resultado parcial ${partial} de ${total}';
$L['ActionRoute_label'] = 'Rota para ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Log';

$L['ShowAction_label'] = 'Exibir';
$L['ShowAll_label'] = 'Todos';
$L['ShowRules_label'] = 'Firewall';
$L['ShowRoutes_label'] = 'política de roteamento';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Regras de rota não permitem a zona vermelha a ser definida como Fonte.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Regras de rota permitir que apenas os seguintes tipos de destino: zona, máquina, faixa de ip, cidr, vermelha.';
