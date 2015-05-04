<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Güvenlik duvarı kuralları yönetimi';
$L['FirewallRules_Tags'] = 'güvenlik duvarı ilkesi';
$L['FirewallRules_Title'] = 'Güvenlik duvarı kuralları';

$L['general_header'] = 'Genel';
$L['General_Title'] = 'Genel ayarlar';
$L['ExternalPing_label'] = 'İnternet üzerinden Ping';
$L['permissive_label'] = 'İzin verilen';
$L['Policy_label'] = 'İnternete çıkan trafik (kırmızı arabirim)';
$L['strict_label'] = 'Engellenmiş';
$L['enabled_label'] = 'Etkin';
$L['disabled_label'] = 'Devre dışı';
$L['MACValidation_label'] = 'MAC kimlik doğrulaması (IP/MAC bağlama)';
$L['MACValidationPolicy_label'] = 'IP/MAC bağlaması olmayan sunucular için ilke (DHCP ayırma)';
$L['drop_label'] = 'Engellenen trafik';
$L['accept_label'] = 'İzin verilen trafik';

$L['Edit_header'] = '#${0} kuralını düzenle';
$L['status_label'] = 'Etkin';
$L['Action_label'] = 'İşlem';
$L['ActionReject_label'] = 'Reddet';
$L['ActionAccept_label'] = 'Onayla';
$L['ActionDrop_label'] = 'Düşür';
$L['Source_label'] = 'Kaynak';
$L['Destination_label'] = 'Hedef';
$L['Service_label'] = 'Hizmet';
$L['PickSource_label'] = 'Birini seçin...';
$L['PickDestination_label'] = 'Birini seçin...';
$L['PickService_label'] = 'Birini seçin...';
$L['LogType_label'] = 'Bu kural uyuşursa günlük dosyasına yazılsın';

$L['PickObject_SrcRaw_header'] = '"${RuleId}" kuralı için paket kaynağını seçin';
$L['PickObject_DstRaw_header'] = '"${RuleId}" kuralı için paket hedefini seçin';
$L['PickObject_ServiceRaw_header'] = '"${RuleId}" kuralı için hizmet iletişim kuralını seçin';

$L['Create_last_label'] = 'En alta kural ekle';
$L['Create_first_label'] = 'En üste kural ekle';
$L['Create_header'] = 'Güvenlik duvarı kuralı ekle';
$L['Copy_header'] = '#${0} kuralını kopyala';
$L['Commit_label'] = 'Değişiklikleri uygula';
$L['Edit_label'] = 'Düzenle';
$L['Copy_label'] = 'Kopyala';
$L['Delete_label'] = 'Sil';
$L['Index_header'] = 'Güvenlik duvarı kuralları';
$L['RuleText_label'] = '${Src} kaynağından ${Dst} hedefine ${Service} hizmeti';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Arama...';

$L['Delete_header'] = '#${0} kuralını sil';
$L['Delete_message'] = '#${id} güvenlik duvarı kuralını silme onayı';
$L['HostGroups_create'] = '"${0}" sunucu grubunu ekle';
$L['Hosts_create'] = '"${0}" sunucusunu ekle';
$L['Zones_create'] = '"${0}" bölgesini ekle';
$L['Services_create'] = '"${0}" hizmetini ekle';
$L['IpRange_create'] = '"${0}" IP aralığını ekle';
$L['Cidr_create'] = '"${0}" CIDR ağını ekle';

$L['A_new_rule_label'] = "Kural ekle";
$L['Any_label'] = 'Tümü';
$L['NoRulesDefined_label'] = 'Henüz bir kural tanımlanmamış. Yeni bir kural ekleyebilirsiniz!';

$L['any_service_label'] = 'tüm hizmetler';
$L['any_src_dst_label'] = 'tüm sunucular';
$L['all_label'] = 'tümü';
$L['host_label'] = 'sunucu';
$L['zone_label'] = 'bölge';
$L['iprange_label'] = 'IP aralığı';
$L['cidr_label'] = 'CIDR ağı';
$L['host-group_label'] = 'grup';
$L['role_label'] = 'arabirim';
$L['confirm_reload_label'] = 'Herhangi bir değişiklik uygulanmadı.';

$L['FirewallObject_any_Title'] = 'Tümü';
$L['FirewallObject_host_Title'] = 'Sunucu ${key}';
$L['FirewallObject_local_Title'] = 'Yerel ağ sunucusu ${key}';
$L['FirewallObject_remote_Title'] = 'Sunucu ${key}';
$L['FirewallObject_role_Title'] = 'Rol ${key}';
$L['FirewallObject_zone_Title'] = 'Bölge ${key}';
$L['FirewallObject_host-group_Title'] = 'Sunucu grubu ${key}';
$L['FirewallObject_fwservice_Title'] = 'Hizmet ${key}';
$L['FirewallObject_iprange_Title'] = 'IP aralığı ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR ağı ${key}';

$L['Show_x_outof_y_label'] = '${partial} / ${total} sonuç görüntüleniyor';
