<?php

$L['SssdConfig_Title'] = 'Поставщик учетных записей';
$L['SssdConfig_Description'] = 'Настройка пользователей и групп поставщика учетных записей домена';
$L['SssdConfig_Tags'] = 'sssd домен учетная запись группа LDAP kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Не удалось найти контроллер домена Active Directory';

$L['Select_Title'] = 'Выбор бэкэнда';

$L['LdapUri_label'] = 'URI LDAP-сервера';
$L['BindProvider_label'] = 'Привязка';
$L['NetbiosDomain_label'] = 'NetBIOS-домен';

$L['login_label'] = 'Имя привилегированного пользователя';
$L['password_label'] = 'Пароль';
$L['Join_label'] = 'Присоединиться';
$L['Authenticate_header'] = 'Присоединение к домену AD с учетными данными привилегированного пользователя';

$L['Wizard_header'] = 'Настройка пользователей и групп для домена ${0}';
$L['Local_header'] = 'Установка локального поставщика учетных данных';
$L['Install_label'] = 'Установить';
$L['Bind_label'] = 'Привязать';


$L['ChooseProvider_general'] = 'Пользователи и группы предоставляются поставщиком учетных записей. Вы можете подключить этот сервер к удаленному поставщику учетных записей или установить локальный. Доступность некоторых функций зависит от типа поставщика учетных записей.';
$L['ChooseProvider_ldap'] = 'Прост в настройке, не поддерживает проверку подлинности при доступе к общим папкам';
$L['ChooseProvider_ad'] = 'Включает все возможности общих папок, требует расширенной настройки';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Поставщик учётных записей Active Directory';
$L['Ldap_header'] = 'Поставщик учётных записей LDAP';
$L['ChooseAd_general'] = 'Компьютер в домене AD может быть членом домена или контроллером домена (DC)';
$L['ChooseAd_joinmember'] = 'Стать членом существующего домена';
$L['ChooseAd_joindc'] = 'Стать DC существующего домена';
$L['ChooseAd_newforest'] = 'Инициализировать новый домен и стать DC';
$L['configAdJoinMember_label'] = 'Присоединиться к домену';
$L['configAdJoinDc_label'] = 'Добавить DC в домен';
$L['configAdNewDomain_label'] = 'Создать новый домен';

$L['LocalLdapProvider_header'] = 'Локальный поставщик учетных записей LDAP для ${0}';
$L['RemoteLdapProvider_header'] = 'Удаленный поставщик учетных записей LDAP для ${0}';
$L['ChooseLdap_general'] = 'База данных LDAP может хранить пользователей, группы и пароли. Требуется LDAP-схема совместимая с RFC2307.';
$L['ChooseLdap_remote'] = 'Привязать к удаленному LDAP-серверу';
$L['ChooseLdap_local'] = 'Установить OpenLDAP-сервер';
$L['configLdapRemote_label'] = 'Привязать к удаленному';
$L['configLdapLocal_label'] = 'Установить локально';

$L['LdapRemoteIpAddress_label'] = 'Имя хоста или IP';
$L['LdapRemoteTcpPort_label'] = 'TCP-порт';
$L['LdapRemoteIp_header'] = 'Привязка к удаленному LDAP-серверу';
$L['LdapRemoteBind_label'] = 'Проверка';
$L['probeLdapSuccess_warning'] = 'Просмотрите и сохраните параметры LDAP для завершения настройки';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Ошибка подключения к серверу или неверный порт службы';

$L['BindType_anonymous_label'] = 'Анонимная привязка';
$L['BindType_authenticated_label'] = 'Привязка с учетными данными';
$L['BindType_label'] = 'Учётные данные для LDAP-приложений';
$L['valid_adldapcredentials_required'] = 'Заполните поля "Имя для привязки (Bind DN)" и "Пароль для привязки"';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Неверные учетные данные LDAP';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'Ошибка соединения с LDAP';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN не найдена или недостаточно прав';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Неверный синтаксис DN';
$L['BindDN_label'] = 'Имя для привязки (Bind DN)';
$L['BindPassword_label'] = 'Пароль для привязки';

$L['BaseDN_label'] = 'База для поиска (Base DN)';
$L['UserDN_label'] = 'Пользователь (User DN)';
$L['GroupDN_label'] = 'Группа (Group DN)';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'По умолчанию';
$L['starttls_enabled'] = 'Да';
$L['starttls_disabled'] = 'Нет';

$L['LdapLocalInstall_header'] = 'Установить OpenLDAP-сервер';
$L['LdapLocalInstall_message'] = 'Скачать сервер OpenLDAP и настроить его в качестве локального поставщика учетных записей LDAP';
$L['LocalLdapProviderUninstall_label'] = 'Удалить';

