<?php

$L['SssdConfig_Title'] = 'Hesap hizmeti sağlayıcısı';
$L['SssdConfig_Description'] = 'Hesap hizmeti sağlayıcısı üzerindeki kullanıcı ve grup ayarları';
$L['SssdConfig_Tags'] = 'sssd etki alanı hesap kullanıcı grup ldap kerberos aktif dizin';

$L['valid_platform,ad-dns,srv_record,1'] = 'Herhangi bir Aktif Dizin etki alanı denetleyicisi bulunamadı';

$L['Select_Title'] = 'Yönetim seçimi';

$L['LdapUri_label'] = 'LDAP Sunucu Adresi';
$L['BindProvider_label'] = 'Bağlan';
$L['NetbiosDomain_label'] = 'NetBIOS Etki Alanı';

$L['login_label'] = 'Ayrıcalıklı kullanıcı adı';
$L['password_label'] = 'Parola';
$L['Join_label'] = 'Katıl';
$L['Authenticate_header'] = 'Aktif Dizin etki alanına yetkili kullanıcı kimlik doğrulama bilgileri ile katıl';

$L['Wizard_header'] = '${0} etki alanı için kullanıcı ve grupları ayarla';
$L['Local_header'] = 'Bir yerel hesap hizmeti sağlayıcı kurun';
$L['Install_label'] = 'Kur';
$L['Bind_label'] = 'Bağlan';


$L['ChooseProvider_general'] = 'Kullanıcı ve gruplar bir hesap hizmeti sağlayıcı üzerinden kullanılır. Bu sunucuyu uzak hesap hizmeti sağlayıcısına bağlayabilir ya da yeni bir yerel hesap hizmeti sağlayıcısı kurabilirsiniz. Bazı özellikler hizmet sağlayıcı türüne bağlı olarak kullanılabilir ya da kullanılamaz.';
$L['ChooseProvider_ldap'] = 'Ayarlaması kolay, paylaşılmış klasörlere kimlik doğrulaması ile erişimi desteklemez';
$L['ChooseProvider_ad'] = 'Tüm paylaşılmış klasör özelliklerini etkinleştirir, gelişmiş yapılandırma ayarlarının yapılması gerekir';
$L['configAd_label'] = 'Aktif Dizin';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Aktif Dizin hesap hizmeti sağlayıcısı';
$L['Ldap_header'] = 'LDAP hesap hizmeti sağlayıcısı';
$L['ChooseAd_general'] = 'Aktif Dizin etki alanındaki bilgisayarlar basit üyesi ya da etki alanı denetleyicisi (DC) olabilir';
$L['ChooseAd_joinmember'] = 'Varolan bir etki alanının üyesi ol';
$L['ChooseAd_joindc'] = 'Varolan bir etki alanı için DC ol';
$L['ChooseAd_newforest'] = 'Yeni etki alanını hazırla ve DC ol';
$L['configAdJoinMember_label'] = 'Bir etki alanına katıl';
$L['configAdJoinDc_label'] = 'Etki alanına DC ekle';
$L['configAdNewDomain_label'] = 'Yeni etki alanı ekle';

$L['LocalLdapProvider_header'] = '${0} için LDAP yerel hesap hizmeti sağlayıcısı';
$L['RemoteLdapProvider_header'] = '${0} için LDAP uzak hesap hizmeti sağlayıcısı';
$L['ChooseLdap_general'] = 'Bir LDAP veritabanında kullanıcılar, gruplar ve parolalar bulunur. RFC2307 LDAP şeması ile uyumlu olmalıdır.';
$L['ChooseLdap_remote'] = 'Uzak bir LDAP sunucusuna bağlan';
$L['ChooseLdap_local'] = 'Bir OpenLDAP sunucusu kur';
$L['configLdapRemote_label'] = 'Uzak sunucuya bağlan';
$L['configLdapLocal_label'] = 'Yerel olarak kur';

