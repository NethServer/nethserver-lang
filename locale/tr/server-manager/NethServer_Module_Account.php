<?php

$L['Account_Title'] = 'Kullanıcılar ve gruplar';
$L['Account_Description'] = 'Kullanıcı ve grup yönetimi, etki alanı kimliği ve kimlik doğrulama hizmeti sağlayıcıların ayarları ';
$L['Account_Tags'] = 'sssd user group realm domain account kerberos ldap kullanıcı grup etki alanı hesap';
$L['Select_Title'] = 'Yönetim seçimi';

$L['AuthProvider_header'] = '"${0}" etki alanı için kullanıcı ve grup hizmeti sağlayıcıyı seçin';
$L['Provider_none_label'] = 'Yok (Devre Dışı)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Aktif Dizin';
$L['AdDns_label'] = 'DNS sunucu IP adresi';
$L['LdapUri_label'] = 'Sunucu IP adresi';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS Etki Alanı';

$L['login_label'] = 'Ayrıcalıklı kullanıcı adı';
$L['password_label'] = 'Parola';
$L['Join_label'] = 'Katıl';
$L['Authenticate_header'] = 'Aktif Dizin etki alanına ayrıcalıklı kullanıcı kimlik doğrulama bilgileri ile katıl';

$L['NoConfig_header'] = '${0} Etki Alanı';

$L['AccountProvider_Error_22'] = 'Hesap hizmeti sağlayıcısı hatası: DN geçersiz. Hesap sağlayıcı ayarlarındaki Base DN, Groups DN ve Users DN ayarlarını denetleyin';
$L['AccountProvider_Error_32'] = 'Hesap hizmeti sağlayıcısı hatası: Herhangi bir kayıt bulunamadı. Hesap sağlayıcı ayarlarındaki LDAP bağlantı bilgilerini ve Base DN ayarlarını denetleyin';
$L['AccountProvider_Error_34'] = 'Hesap hizmeti sağlayıcısı hatası: Makina parolası geçersiz. Sunucunun etki alanına doğru şekilde katılmış olup olmadığını denetleyin';
$L['AccountProvider_Error_49'] = 'Hesap hizmeti sağlayıcı hatası: Kimlik doğrulama bilgileri geçersiz (${0})';
$L['AccountProvider_Error_49_710'] = 'Erişim izinleri yetersiz (49/710): Hesap hizmeti sağlayıcısı ayarlarından alternatif LDAP bağlantısı bilgilerini belirtin';
$L['AccountProvider_Error_4'] = 'Hesap hizmeti sağlayıcı uyarısı: Boyut sınırı aşıldı (${0})';
$L['AccountProvider_Error_104'] = 'Hesap hizmeti sağlayıcısı bağlantısı eş tarafından sıfırlandı: Sunucunun SSL/TLS bağlantılarını destekleyip desteklemediğini denetleyin';
$L['AccountProvider_Error_110'] = 'Hesap hizmeti sağlayıcı bağlantısı zaman aşımına uğradı';
$L['AccountProvider_Error_111'] = 'Hesap hizmeti sağlayıcısı bağlantıyı reddetti';

$L['valid_platform,ad-dns,srv_record,1'] = 'Bir Aktif Dizin etki alanı denetleyicisi gibi görünmüyor';

$L['ChooseProvider_1'] = 'Users and groups are available through an accounts provider. You can connect this server to a remote accounts provider, or install a local one.';
$L['ChooseProvider_2'] = 'There are two kinds of accounts provider:';
$L['ChooseProvider_3'] = 'Active Directory: ideal for Windows networks, users can access shared folders with their own credentials';
$L['ChooseProvider_4'] = 'LDAP: easy to install and configure, shared folders are accessible without user authentication';
$L['ChooseProvider_5'] = 'Configure a remote accounts provider';
$L['ChooseProvider_6'] = 'Install a local accounts provider; once installed, it must not be removed';
$L['ChooseProvider_7'] = 'Shared folders are available by installing the "File server" module.';
$L['configureButton_label'] = 'Configure';
$L['softwareCenterButton_label'] = 'Install';
$L['dismissButton_label'] = 'No, thanks!';