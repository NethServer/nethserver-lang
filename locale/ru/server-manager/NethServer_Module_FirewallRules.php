<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Управление правилами экрана';
$L['FirewallRules_Tags'] = 'Политики правил межсетевого экрана';
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
$L['ActionReject_label'] = 'Отвергнуть';
$L['ActionAccept_label'] = 'Принять';
$L['ActionDrop_label'] = 'Сбросить';
$L['Source_label'] = 'Источник';
$L['Destination_label'] = 'Назначение';
$L['Service_label'] = 'Служба';
$L['PickSource_label'] = 'Выбрать один...';
$L['PickDestination_label'] = 'Выбрать один...';
$L['PickService_label'] = 'Выбрать один...';
$L['LogType_label'] = 'При соответствии правила сделать запись в журнал';

$L['PickObject_SrcRaw_header'] = 'Выберите источник пакета для правила "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Выберите назначение пакета для правила "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Выберите протокол службы для правила "${RuleId}"';

$L['Create_last_label'] = 'Создать правило в конце списка';
$L['Create_first_label'] = 'Создать правило в начале списка';
$L['Create_header'] = 'Создать правило';
$L['Copy_header'] = 'Создать копию #${0}';
$L['Commit_label'] = 'Принять изменения';
$L['Edit_label'] = 'Изменить';
$L['Copy_label'] = 'Копировать';
$L['Delete_label'] = 'Удалить';
$L['Index_header'] = 'Правила экрана';
$L['RuleText_label'] = 'От ${Src} к ${Dst}, служба ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Поиск...';

$L['Delete_header'] = 'Удалить правило #${0}';
$L['Delete_message'] = 'Подтвердить удаление правила #${id}';
$L['HostGroups_create'] = 'Создать группу хостов  "${0}"';
$L['Hosts_create'] = 'Создать хост "${0}"';
$L['Zones_create'] = 'Создать зону "${0}"';
$L['Services_create'] = 'Создать службу "${0}"';
$L['IpRange_create'] = 'Создать IP диапазон "${0}"';
$L['Cidr_create'] = 'Создать CIDR сеть "${0}"';

$L['A_new_rule_label'] = "Новое правило";
$L['Any_label'] = 'Любой';
$L['NoRulesDefined_label'] = 'Не определены правила. Создайте хотя бы одно!';

$L['any_service_label'] = 'любая служба';
$L['any_src_dst_label'] = 'любой хост';
$L['all_label'] = 'любой';
$L['host_label'] = 'хост';
$L['zone_label'] = 'зона';
$L['iprange_label'] = 'IP диапазон';
$L['cidr_label'] = 'CIDR сеть';
$L['host-group_label'] = 'группа';
$L['role_label'] = 'интерфейс';
$L['confirm_reload_label'] = 'Нет примененных изменений.';

$L['FirewallObject_any_Title'] = 'Любой';
$L['FirewallObject_host_Title'] = 'Хост ${key}';
$L['FirewallObject_local_Title'] = 'Сетевой (LAN) хост ${key}';
$L['FirewallObject_remote_Title'] = 'Хост ${key}';
$L['FirewallObject_role_Title'] = 'Роль ${key}';
$L['FirewallObject_zone_Title'] = 'Зона ${key}';
$L['FirewallObject_host-group_Title'] = 'Группа хоста ${key}';
$L['FirewallObject_fwservice_Title'] = 'Служба ${key}';
$L['FirewallObject_iprange_Title'] = 'IP диапазон  ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR сеть ${key}';

$L['Show_x_outof_y_label'] = 'Показана ${partial} часть результатов из ${total}';
$L['ActionRoute_label'] = 'Маршрут до ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Лог';

$L['ShowAction_label'] = 'Показать';
$L['ShowAll_label'] = 'Всё';
$L['ShowRules_label'] = 'Сетевой экран';
$L['ShowRoutes_label'] = 'Политика маршрутизации';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Правила маршрутизации не позволяют установить красную зону в качестве источника.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Правила маршрутизации допускают только следующие типы назначений: зона, хост, диапазон IP адресов, CIDR, красная зона.';