$L['LdapRemoteIpAddress_label'] = 'Sunucu Adı ya da IP';
$L['LdapRemoteTcpPort_label'] = 'TCP kapı numarası';
$L['LdapRemoteIp_header'] = 'Uzak bir LDAP sunucusuna bağlan';
$L['LdapRemoteBind_label'] = 'Yapılandırmayı Denetle';
$L['probeLdapSuccess_warning'] = 'Yapılandırmayı tamamlamak için LDAP ayarlarını gözden geçirip kaydedin';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Sunucuya bağlantı hatası ya da hizmet kapı numarası geçersiz';

$L['BindType_anonymous_label'] = 'Anonim bağlantı';
$L['BindType_authenticated_label'] = 'Kimlik doğrulamalı bağlantı';
$L['BindType_label'] = 'LDAP uygulamaları için kimlik doğrulama bilgileri';
$L['valid_adldapcredentials_required'] = 'BindDN ve BindPassword alanlarını doldurun';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'LDAP kimlik doğrulama bilgileri geçersiz';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'LDAP bağlantı hatası';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN bulunamadı ya da izinler yetersiz';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'DN söz dizimi hatalı';
$L['BindDN_label'] = 'Bağlantı Ayrılmış Adı (Bind DN)';
$L['BindPassword_label'] = 'Bağlantı Parolası';

$L['BaseDN_label'] = 'Temel Ayrılmış Ad (Base DN)';
$L['UserDN_label'] = 'Kullanıcı Ayrılmış Adı (User DN)';
$L['GroupDN_label'] = 'Grup Ayrılmış Adı (Group DN)';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Varsayılan';
$L['starttls_enabled'] = 'Evet';
$L['starttls_disabled'] = 'Hayır';

$L['LdapLocalInstall_header'] = 'Bir OpenLDAP sunucusu kur';
$L['LdapLocalInstall_message'] = 'Yerel LDAP hesap hizmeti sağlayıcı olarak OpenLDAP sunucusunu indir ve yapılandır';
$L['LocalLdapProviderUninstall_label'] = 'Kaldır';

$L['LocalProviderUninstall_header'] = 'Yerel hesap hizmeti sağlayıcıyı kaldır';
$L['LocalProviderUninstall_message'] = 'Bu işlem geri alınamaz. Kullanıcı klasörleri silinmez ancak kullanıcı, parola, grup ve bilgisayar hesapları geri alınamayacak şekilde silinecek!';
$L['UninstallButton_label'] = 'Kaldır';
$L['installSuccessLdap_notification'] = 'OpenLDAP yerel hesap hizmeti sağlayıcısı düzgün şekilde kuruldu';

$L['uninstallSuccess_notification'] = 'Yerel hesap hizmeti sağlayıcısı kaldırıldı';
$L['unbindSuccess_notification'] = 'Uzak hesap hizmeti sağlayıcısı bağlantısı kesildi';

$L['LocalLdapProviderUpgrade_label'] = 'Aktif Dizine Yükselt';
$L['LocalLdapUpgrade_header'] = 'Aktif Dizine Yükselt';
$L['LocalLdapUpgrade_message1'] = 'Bu işlem geri alınamaz! LDAP veritabanı bir yerel Aktif Dizin hesap hizmeti sağlayıcısına yükseltilebilir.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Kullanıcı, parola, grup ve bilgisayar hesapları korunur. Paylaşılmış klasör bağlantıları için farklı kimlik doğrulama bilgileri kullanılması gerekebilir!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Paylaşılmış bir klasöre bağlanılırken, NetBIOS etki alanı adı kullanıcı adının önüne (ETKIALANI\kullaniciadi gibi) ya da özel form alanına yazılmalıdır.';
$L['LocalLdapUpgrade_WS_message1'] = 'Kullanıcı, parola ve grup hesapları korunur. Paylaşılmış klasör bağlantıları için farklı kimlik doğrulama bilgileri kullanılması gerekebilir!';
$L['LocalLdapUpgrade_WS_message2'] = 'Paylaşılmış bir klasöre bağlanılırken, NetBIOS etki alanı adı kullanıcı adının önüne (ETKIALANI\kullaniciadi gibi) ya da özel form alanına yazılmalıdır.';
$L['LdapUpgradeButton_label'] = 'Yükselt';
$L['canUpgradeToSamba_notification'] = 'Yerel LDAP hesap hizmeti sağlayıcı Samba Aktif Dizinine yükseltilebilir';

