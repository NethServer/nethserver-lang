<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Управљај правилима заштитног зида';
$L['FirewallRules_Tags'] = 'полиса правила заштитног зида';
$L['FirewallRules_Title'] = 'Правила заштитног зида';

$L['general_header'] = 'Опште';
$L['General_Title'] = 'Опште опције';
$L['ExternalPing_label'] = 'Пинг са интернета';
$L['permissive_label'] = 'Дозвољено';
$L['Policy_label'] = 'Саобраћај ка интернету (црвени интерфејс)';
$L['strict_label'] = 'Блокирано';
$L['enabled_label'] = 'Омогућено';
$L['disabled_label'] = 'Онемогућено';
$L['MACValidation_label'] = 'Валидација МАЦ (ИП/МАЦ повезивање)';
$L['MACValidationPolicy_label'] = 'Полиса за домаћине без повезаних ИП/МАЦ (ДХЦП резервација)';
$L['drop_label'] = 'Блокирај саобраћај';
$L['accept_label'] = 'Дозволи саобраћај';

$L['Edit_header'] = 'Измени правило #${0}';
$L['status_label'] = 'Омогућено';
$L['Action_label'] = 'Акција';
$L['ActionReject_label'] = 'Одбиј';
$L['ActionAccept_label'] = 'Прихвати';
$L['ActionDrop_label'] = 'Испусти';
$L['Source_label'] = 'Извор';
$L['Destination_label'] = 'Одредиште';
$L['Service_label'] = 'Сервис';
$L['PickSource_label'] = 'Одабери један...';
$L['PickDestination_label'] = 'Одабери један...';
$L['PickService_label'] = 'Одабери један...';
$L['LogType_label'] = 'Упиши у дневник ако се ово правило поклапа';

$L['PickObject_SrcRaw_header'] = 'Изабери извор пакета за правило "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Изабери одредиште пакета за правило "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Изабери протокол сервиса за правило "${RuleId}"';

$L['Create_last_label'] = 'Креирај правило на дну';
$L['Create_first_label'] = 'Креирај правило на врху';
$L['Create_header'] = 'Креирај правило заштитног зида';
$L['Copy_header'] = 'Креирај копију #${0}';
$L['Commit_label'] = 'Примени измене';
$L['Edit_label'] = 'Измени';
$L['Copy_label'] = 'Копирај';
$L['Delete_label'] = 'Обриши';
$L['Index_header'] = 'Правила заштитног зида';
$L['RuleText_label'] = 'Од ${Src} ка ${Dst}, сервис ${Service}';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Претражи...';

$L['Delete_header'] = 'Обриши правило #${0}';
$L['Delete_message'] = 'Потврди брисање правила заштитног зида #${id}';
$L['HostGroups_create'] = 'Креирај групу домаћина "${0}"';
$L['Hosts_create'] = 'Креирај домаћина "${0}"';
$L['Zones_create'] = 'Креирај зону "${0}"';
$L['Services_create'] = 'Креирај сервис "${0}"';
$L['IpRange_create'] = 'Креирај ИП опсег "${0}"';
$L['Cidr_create'] = 'Креирај ЦИДР мрежу "${0}"';

$L['A_new_rule_label'] = "Ново правило";
$L['Any_label'] = 'Било које';
$L['NoRulesDefined_label'] = 'Нема дефинисаних правила. Креирај сада прво!';

$L['any_service_label'] = 'било који сервис';
$L['any_src_dst_label'] = 'било који домаћин';
$L['all_label'] = 'било које';
$L['host_label'] = 'домаћин';
$L['zone_label'] = 'зона';
$L['iprange_label'] = 'ИП опсег';
$L['cidr_label'] = 'ЦИДР мрежа';
$L['host-group_label'] = 'група';
$L['role_label'] = 'интерфејс';
$L['confirm_reload_label'] = 'Никакве измене нису примењене.';

$L['FirewallObject_any_Title'] = 'Било које';
$L['FirewallObject_host_Title'] = 'Домаћин ${key}';
$L['FirewallObject_local_Title'] = 'ЛАН домаћин${key}';
$L['FirewallObject_remote_Title'] = 'Домаћин ${key}';
$L['FirewallObject_role_Title'] = 'Улога ${key}';
$L['FirewallObject_zone_Title'] = 'Зона ${key}';
$L['FirewallObject_host-group_Title'] = 'Група домаћина ${key}';
$L['FirewallObject_fwservice_Title'] = 'Сервис ${key}';
$L['FirewallObject_iprange_Title'] = 'ИП опсег ${key}';
$L['FirewallObject_cidr_Title'] = 'ЦИДР мрежа ${key}';

$L['Show_x_outof_y_label'] = 'Приказивање ${partial} резултата од ${total}';
$L['ActionRoute_label'] = 'Рута ка ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Дневник';

$L['ShowAction_label'] = 'Прикажи';
$L['ShowAll_label'] = 'Све';
$L['ShowRules_label'] = 'Заштитни зид';
$L['ShowRoutes_label'] = 'Полисе рутирања';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Правила рутирања не дозвољавају да се црвена зона подеси за Извор.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Правила рутирања созвољавају само следећа одредишта: зона, домаћин, ип опсег, цидр, црвено.';
