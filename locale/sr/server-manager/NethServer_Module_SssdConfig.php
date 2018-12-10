<?php

$L['SssdConfig_Title'] = 'Пружалац налога';
$L['SssdConfig_Description'] = 'Подеси корисника и групе пружаоца налога домена';
$L['SssdConfig_Tags'] = 'сссд домен налог корисник група лдап креберос активни директоријум';

$L['valid_platform,ad-dns,srv_record,1'] = 'Не могу наћи ни један домен контролер Активног Директоријума';

$L['Select_Title'] = 'Избор позадинског сервиса';

$L['LdapUri_label'] = 'ЛДАП линк сервера';
$L['BindProvider_label'] = 'Везати';
$L['NetbiosDomain_label'] = 'НетБИОС домен';

$L['login_label'] = 'Привилеговано корисничко име';
$L['password_label'] = 'Лозинка';
$L['Join_label'] = 'Придружи';
$L['Authenticate_header'] = 'Придружи домену АД са привилегованим корисничким креденцијалима';

$L['Wizard_header'] = 'Подеси кориснике и групе за домен ${0}';
$L['Local_header'] = 'Инсталирај локалног пружаоца налога';
$L['Install_label'] = 'Инсталирај';
$L['Bind_label'] = 'Везати';


$L['ChooseProvider_general'] = 'Корисници и групе су доступни кроз пружаоца налога. Можете повезати овај сервер на удаљеног пружаоца налога, или инсталирати један локално. Нека својства су доступна у зависности од типа пружаоца налога.';
$L['ChooseProvider_ldap'] = 'Лак за подешавање, не подржава аутентификовани приступ дељеним фолдерима';
$L['ChooseProvider_ad'] = 'Омогућава све каратеристике дељених фолдера, захтева напредне опције подешавања';
$L['configAd_label'] = 'Активни директоријум';
$L['configLdap_label'] = 'ЛДАП';

$L['Ad_header'] = 'Пружаоц налога Активног Директоријума';
$L['Ldap_header'] = 'ЛДАП пружаоц налога';
$L['ChooseAd_general'] = 'Рачунари у Активном Д';
$L['ChooseAd_joinmember'] = 'Постани члан постојећег домена';
$L['ChooseAd_joindc'] = 'Постани ДЦ постојећег домена';
$L['ChooseAd_newforest'] = 'Иницијализуј нови домен и постани ДЦ';
$L['configAdJoinMember_label'] = 'Учлани у домен';
$L['configAdJoinDc_label'] = 'Додај ДЦ у домен';
$L['configAdNewDomain_label'] = 'Креирај нови домен';

$L['LocalLdapProvider_header'] = 'ЛДАП пружаоц локалних налога за ${0}';
$L['RemoteLdapProvider_header'] = 'ЛДАП пружаоц удаљених налога за ${0}';
$L['ChooseLdap_general'] = 'ЛДАП може чувати кориснике, групе и лозинке. То је захтевано по РФЦ2307 компатибилној ЛДАП шеми.';
$L['ChooseLdap_remote'] = 'Повежи на удаљени ЛДАП сервер';
$L['ChooseLdap_local'] = 'Инсталирај ОпенЛДАП сервер';
$L['configLdapRemote_label'] = 'Повежи даљински';
$L['configLdapLocal_label'] = 'Инсталирај локално';

$L['LdapRemoteIpAddress_label'] = 'Име домаћина или ИП';
$L['LdapRemoteTcpPort_label'] = 'ТЦП порт';
$L['LdapRemoteIp_header'] = 'Повежи на удаљени ЛДАП сервер';
$L['LdapRemoteBind_label'] = 'Провери подешавање';
$L['probeLdapSuccess_warning'] = 'Прегледај и сачувај ЛДАП подешавања да завршите конфигурисање';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Грешка конекције ка сервру или погрешан порт сервиса';

$L['BindType_anonymous_label'] = 'Анонимно везивање';
$L['BindType_authenticated_label'] = 'Аутентификовано везивање';
$L['BindType_label'] = 'Креденцијали аутентификације за ЛДАП апликације';
$L['valid_adldapcredentials_required'] = 'Set BindDN and BindPassword fields';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Invalid LDAP credentials';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'LDAP connection error';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN was not found or insufficient rights';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Invalid DN syntax';
$L['BindDN_label'] = 'Везани ДН';
$L['BindPassword_label'] = 'Лозинка везивања';

$L['BaseDN_label'] = 'Базни ДН';
$L['UserDN_label'] = 'Кориснички ДН';
$L['GroupDN_label'] = 'Групни ДН';

$L['StartTls_label'] = 'СТАРТТЛС';
$L['starttls_auto'] = 'Подразумевано';
$L['starttls_enabled'] = 'Да';
$L['starttls_disabled'] = 'Не';

$L['LdapLocalInstall_header'] = 'Инсталирај ОпенЛДАП сервер';
$L['LdapLocalInstall_message'] = 'Преузми и конфигуриши ОпенЛДАП сервер као локалног ЛДАП пружаоца налога';
$L['LocalLdapProviderUninstall_label'] = 'Деинсталирај';

