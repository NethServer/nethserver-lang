<?php

$L['SssdConfig_Title'] = 'Hesap hizmeti sağlayıcısı';
$L['SssdConfig_Description'] = 'Hesap hizmeti sağlayıcısı üzerindeki kullanıcı ve grup ayarları';
$L['SssdConfig_Tags'] = 'sssd etki alanı hesap kullanıcı grup ldap kerberos aktif dizin';

$L['valid_platform,ad-dns,srv_record,1'] = 'Herhangi bir aktif dizin etki alanı denetçisi bulunamadı';

$L['Select_Title'] = 'Yönetim seçimi';

$L['LdapUri_label'] = 'LDAP sunucu adresi';
$L['BindProvider_label'] = 'Bağlan';
$L['NetbiosDomain_label'] = 'NetBIOS etki alanı';

$L['login_label'] = 'Ayrıcalıklı kullanıcı adı';
$L['password_label'] = 'Parola';
$L['Join_label'] = 'Katıl';
$L['Authenticate_header'] = 'Aktif dizin etki alanına yetkili kullanıcı kimlik doğrulama bilgileri ile katıl';

$L['Wizard_header'] = '${0} etki alanı için kullanıcı ve grupları ayarla';
$L['Local_header'] = 'Bir yerel hesap hizmeti sağlayıcı kurun';
$L['Install_label'] = 'Kur';
$L['Bind_label'] = 'Bağlan';


$L['ChooseProvider_general'] = 'Kullanıcı ve gruplar bir hesap hizmeti sağlayıcı üzerinden kullanılır. Bu sunucuyu uzak hesap hizmeti sağlayıcısına bağlayabilir ya da yeni bir yerel hesap hizmeti sağlayıcısı kurabilirsiniz. Bazı özellikler hizmet sağlayıcı türüne bağlı olarak kullanılabilir ya da kullanılamaz.';
$L['ChooseProvider_ldap'] = 'Ayarlaması kolay, paylaşılmış klasörlere kimlik doğrulaması ile erişimi desteklemez';
$L['ChooseProvider_ad'] = 'Tüm paylaşılmış klasör özelliklerini etkinleştirir, gelişmiş yapılandırma ayarlarının yapılması gerekir';
$L['configAd_label'] = 'Aktif dizin';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Aktif dizin hesap hizmeti sağlayıcısı';
$L['Ldap_header'] = 'LDAP hesap hizmeti sağlayıcısı';
$L['ChooseAd_general'] = 'Aktif dizin etki alanındaki bilgisayarlar basit üyesi ya da etki alanı denetçisi (DC) olabilir';
$L['ChooseAd_joinmember'] = 'Var olan bir etki alanının üyesi ol';
$L['ChooseAd_joindc'] = 'Var olan bir etki alanı için DC ol';
$L['ChooseAd_newforest'] = 'Yeni etki alanını hazırla ve etki alanı denetçisi ol';
$L['configAdJoinMember_label'] = 'Bir etki alanına katıl';
$L['configAdJoinDc_label'] = 'Etki alanına denetçi ekle';
$L['configAdNewDomain_label'] = 'Yeni etki alanı ekle';

$L['LocalLdapProvider_header'] = '${0} için LDAP yerel hesap hizmeti sağlayıcısı';
$L['RemoteLdapProvider_header'] = '${0} için LDAP uzak hesap hizmeti sağlayıcısı';
$L['ChooseLdap_general'] = 'Bir LDAP veritabanında kullanıcılar, gruplar ve parolalar bulunur. RFC2307 LDAP şeması ile uyumlu olmalıdır.';
$L['ChooseLdap_remote'] = 'Uzak bir LDAP sunucusuna bağlan';
$L['ChooseLdap_local'] = 'Bir OpenLDAP sunucusu kur';
$L['configLdapRemote_label'] = 'Uzak sunucuya bağlan';
$L['configLdapLocal_label'] = 'Yerel olarak kur';

$L['LdapRemoteIpAddress_label'] = 'Sunucu adı ya da IP';
$L['LdapRemoteTcpPort_label'] = 'TCP kapı numarası';
$L['LdapRemoteIp_header'] = 'Uzak bir LDAP sunucusuna bağlan';
$L['LdapRemoteBind_label'] = 'Yapılandırmayı denetle';
$L['probeLdapSuccess_warning'] = 'Yapılandırmayı tamamlamak için LDAP ayarlarını gözden geçirip kaydedin';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Sunucuya bağlantı hatası ya da hizmet kapı numarası geçersiz';

$L['BindType_anonymous_label'] = 'Anonim bağlantı';
$L['BindType_authenticated_label'] = 'Kimlik doğrulamalı bağlantı';
$L['BindType_label'] = 'LDAP uygulamaları için kimlik doğrulama bilgileri';
$L['valid_adldapcredentials_required'] = 'Bağlantı etki alanı adı ve bağlantı parolası alanlarını doldurun';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'LDAP kimlik doğrulama bilgileri geçersiz';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'LDAP bağlantı hatası';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Temel etki alanı adı bulunamadı ya da izinler yetersiz';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Etki alanı adı söz dizimi hatalı';
$L['BindDN_label'] = 'Bağlantı etki alanı adı (Bind DN)';
$L['BindPassword_label'] = 'Bağlantı parolası';