$L['LocalProviderUninstall_header'] = 'Удаление локального поставщика учетных записей';
$L['LocalProviderUninstall_message'] = 'Эта операция необратима. Домашние каталоги не будут удалены, но все пользователи, пароли, группы и учетные записи компьютеров будут потеряны!';
$L['UninstallButton_label'] = 'Удалить';
$L['installSuccessLdap_notification'] = 'Локальный поставщик учётных записей OpenLDAP был установлен правильно';

$L['uninstallSuccess_notification'] = 'Локальный поставщик учётных записей был удалён';
$L['unbindSuccess_notification'] = 'Удалённый поставщик учётных записей был отвязан';

$L['LocalLdapProviderUpgrade_label'] = 'Обновить до Active Directory';
$L['LocalLdapUpgrade_header'] = 'Обновить до Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Эта операция необратима! База данных LDAP может быть обновлена до локального поставщика учетных записей Active Directory';
$L['LocalLdapUpgrade_PDC_message1'] = 'Пользователи, пароли, группы и учётные записи компьютеров сохраняются. Для подключения к общим папкам могут потребоваться другие учётные данные!';
$L['LocalLdapUpgrade_PDC_message2'] = 'При подключении к общей папке NetBIOS-имя домена либо должно быть префиксом к имени пользователя (напр.: "MYDOMAIN\username"), либо должно быть вставлено в соответствующее поле формы.';
$L['LocalLdapUpgrade_WS_message1'] = 'Пользователи, пароли и группы сохраняются; однако для подключения к общей папке требуются другие учётные данные!';
$L['LocalLdapUpgrade_WS_message2'] = 'При подключении к общей папке NetBIOS-имя домена либо должно быть префиксом к имени пользователя (напр.: "MYDOMAIN\username"), либо должно быть вставлено в соответствующее поле формы.';
$L['LdapUpgradeButton_label'] = 'Обновить';
$L['canUpgradeToSamba_notification'] = 'Локальный поставщик учётных записей LDAP может быть обновлён до Samba Active Directory';

$L['AdJoinMember_header'] = 'Присоединиться к Active Directory в качестве нового члена';
$L['AdDns_label'] = 'DNS-сервер AD';
$L['AdRealm_label'] = 'DNS-имя домена';
$L['AdWorkgroup_label'] = 'NetBIOS-имя домена';
$L['AdJoinMemberCredentials_label'] = 'Учётные данные для присоединения к домену';
$L['AdUsername_label'] = 'Имя пользователя';
$L['AdPassword_label'] = 'Пароль';
$L['AdJoinMember_label'] = 'Присоединиться';

$L['RemoteAdProvider_header'] = 'Удаленный поставщик учётных записей Active Directory для ${0}';
$L['AdNewDomain_header'] = 'Создать новый домен Active Directory';
$L['AdJoinMemberError_label'] = 'Ошибка присоединения к Active Directory (${0})';
$L['Save_label'] = 'Сохранить';
$L['RemoteProviderUnbind_label'] = 'Отвязка...';
$L['RemoteProviderUnbind_header'] = 'Отвязка поставщика учётных записей';
$L['RemoteProviderUnbind_message'] = 'Все учётные записи пользователей и групп, определённые удалённым поставщиком станут недоступны.';
$L['UnbindButton_label'] = 'Отвязать';
$L['bindAdSuccess_notification'] = 'Домен Active Directory ${0} был присоединён';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Должно быть отличным от 127.0.0.1 или любого другого IP-адреса, используемого сервером';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Должен быть частью зелёной сети';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Должен быть свободным IP-адресом';
$L['valid_platform,dcrealm,differhostname,3'] = 'Должно отличаться от FQDN хоста';
$L['valid_starttls_urischeme'] = 'Конфликтует с URI-схемой \'ldaps://\'';
$L['AdIpAddress_help1'] = 'Выбранный IP-адрес должен удовлетворять нижеуказанным условиям:';
$L['AdIpAddress_help2'] = 'IP-адрес должен быть в той же подсети, что и зелёная сеть: ${0}';
$L['AdIpAddress_help3'] = 'IP-адрес не должен использоваться в текущий момент';
$L['AdIpAddress_label'] = "IP-адрес контроллера домена";
$L['CreateDomain_label'] = 'Создать домен';

$L['installSuccessAd_notification'] = 'Локальный поставщик учётных записей Active Directory был установлен правильно';
$L['LocalAdProvider_header'] = 'Локальный поставщик учётных записей Active Directory для ${0}';
$L['LocalAdProviderUninstall_label'] = 'Удалить';
$L['LocalAdProviderDcChangeIp_header'] = 'Изменить IP-адрес контроллера домена';
$L['LocalAdProviderDcChangeIp_label'] = 'Изменить IP';
$L['ChangeIPButton_label'] = 'Изменить IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Изменение IP-адреса контроллера домена может вызвать проблемы у клиентов Active Directory. Если они используют внешний DNS-сервер, то перенастройте их на использование нового IP-адреса.';
$L['dcChangeIpSuccess_notification'] = 'IP-адрес контроллера домена изменён';
$L['AdNsSambaRpmVersion_label'] = 'Версия Samba DC';
