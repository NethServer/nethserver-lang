<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Управление правилами экрана';
$L['FirewallRules_Tags'] = 'firewall rule policy traffic shaping';
$L['FirewallRules_Title'] = 'Правила межсетевого экрана';

$L['general_header'] = 'Общие';
$L['General_Title'] = 'Общие настройки';
$L['ExternalPing_label'] = 'Пинг из интернета';
$L['permissive_label'] = 'Разрешено';
$L['Policy_label'] = 'Трафик в интернет (красный интерфейс)';
$L['strict_label'] = 'Заблокировано';
$L['enabled_label'] = 'Включен';
$L['disabled_label'] = 'Отключен';
$L['MACValidation_label'] = 'Проверка MAC (привязка IP/MAC)';
$L['MACValidationPolicy_label'] = 'Политика для хостов без привязки IP/MAC (резервирование DHCP)';
$L['drop_label'] = 'Блокировать трафик';
$L['accept_label'] = 'Разрешить трафик';

$L['Edit_header'] = 'Изменить правило #${0}';
$L['status_label'] = 'Включен';
$L['Action_label'] = 'Действие';
$L['Rule_label'] = 'Правило';
$L['ActionReject_label'] = 'Отвергнуть';
$L['ActionAccept_label'] = 'Принять';
$L['ActionDrop_label'] = 'Сбросить';
$L['Source_label'] = 'Источник';
$L['Destination_label'] = 'Назначение';
$L['Service_label'] = 'Служба';
$L['Time_label'] = 'Time condition';
$L['PickSource_label'] = 'Выбрать один...';
$L['PickDestination_label'] = 'Выбрать один...';
$L['PickService_label'] = 'Выбрать один...';
$L['LogType_label'] = 'При соответствии правила сделать запись в журнал';

$L['PickObject_SrcRaw_header'] = 'Выберите источник пакета для правила "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Выберите назначение пакета для правила "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Выберите протокол службы для правила "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Choose the time condition for rule "${RuleId}"';

$L['Create_last_label'] = 'Создать правило в конце списка';
$L['Create_first_label'] = 'Создать правило в начале списка';
$L['Create_header'] = 'Создать правило';
$L['Copy_header'] = 'Создать копию #${0}';
$L['Commit_label'] = 'Принять изменения';
$L['Edit_label'] = 'Изменить';
$L['EditRule_label'] = 'Редактировать правило';
$L['EditService_label'] = 'Редактировать службу';
$L['Copy_label'] = 'Копировать';
$L['Delete_label'] = 'Удалить';
$L['Index_header'] = 'Правила экрана';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Поиск...';

$L['Delete_header'] = 'Удалить правило #${0}';
$L['Delete_message'] = 'Подтвердить удаление правила #${id}';
$L['HostGroups_create'] = 'Создать группу хостов  "${0}"';
$L['Hosts_create'] = 'Создать хост "${0}"';
$L['Zones_create'] = 'Создать зону "${0}"';
$L['Services_create'] = 'Create service object "${0}"';
$L['Time_create'] = 'Create time condition "${0}"';
$L['IpRange_create'] = 'Создать IP диапазон "${0}"';
$L['Cidr_create'] = 'Создать CIDR сеть "${0}"';

$L['A_new_rule_label'] = "Новое правило";
$L['NoRulesDefined_label'] = 'Не определены правила. Создайте хотя бы одно!';

$L['any_service_label'] = 'любая служба';
$L['any_src_dst_label'] = 'любой хост';
$L['Time_always'] = 'Всегда';
$L['Type_any_label'] = 'любой';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'хост';
$L['zone_label'] = 'зона';
$L['iprange_label'] = 'IP диапазон';
$L['cidr_label'] = 'CIDR сеть';
$L['host-group_label'] = 'группа';
$L['role_label'] = 'интерфейс';
$L['confirm_reload_label'] = 'Нет примененных изменений.';

$L['FirewallObject_any_Title'] = 'Любой';
$L['FirewallObject_fw_Title'] = 'Сетевой экран';
$L['FirewallObject_host_Title'] = 'Хост ${key}';
$L['FirewallObject_local_Title'] = 'Сетевой (LAN) хост ${key}';
$L['FirewallObject_remote_Title'] = 'Хост ${key}';
$L['FirewallObject_role_Title'] = 'Роль ${key}';
$L['FirewallObject_zone_Title'] = 'Зона ${key}';
$L['FirewallObject_host-group_Title'] = 'Группа хоста ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - service object';
$L['FirewallObject_time_Title'] = '${key} - time condition';
$L['FirewallObject_service_Title'] = '${key} - network service';
$L['FirewallObject_ndpi_Title'] = '${name} - DPI protocol';
$L['FirewallObject_iprange_Title'] = 'IP диапазон  ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR сеть ${key}';

$L['Show_x_outof_y_label'] = 'Показана ${partial} часть результатов из ${total}';
$L['ActionRoute_label'] = 'Маршрут до ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Лог';

$L['ShowAction_label'] = 'Показать';
$L['ShowRules_label'] = 'Firewall (${0})';
$L['ShowRoutes_label'] = 'Policy routing (${0})';
$L['ShowServices_label'] = 'Network services (${0})';
$L['ShowTrafficShaping_label'] = 'Traffic shaping (${0})';

$L['ActionPriorityHigh_label'] = 'High priority';
$L['ActionPriorityLow_label'] = 'Low priority';
$L['ActionPriority_label'] = 'Priority ${0}';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Правила маршрутизации не позволяют установить красную зону в качестве источника.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Правила маршрутизации допускают только следующие типы назначений: зона, хост, диапазон IP адресов, CIDR, красная зона.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,5'] = 'Route rules do not allow to set a DPI protocol as Service.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecting "local service" requires the "firewall" destination.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic shaping rules do not allow the red zone to be set as source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic shaping rules allow only the following Destination types: zone, host, IP range, CIDR, red';