$L['BaseDN_label'] = 'Temel etki alanı adı (Base DN)';
$L['UserDN_label'] = 'Kullanıcı etki alanı adı (User DN)';
$L['GroupDN_label'] = 'Grup etki alanı adı (Group DN)';

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

$L['LocalLdapProviderUpgrade_label'] = 'Aktif dizine yükselt';
$L['LocalLdapUpgrade_header'] = 'Aktif dizine yükselt';
$L['LocalLdapUpgrade_message1'] = 'Bu işlem geri alınamaz! LDAP veritabanı bir yerel aktif dizin hesap hizmeti sağlayıcısına yükseltilebilir.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Kullanıcı, parola, grup ve bilgisayar hesapları korunur. Paylaşılmış klasör bağlantıları için farklı kimlik doğrulama bilgileri kullanılması gerekebilir!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Paylaşılmış bir klasöre bağlanılırken, NetBIOS etki alanı adı kullanıcı adının önüne (ETKIALANI\kullaniciadi gibi) ya da özel form alanına yazılmalıdır.';
$L['LocalLdapUpgrade_WS_message1'] = 'Kullanıcı, parola ve grup hesapları korunur. Paylaşılmış klasör bağlantıları için farklı kimlik doğrulama bilgileri kullanılması gerekebilir!';
$L['LocalLdapUpgrade_WS_message2'] = 'Paylaşılmış bir klasöre bağlanılırken, NetBIOS etki alanı adı kullanıcı adının önüne (ETKIALANI\kullaniciadi gibi) ya da özel form alanına yazılmalıdır.';
$L['LdapUpgradeButton_label'] = 'Yükselt';
$L['canUpgradeToSamba_notification'] = 'Yerel LDAP hesap hizmeti sağlayıcı Samba Aktif Dizinine yükseltilebilir';

$L['AdJoinMember_header'] = 'Aktif dizine yeni bir üye olarak katıl';
$L['AdDns_label'] = 'Aktif dizin DNS sunucusu';
$L['AdRealm_label'] = 'DNS etki alanı adı';
$L['AdWorkgroup_label'] = 'NetBIOS etki alanı adı';
$L['AdJoinMemberCredentials_label'] = 'Etki alanına katılmak için kimlik doğrulama bilgileri';
$L['AdUsername_label'] = 'Kullanıcı adı';
$L['AdPassword_label'] = 'Parola';
$L['AdJoinMember_label'] = 'Katıl';

$L['RemoteAdProvider_header'] = '${0} için aktif dizin uzak hesap hizmeti sağlayıcısı';
$L['AdNewDomain_header'] = 'Yeni bir aktif dizin etki alanı ekle';
$L['AdJoinMemberError_label'] = 'Aktif dizine katılma işlemi tamamlanamadı (${0})';
$L['Save_label'] = 'Kaydet';
$L['RemoteProviderUnbind_label'] = 'Bağlantıyı kes...';
$L['RemoteProviderUnbind_header'] = 'Hesap hizmeti sağlayıcı bağlantısını kes';
$L['RemoteProviderUnbind_message'] = 'Uzak hesap hizmeti sağlayıcısı tarafında tanımlanmış kullanıcı ve grup hesapları artık kullanılamayacak.';
$L['UnbindButton_label'] = 'Bağlantıyı kes';
$L['bindAdSuccess_notification'] = '${0} aktif dizin etki alanı katıldı';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = '127.0.0.1 ve sunucu tarafından kullanılan diğer IP adreslerinden farklı olmalıdır';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Yeşil ağın bir parçası olmalıdır';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Boşta bir IP adresi olmalıdır';
$L['valid_platform,dcrealm,differhostname,3'] = 'Sunucunun tam etki alanı adından farklı olmalıdır';
$L['valid_starttls_urischeme'] = '"ldaps://" adres şeması ile çakışıyor';
$L['AdIpAddress_help1'] = 'Seçilmiş IP adresi şu 3 koşulu sağlamalıdır:';
$L['AdIpAddress_help2'] = 'IP adresi yeşil ağ ile aynı alt ağ aralığında olmalıdır: ${0}';
$L['AdIpAddress_help3'] = 'IP adresi kullanılmıyor olmalıdır';
$L['AdIpAddress_label'] = "Etki alanı denetçisi IP adresi";
$L['CreateDomain_label'] = 'Etki alanı ekle';

$L['installSuccessAd_notification'] = 'Aktif dizin yerel hesap hizmeti sağlayıcısı düzgün şekilde kuruldu';
$L['LocalAdProvider_header'] = '${0} için aktif dizin yerel hesap hizmeti sağlayıcısı';
$L['LocalAdProviderUninstall_label'] = 'Kaldır';
$L['LocalAdProviderDcChangeIp_header'] = 'Etki alanı denetçisi IP adresini değiştir';
$L['LocalAdProviderDcChangeIp_label'] = 'IP değiştir';
$L['ChangeIPButton_label'] = 'IP değiştir';
$L['LocalAdProviderDcChangeIp_message1'] = 'Etki alanı denetçisi IP adresinin değiştirilmesi aktif dizin istemcileri açısından sorunlara yol açabilir. İstemciler bir dış DNS sunucusu kullanıyorsa, ayarları yeni IP adresini kullanacakları şekilde güncelleyin.';
$L['dcChangeIpSuccess_notification'] = 'Etki alanı denetçisi IP adresi değiştirildi';
$L['AdNsSambaRpmVersion_label'] = 'Samba etki alanı denetçisi sürümü';
