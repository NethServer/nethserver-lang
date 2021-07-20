<?php 

$L['FirewallObjects_Description'] = 'Güvenlik duvarı nesneleri yönetimi';
$L['FirewallObjects_Tags'] = 'Güvenlik duvarı alanı sunucu hizmeti grup nesneleri';
$L['FirewallObjects_Title'] = 'Güvenlik duvarı nesneleri';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Grup';
$L['HostGroups_create_label'] = 'Sunucu grubu ekle';
$L['HostGroups_CreateHostGroup_label'] = 'Sunucu grubu ekle';
$L['HostGroups_update_label'] = '"${0}" sunucu grubunu düzenle';
$L['HostGroups_Title'] = 'Sunucu grupları';

$L['HostsKey_label'] = 'Sunucu';
$L['Host_key_exists_message'] = 'Sunucu belirteci zaten kullanılıyor';
$L['Hosts_create_label'] = 'Sunucu ekle';
$L['Hosts_CreateHost_label'] = 'Sunucu ekle';
$L['Hosts_update_label'] = '"${0}" sunucusunu düzenle';
$L['Hosts_Title'] = 'Sunucular';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Arabirim';
$L['IpAddress_label'] = 'IP adresi';
$L['Members_label'] = 'Üyeler';
$L['Members'] = 'Üyeler';
$L['Network_label'] = 'Ağ';
$L['Ports_label'] = 'Kapı numaraları';
$L['Ports_validator'] = 'Kapı numaralarının virgül ile ayrılmış listesi';
$L['Port_range_validator'] = 'Başlangıç-Bitiş biçiminde kapı numarası aralığı';
$L['Protocol_label'] = 'İletişim kuralı';
$L['name_label'] = 'Ad';
$L['ServicesKey_label'] = 'Hizmet';
$L['Services_create_label'] = 'Hizmet ekle';
$L['Service_key_exists_message'] = 'Hizmet belirteci zaten kullanılıyor';
$L['Services_CreateService_label'] = 'Hizmet ekle';
$L['Services_update_label'] = '"${0}" hizmetini düzenle';
$L['Services_Title'] = 'Hizmetler';
$L['Times_Title'] = 'Süre koşulları';
$L['Times_create_label'] = 'Süre koşulu ekle';
$L['Times_update_label'] = '"${0}" süre koşulunu düzenle';
$L['Times_CreateTime_label'] = 'Süre koşulu ekle';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP ve UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Bölge';
$L['Zones_create_label'] = 'Bölge ekle';
$L['Zone_key_exists_message'] = 'Bölge belirteci zaten kullanılıyor';
$L['Zones_CreateZone_label'] = 'Bölge ekle';
$L['Zones_update_label'] = '"${0}" bölgesini düzenle';
$L['Zones_Title'] = 'Bölgeler';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Güvenlik duvarı kuralları tarafından kullanıldığından ${2} bölgesi silinemedi. ';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Güvenlik duvarı kuralları tarafından kullanıldığından ${2} hizmeti silinemedi. ';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Güvenlik duvarı kuralları tarafından kullanıldığından ${2} sunucusu silinemedi. ';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Güvenlik duvarı kuralları tarafından kullanıldığından ${2} sunucu grubu silinemedi. ';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'CIDR güvenlik duvarı kuralları tarafından kullanıldığından ${2} silinemedi.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'IP dizisi güvenlik duvarı kuralları tarafından kullanıldığından, ${2} silinemedi.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Sunucu grubundaki son üye olduğundan ${2} silinemedi. ${${reason}}.';
$L['valid_platform,fwobject-zone-delete,fwzone-referenced,3'] = '${2} silinemedi. Ağ hizmetleri tarafından kullanılıyor';
$L['valid_platform,fwobject-time-delete,fwobject-referenced,3'] = '${2} silinemedi. Sunucu güvenlik duvarı kurallarında kullanılıyor.';
$L['valid_iprange_outofbounds'] = 'Başlangıç IP adresi Bitiş IP adresinden küçük olmalı';

$L['Cidr_Title'] = 'CIDR alt ağları';
$L['Address_label'] = 'Ağ';
$L['Cidr_create_label'] = 'CIDR alt ağı ekle';
$L['Cidr_update_label'] = 'CIDR alt ağını güncelle';
$L['Cidr_key_exists_message'] = 'Sunucular (hosts) veritabanında aynı adlı bir nesne zaten var';
$L['Cidr_CreateCidr_label'] = 'CIDR ağı ekle';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'IP aralıkları';
$L['Start_label'] = 'Başlangıç IP adresi';
$L['End_label'] = 'Bitiş IP adresi';
$L['IpRange_create_label'] = 'IP aralığı ekle';
$L['IpRange_update_label'] = 'IP aralığı güncelle';
$L['IpRange_key_exists_message'] = 'Sunucular (hosts) veritabanında aynı adlı bir nesne zaten var';
$L['IpRange_CreateIpRange_label'] = 'IP aralığı ekle';
$L['IpRangeKey_label'] = 'IP aralığı';

$L['TimesKey_label'] = 'Koşul adı';
$L['TimeStart_label'] = 'Başlangıç zamanı';
$L['TimeStop_label'] = 'Bitiş zamanı';
$L['WeekDays_label'] = 'Haftanın günü';
$L['TimeStop_compare_TimeStart_message'] = 'Değer "Başlangıç zamanı" sonrasında olmalıdır (${0})';

$L['WeekDay_Sun_label'] = 'Pazar';
$L['WeekDay_Mon_label'] = 'Pazartesi';
$L['WeekDay_Tue_label'] = 'Salı';
$L['WeekDay_Wed_label'] = 'Çarşamba';
$L['WeekDay_Thu_label'] = 'Perşembe';
$L['WeekDay_Fri_label'] = 'Cuma';
$L['WeekDay_Sat_label'] = 'Cumartesi';
