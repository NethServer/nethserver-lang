<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Gerir regras da firewall';
$L['FirewallRules_Tags'] = 'politica de regras da firewall';
$L['FirewallRules_Title'] = 'Regras da firewall';

$L['general_header'] = 'Geral';
$L['General_Title'] = 'Opções gerais';
$L['ExternalPing_label'] = 'Ping da Internet';
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
$L['ActionReject_label'] = 'Rejeitar';
$L['ActionAccept_label'] = 'Aceitar';
$L['ActionDrop_label'] = 'Descartar';
$L['Source_label'] = 'Fonte';
$L['Destination_label'] = 'Destino';
$L['Service_label'] = 'Serviço';
$L['PickSource_label'] = 'Escolha um...';
$L['PickDestination_label'] = 'Escolha um...';
$L['PickService_label'] = 'Escolha um...';
$L['LogType_label'] = 'Escrever para o registo se esta regra corresponder';

$L['PickObject_SrcRaw_header'] = 'Escolha a fonte de pacotes para a regra "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Escolha o destino dos pacotes para a regra "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Escolha o protocolo do serviço para a regra "${RuleId}"';

$L['Create_last_label'] = 'Nova regra em baixo';
$L['Create_first_label'] = 'Nova regra em cima';
$L['Create_header'] = 'Nova regra da firewall';
$L['Copy_header'] = 'Criar uma cópia de #${0}';
$L['Commit_label'] = 'Aplicar as alterações';
$L['Edit_label'] = 'Editar';
$L['Copy_label'] = 'Copiar';
$L['Delete_label'] = 'Apagar';
$L['Index_header'] = 'Regras da firewall';
$L['RuleText_label'] = 'De ${Src} para ${Dst}, serviço ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Procurar...';

$L['Delete_header'] = 'Apagar regra #${0}';
$L['Delete_message'] = 'Confirmar o apagamento da regra #${id}';
$L['HostGroups_create'] = 'Novo grupo de máquinas "${0}"';
$L['Hosts_create'] = 'Nova máquina "${0}"';
$L['Zones_create'] = 'Nova zona "${0}"';
$L['Services_create'] = 'Novo serviço "${0}"';
$L['IpRange_create'] = 'Nova gama de IP\'s "${0}"';
$L['Cidr_create'] = 'Nova rede CIDR "${0}"';

$L['A_new_rule_label'] = "Nova regra";
$L['Any_label'] = 'Qualquer';
$L['NoRulesDefined_label'] = 'Não está definida qualquer regra. Crie a primeira agora!';

$L['any_service_label'] = 'qualquer serviço';
$L['any_src_dst_label'] = 'qualquer máquina';
$L['all_label'] = 'qualquer';
$L['host_label'] = 'máquina';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'gama de IP\'s';
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
$L['FirewallObject_iprange_Title'] = 'Gama de IP\'s ${key}';
$L['FirewallObject_cidr_Title'] = 'Rede CIDR ${key}';

$L['Show_x_outof_y_label'] = 'A mostrar resultado parcial ${partial} de ${total}';
