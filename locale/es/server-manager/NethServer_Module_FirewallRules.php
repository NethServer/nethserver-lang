<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Administrar reglas del firewall';
$L['FirewallRules_Tags'] = 'Política de Reglas de Firewall';
$L['FirewallRules_Title'] = 'Reglas del Firewall';

$L['general_header'] = 'General';
$L['General_Title'] = 'Opciones Generales';
$L['ExternalPing_label'] = 'Ping desde Internet';
$L['permissive_label'] = 'Permitido';
$L['Policy_label'] = 'Trafico hacia internet (adaptador de red rojo)';
$L['strict_label'] = 'Bloqueado';
$L['enabled_label'] = 'Habilitado';
$L['disabled_label'] = 'Deshabilitado';
$L['MACValidation_label'] = ' Validación MAC (IP/MAC vinculante)';
$L['MACValidationPolicy_label'] = 'Política para los hosts sin IP/MAC de enlace (reserva DHCP)';
$L['drop_label'] = 'Bloquear tráfico';
$L['accept_label'] = 'Permitir tráfico';

$L['Edit_header'] = 'Editar regla #${0}';
$L['status_label'] = 'Habilitado';
$L['Action_label'] = 'Acción';
$L['ActionReject_label'] = 'Rechazar';
$L['ActionAccept_label'] = 'Aceptar';
$L['ActionDrop_label'] = 'Descartar';
$L['Source_label'] = 'Origen';
$L['Destination_label'] = 'Destino';
$L['Service_label'] = 'Servicio';
$L['PickSource_label'] = 'Elija uno...';
$L['PickDestination_label'] = 'Elija uno...';
$L['PickService_label'] = 'Elija uno....';
$L['LogType_label'] = 'Registrar si esta regla se cumple';

$L['PickObject_SrcRaw_header'] = 'Elija el origen del paquete para la regla "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Elija el destino del paquete para la regla "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Elija el protcolo del servicio para la regla "${RuleId}"';

$L['Create_last_label'] = 'Crear regla al final';
$L['Create_first_label'] = 'Crear regla al comienzo';
$L['Create_header'] = 'Crear regla del firewall';
$L['Copy_header'] = 'Crear una copia de #${0}';
$L['Commit_label'] = 'Aplicar cambios';
$L['Edit_label'] = 'Editar';
$L['Copy_label'] = 'Copiar';
$L['Delete_label'] = 'Eliminar';
$L['Index_header'] = 'Reglas de Firewall';
$L['RuleText_label'] = 'De ${Src} a ${Dst}, servicio ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Buscar....';

$L['Delete_header'] = 'Eliminar regla #${0}';
$L['Delete_message'] = 'Confirmar eliminacion de regla de firewall #${id}';
$L['HostGroups_create'] = 'Crear grupo de hosts "${0}"';
$L['Hosts_create'] = 'Crear host "${0}"';
$L['Zones_create'] = 'Crear zona "${0}"';
$L['Services_create'] = 'Crear servicio "${0}"';
$L['IpRange_create'] = 'Crear rando IP "${0}"';
$L['Cidr_create'] = 'Crear red CIDR "${0}"';

$L['A_new_rule_label'] = "Nueva regla";
$L['Any_label'] = 'Cualquiera';
$L['NoRulesDefined_label'] = 'No hay reglas definidas. Crear la primera ahora!';

$L['any_service_label'] = 'cualquier servicio';
$L['any_src_dst_label'] = 'cualquier host';
$L['all_label'] = 'cualquiera';
$L['host_label'] = 'host';
$L['zone_label'] = 'zona';
$L['iprange_label'] = 'Rango de IP';
$L['cidr_label'] = 'Red CIDR';
$L['host-group_label'] = 'grupo';
$L['role_label'] = 'Interfaz';
$L['confirm_reload_label'] = 'No se han aplicado los cambios.';

$L['FirewallObject_any_Title'] = 'Cualquiera';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Rol ${key}';
$L['FirewallObject_zone_Title'] = 'Zona ${key}';
$L['FirewallObject_host-group_Title'] = 'Grupo de Host ${key}';
$L['FirewallObject_fwservice_Title'] = 'Servicio ${key}';
$L['FirewallObject_iprange_Title'] = 'Rango de IP ${key}';
$L['FirewallObject_cidr_Title'] = 'Red CIDR ${key}';

$L['Show_x_outof_y_label'] = 'Mostrando ${partial} resultados de ${total}';
