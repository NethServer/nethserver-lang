<?php

$L['Account_Title'] = 'Корисници и групе';
$L['Account_Description'] = 'Управљај корисницима и групама, подеси доменски идентитет и добављаче аутентификације';
$L['Account_Tags'] = 'сссд корисник група царство домен налог креберос лдап';
$L['Select_Title'] = 'Избор позадинског сервиса';

$L['AuthProvider_header'] = 'Одабери добављача корисника и група за домен "${0}"';
$L['Provider_none_label'] = 'Ништа (онемогућено)';
$L['Provider_ldap_label'] = 'ЛДАП';
$L['Provider_ad_label'] = 'Активни директоријум';
$L['AdDns_label'] = 'ИП адреса ДНС сервера';
$L['LdapUri_label'] = 'ИП адреса сервера';
$L['BindProvider_label'] = 'Везати';
$L['NetbiosDomain_label'] = 'НетБИОС домен';

$L['login_label'] = 'Привилеговано корисничко име';
$L['password_label'] = 'Лозинка';
$L['Join_label'] = 'Придружи';
$L['Authenticate_header'] = 'Придружи домену АД са привилегованим корисничким креденцијалима';

$L['NoConfig_header'] = 'Домен ${0}';

$L['AccountProvider_Error_22'] = 'Account provider error: invalid DN. Check Base DN, Groups DN and Users DN in Accounts provider configuration';
$L['AccountProvider_Error_32'] = 'Грешка пружаоца налога: нема уноса. Провери ЛДАП бинд креденцијале и Базни ДН у подешавањима пружаоца Налога';
$L['AccountProvider_Error_34'] = 'Account provider error: invalid machine password. Check the server is correctly joined to a domain';
$L['AccountProvider_Error_49'] = 'Грешка пружаоца налога: погрешни креденцијали (${0})';
$L['AccountProvider_Error_49_710'] = 'Недовољна права приступа (49/710): наведите алтернативне ЛДАП бинд креденцијале у подешавањима пружаоца Налога';
$L['AccountProvider_Error_4'] = 'Упозорење пружаоца налога: достигнуто ограничење величине (${0})';
$L['AccountProvider_Error_104'] = 'Account provider connection reset by peer: check if the server supports SSL/TLS connections';
$L['AccountProvider_Error_110'] = 'Конекција пружаоца налога је истекла';
$L['AccountProvider_Error_111'] = 'Конекција пружаоца налога је одбијена';

$L['valid_platform,ad-dns,srv_record,1'] = 'Чини се да није домен контролер Активног директоријума';

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