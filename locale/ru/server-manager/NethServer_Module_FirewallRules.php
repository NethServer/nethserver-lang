<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Управление правилами файрвола';
$L['FirewallRules_Tags'] = 'firewall rule policy traffic shaping файрвол правило политика шейпинг';
$L['FirewallRules_Title'] = 'Правила файрвола';

$L['general_header'] = 'Основные';
$L['General_Title'] = 'Основные настройки';
$L['ExternalPing_label'] = 'Пинг из интернета';
$L['permissive_label'] = 'Разрешено';
$L['Policy_label'] = 'Трафик в интернет (красный интерфейс)';
$L['strict_label'] = 'Заблокировано';
$L['enabled_label'] = 'Включен';
$L['disabled_label'] = 'Отключен';
$L['MACValidation_label'] = 'Проверка MAC (привязка IP/MAC)';
$L['MACValidationPolicy_label'] = 'Политика для хостов без привязки IP/MAC (резервирования DHCP)';
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
$L['Time_label'] = 'Временное условие';
$L['PickSource_label'] = 'Выбрать один...';
$L['PickDestination_label'] = 'Выбрать один...';
$L['PickService_label'] = 'Выбрать один...';
$L['LogType_label'] = 'Запись в журнал при срабатывании правила';

$L['PickObject_SrcRaw_header'] = 'Выберите источник пакета для правила "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Выберите назначение пакета для правила "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Выберите протокол службы для правила "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Выберите временное условие для правила "${RuleId}"';

$L['Create_last_label'] = 'Создать правило в конце списка';
$L['Create_first_label'] = 'Создать правило в начале списка';
$L['Create_header'] = 'Создать правило';
$L['Copy_header'] = 'Создать копию #${0}';
$L['Commit_label'] = 'Применить изменения';
$L['Edit_label'] = 'Изменить';
$L['EditRule_label'] = 'Редактировать правило';
$L['EditService_label'] = 'Редактировать службу';
$L['Copy_label'] = 'Копировать';
$L['Delete_label'] = 'Удалить';
$L['Index_header'] = 'Правила файрвола';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Поиск...';

$L['Delete_header'] = 'Удалить правило #${0}';
$L['Delete_message'] = 'Подтвердить удаление правила #${id}';
$L['HostGroups_create'] = 'Создать группу хостов  "${0}"';
$L['Hosts_create'] = 'Создать хост "${0}"';
$L['Zones_create'] = 'Создать зону "${0}"';
$L['Services_create'] = 'Создать объект службы "${0}"';
$L['Time_create'] = 'Создать временное условие "${0}"';
$L['IpRange_create'] = 'Создать IP диапазон "${0}"';
$L['Cidr_create'] = 'Создать CIDR сеть "${0}"';

$L['A_new_rule_label'] = "Новое правило";
$L['NoRulesDefined_label'] = 'Не определены правила. Создайте хотя бы одно!';

$L['any_service_label'] = 'любая служба';
$L['any_src_dst_label'] = 'любой хост';
$L['Time_always'] = 'Всегда';
$L['Type_any_label'] = 'любой';
$L['Type_fw_label'] = 'файрвол';
$L['host_label'] = 'хост';
$L['zone_label'] = 'зона';
$L['iprange_label'] = 'IP диапазон';
$L['cidr_label'] = 'CIDR сеть';
$L['host-group_label'] = 'группа';
$L['role_label'] = 'интерфейс';
$L['confirm_reload_label'] = 'Изменения не были применены.';

$L['FirewallObject_any_Title'] = 'Любой';
$L['FirewallObject_fw_Title'] = 'Файрвол';
$L['FirewallObject_host_Title'] = 'Хост ${key}';
$L['FirewallObject_local_Title'] = 'LAN-хост ${key}';
$L['FirewallObject_remote_Title'] = 'Хост ${key}';
$L['FirewallObject_role_Title'] = 'Роль ${key}';
$L['FirewallObject_zone_Title'] = 'Зона ${key}';
$L['FirewallObject_host-group_Title'] = 'Группа хостов ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - объект службы';
$L['FirewallObject_time_Title'] = '${key} - временное условие';
$L['FirewallObject_service_Title'] = '${key} - сетевая служба';
$L['FirewallObject_ndpi_Title'] = '${name} - DPI-протокол';
$L['FirewallObject_iprange_Title'] = 'IP диапазон  ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR сеть ${key}';

$L['Show_x_outof_y_label'] = 'Показана ${partial} часть результатов из ${total}';
$L['ActionRoute_label'] = 'Маршрут до ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionPriorityIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Журнал';

$L['ShowAction_label'] = 'Показать';
$L['ShowRules_label'] = 'Файрвол (${0})';
$L['ShowRoutes_label'] = 'Политика маршрутизации (${0})';
$L['ShowServices_label'] = 'Сетевые службы (${0})';
$L['ShowTrafficShaping_label'] = 'Контроль трафика (${0})';

$L['ActionPriorityHigh_label'] = 'Высокий приоритет';
$L['ActionPriorityLow_label'] = 'Низкий приоритет';
$L['ActionPriority_label'] = 'Приоритет ${0}';
$L['ActionPrioLo_label'] = 'Низ-Прио';
$L['ActionPrioHi_label'] = 'Выс-Прио';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Правила маршрутизации не позволяют установить красную зону в качестве источника.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Правила маршрутизации допускают только следующие типы назначений: зона, хост, диапазон IP адресов, CIDR, красная зона.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Выбор "локальной службы" требует указания "файрвол" в назначении.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Правила шейпинга не позволяют указывать красную зону в качестве источника';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Правила шейпинга позволяют только следующие типы Назначения: зона, хост, IP диапазон, CIDR, красный';

$L['valid_platform,fwrule-modify,fwrule-ndpi,3'] = 'Правила, использующие DPI-протокол в качестве службы, не позволяют указывать "Любой" в качестве источника или назначения.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,4'] = 'Правила, использующие DPI-протокол в качестве службы, не позволяют указывать "Файрвол" в качестве источника.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,5'] = 'Правила маршрутизации не позволяют устанавливать DPI-протокол в качестве службы.';
$L['valid_platform,fwrule-modify,fwrule-ndpi,6'] = 'Действие "Отвергнуть" не поддерживается для правил, использующих DPI-протокол в качестве службы: используйте вместо этого действие "Сбросить".';