$L['LocalProviderUninstall_header'] = 'Деинсталирај локалног пружаоца налога';
$L['LocalProviderUninstall_message'] = 'Ова операција је неповратна. Матични директоријуми нису обрисани, али сви корисници, лозинке, групе и други рачунарски налози ће бити изгубљени!';
$L['UninstallButton_label'] = 'Деинсталирај';
$L['installSuccessLdap_notification'] = 'OpenLDAP пружаоц услуга налога је исправно исталиран';

$L['uninstallSuccess_notification'] = 'Локални пружаоц услуга налога је успешно уклоњен';
$L['unbindSuccess_notification'] = 'Удаљени пружаоц услуга налога је успешно развезан';

$L['LocalLdapProviderUpgrade_label'] = 'Ажурирај на Активни Директоријум';
$L['LocalLdapUpgrade_header'] = 'Ажурирај на Активни Директоријум';
$L['LocalLdapUpgrade_message1'] = 'Ова операција је неповратна! ЛДАП база може бити ажурирана на локалног пружаоца налога Активног Директоријума.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Корисници, лозинке, групе и други рачунарски налози су сачувани. Конекције ка дељеним директоријумима захтевају другачије креденцијале!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Када се конектује на дељени директоријум, NetBIOS доменско име мора бити или са додатком корисничког имена (нпр. "МОЈДОМЕН\корисникчкоиме"), или мора бити унето у наведено поље форме.';
$L['LocalLdapUpgrade_WS_message1'] = 'Корисници, групе и лозинке су сачуване; али конекције ка дељеним директоријумима захтевају другачије креденцијале!';
$L['LocalLdapUpgrade_WS_message2'] = 'Када се конектује на дељени директоријум, NetBIOS доменско име мора бити или са додатком корисничког имена (нпр. "МОЈДОМЕН\корисникчкоиме"), или мора бити унето у наведено поље форме.';
$L['LdapUpgradeButton_label'] = 'Ажурирај';
$L['canUpgradeToSamba_notification'] = 'Локални ЛДАП пружаоц налога може бити ажуриран на Самба Активни Директоријум';

$L['AdJoinMember_header'] = 'Придружи Активном Директоријуму као новог члана';
$L['AdDns_label'] = 'АД ДНС сервер';
$L['AdRealm_label'] = 'ДНС име домена';
$L['AdWorkgroup_label'] = 'НетБИОС име домена';
$L['AdJoinMemberCredentials_label'] = 'Креденцијали за учлањење у домен';
$L['AdUsername_label'] = 'Корисничко име';
$L['AdPassword_label'] = 'Лозинка';
$L['AdJoinMember_label'] = 'Придружи';

$L['RemoteAdProvider_header'] = 'Пружаоц удањених налога за Активни директоријум за ${0}';
$L['AdNewDomain_header'] = 'Креирајте нови домен Активног Директоријума';
$L['AdJoinMemberError_label'] = 'Неуспешно придруживање Активном директоријуму (${0})';
$L['Save_label'] = 'Сачувај';
$L['RemoteProviderUnbind_label'] = 'Развежи...';
$L['RemoteProviderUnbind_header'] = 'Развежи пужаоце налога';
$L['RemoteProviderUnbind_message'] = 'Сви кориснички или групни налози креирани од стране удаљеног пружаоца налога неће бити више доступни.';
$L['UnbindButton_label'] = 'Развежи';
$L['bindAdSuccess_notification'] = 'Домен Активног Директоријума ${0} је успешно придружен';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Мора бити различито од 127.0.0.1 или било које друге ИП адресе коју користи сервер';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Мора бити део зелене мреже';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Мора бити слободна ИП адреса';
$L['valid_platform,dcrealm,differhostname,3'] = 'Must differ from the host FQDN';
$L['valid_starttls_urischeme'] = 'Конфликт са "ldaps://" УРЛ шемом';
$L['AdIpAddress_help1'] = 'Изабрана ИП адреса мора да задовољи све доле наведено услове:';
$L['AdIpAddress_help2'] = 'ИП адреса мора бити у опсегу исте подмреже у зеленој мрежи: ${0}';
$L['AdIpAddress_help3'] = 'ИП адреса мора бити неупотребљена тренутно';
$L['AdIpAddress_label'] = "ИП адреса Доменског контролера";
$L['CreateDomain_label'] = 'Креирај домен';

$L['installSuccessAd_notification'] = 'Активни директоријум пружаоц услуга налога је исправно исталиран';
$L['LocalAdProvider_header'] = 'Пружаоц локалних налога за Активни директоријум за ${0}';
$L['LocalAdProviderUninstall_label'] = 'Деинсталирај';
$L['LocalAdProviderDcChangeIp_header'] = 'Change IP address of Domain Controller';
$L['LocalAdProviderDcChangeIp_label'] = 'Change IP';
$L['ChangeIPButton_label'] = 'Change IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Changing the Domain Controller IP address can cause problems to Active Directory clients. If they use an external DNS server, update it to use the new IP address.';
$L['dcChangeIpSuccess_notification'] = 'Domain Controller IP address successfully changed';
$L['AdNsSambaRpmVersion_label'] = 'Samba DC version';
