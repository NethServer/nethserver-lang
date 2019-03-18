<?php

$L['Pki_Title'] = 'Сертификат сервера';
$L['Pki_Description'] = 'Управление TLS/SSL сертификатами сервера';
$L['Pki_Tags'] = 'SSL сертификат PKI TLS X509 X.509';

$L['C_label'] = 'Код страны';
$L['ST_label'] = 'Область';
$L['L_label'] = 'Город';
$L['O_label'] = 'Организация';
$L['OU_label'] = 'Подразделение';
$L['CN_label'] = 'Общее имя (CN)';
$L['EmailAddress_label'] = 'Адрес эл.почты';
$L['SubjectAltName_label'] = 'Дополнительные имена';
$L['CertificateDuration_label'] = 'Срок действия сертификата (дней)';
$L['valid_hostname_instance'] = '"${0}" - неверное имя машины';
$L['valid_x509_field'] = 'Не должно содержать "," и "/"';

$L['Generate_label'] = 'Редактировать самоподписанный сертификат';
$L['Upload_label'] = 'Загрузить сертификат';
$L['GenerateLe_label'] = 'Запросить сертификат Let\'s Encrypt';

$L['GenerateLe_Header'] = 'Запросить новый сертификат Let\'s Encrypt';
$L['Generate_Header'] = 'Редактировать самоподписанный сертификат';
$L['Upload_Header'] = 'Загрузка файла сертификата на сервер';

$L['Show_label'] = 'Показать';
$L['Show_header'] = 'Показать сертификат ${0}';
$L['SetDefault_label'] = 'Установить по умолчанию';

$L['Key_label'] = 'Название';
$L['Issuer_label'] = 'Издатель';
$L['ExpireDate_label'] = 'Истекает';
$L['Actions_label'] = 'Действия';
$L['Default_label'] = 'По умолчанию';
$L['Confirm_label'] = 'Подтвердить';
$L['default_cert_label'] = 'Установить выбранный сертификат по умолчанию?';
$L['certificate_label'] = 'Сертификат';

$L['LetsEncryptMail_label'] = 'Электронная почта для уведомлений';
$L['LetsEncryptDomains_label'] = 'Домены';

$L['UploadCrt_label'] = 'Сертификат';
$L['UploadKey_label'] = 'Закрытый ключ';
$L['UploadChain_label'] = 'Промежуточный сертификат (необязательно)';
$L['UploadName_label'] = 'Название';

$L['valid_platform,pem-certificate,pem-certificate,1'] = 'Сертификат X.509 (кодировка PEM)';
$L['valid_platform,rsa-key,rsa-key,1'] = 'Закрытый ключ RSA или EC (кодировка PEM)';
$L['vaild_UploadName_file_exists'] = 'Файл уже существует';
$L['cert_safetyguard_label'] = 'Выбор сертификата по умолчанию';
$L['valid_platform,tlspolicy-safetyguard,tlspolicy-ecdsa-cert,3'] = 'Выбранный ECC-сертификат не совместим с текущей политикой TLS';