$L['AdJoinMember_header'] = 'Aktif Dizine yeni bir üye olarak katıl';
$L['AdDns_label'] = 'Aktif Dizin DNS Sunucusu';
$L['AdRealm_label'] = 'DNS etki alanı adı';
$L['AdWorkgroup_label'] = 'NetBIOS etki alanı adı';
$L['AdJoinMemberCredentials_label'] = 'Etki alanına katılmak için kimlik doğrulama bilgileri';
$L['AdUsername_label'] = 'Kullanıcı adı';
$L['AdPassword_label'] = 'Parola';
$L['AdJoinMember_label'] = 'Katıl';

$L['RemoteAdProvider_header'] = '${0} için Aktif Dizin uzak hesap hizmeti sağlayıcısı';
$L['AdNewDomain_header'] = 'Yeni bir Aktif Dizin etki alanı ekle';
$L['AdJoinMemberError_label'] = 'Aktif Dizine katılma işlemi tamamlanamadı (${0})';
$L['Save_label'] = 'Kaydet';
$L['RemoteProviderUnbind_label'] = 'Bağlantıyı Kes...';
$L['RemoteProviderUnbind_header'] = 'Hesap hizmeti sağlayıcı bağlantısını kes';
$L['RemoteProviderUnbind_message'] = 'Uzak hesap hizmeti sağlayıcısı tarafında tanımlanmış kullanıcı ve grup hesapları artık kullanılamayacak.';
$L['UnbindButton_label'] = 'Bağlantıyı Kes';
$L['bindAdSuccess_notification'] = '${0} Aktif Dizin etki alanı katıldı';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = '127.0.0.1 ve sunucu tarafından kullanılan diğer IP adreslerinden farklı olmalıdır';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Yeşik ağın bir parçası olmalıdır';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Boşta bir IP adresi olmalıdır';
$L['valid_platform,dcrealm,differhostname,3'] = 'Sunucunun tam sınıflandırılmış etki alanı adından farklı olmalıdır';
$L['valid_starttls_urischeme'] = '"ldaps://" adres şeması ile çakışıyor';
$L['AdIpAddress_help1'] = 'Seçilmiş IP adresi şu 3 koşulu sağlamalıdır:';
$L['AdIpAddress_help2'] = 'IP adresi yeşil ağ ile aynı alt ağ aralığında olmalıdır: ${0}';
$L['AdIpAddress_help3'] = 'IP adresi kullanılmıyor olmalıdır';
$L['AdIpAddress_label'] = "Etki Alanı Denetleyicisinin IP adresi";
$L['CreateDomain_label'] = 'Etki alanı ekle';

$L['installSuccessAd_notification'] = 'Aktif Dizin yerel hesap hizmeti sağlayıcısı düzgün şekilde kuruldu';
$L['LocalAdProvider_header'] = '${0} için Aktif Dizin yerel hesap hizmeti sağlayıcısı';
$L['LocalAdProviderUninstall_label'] = 'Kaldır';
$L['LocalAdProviderDcChangeIp_header'] = 'Etki Alanı Denetleyicisinin IP adresini değiştir';
$L['LocalAdProviderDcChangeIp_label'] = 'IP değiştir';
$L['ChangeIPButton_label'] = 'IP değiştir';
$L['LocalAdProviderDcChangeIp_message1'] = 'Etki Alanı Denetleyicisinin IP adresinin değiştirilmesi Aktif Dizin istemcileri açısından sorunlara yol açabilir. İstemciler bir dış DNS sunucusu kullanıyorsa, ayarları yeni IP adresini kullanacakları şekilde güncelleyin.';
$L['dcChangeIpSuccess_notification'] = 'Etki Alanı Denetleyicisinin IP adresi değiştirildi';
$L['AdNsSambaRpmVersion_label'] = 'Samba Etki Alanı Denetçisi Sürümü';
