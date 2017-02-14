<?php

$L['Account_Title'] = 'Benutzer und Gruppen';
$L['Account_Description'] = 'Verwalte Benutzer und Gruppen, konfiguriere die Domäne sowie Authentifizierungsanbieter';
$L['Account_Tags'] = 'sssd Benutzer Gruppe Bereich Domäne Konto Kerberos LDAP';
$L['Select_Title'] = 'Backendwahl';

$L['AuthProvider_header'] = 'Wähle den Provider für Benutzer und Gruppen der Domäne "${0}"';
$L['Provider_none_label'] = 'Keiner (deaktiviert)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'DNS Server IP-Adresse';
$L['LdapUri_label'] = 'Server IP-Adresse';
$L['BindProvider_label'] = 'Verknüpfe';
$L['NetbiosDomain_label'] = 'NetBIOS Domäne';

$L['login_label'] = 'Priviligierter Benutzername';
$L['password_label'] = 'Passwort';
$L['Join_label'] = 'Beitreten';
$L['Authenticate_header'] = 'Trete der AD Domäne mit priviligierten Anmeldedaten bei';

$L['NoConfig_header'] = 'Domäne ${0}';

$L['AccountProvider_Error_22'] = 'Fehler im Accountprovider: Fehlerhafte DN. Überprüfe die Base DN, Groups DN und Users DN in der Accountprovider Konfiguration';
$L['AccountProvider_Error_32'] = 'Fehler im Accountprovider: Keine Einträge gefunden. Überprüfe die Zugangsdaten für das LDAP und die Base DN in der Accountprovider Konfiguration';
$L['AccountProvider_Error_34'] = 'Fehler im Accountprovider: Ungültiges Kennwort. Bitte überprüfe, ob der Server der Domäne ordnungsgemäß beigetreten ist.';
$L['AccountProvider_Error_49'] = 'Fehler im Accountprovider: Fehlerhafte Zugangsdaten (${0})';
$L['AccountProvider_Error_49_710'] = 'Nicht ausreichend Zugriffsrechte (49/710): Bitte ausreichend berechtigte LDAP Zugangsdaten in der Accountprovider Konfiguration angeben.';
$L['AccountProvider_Error_4'] = 'Warnung im Accountprovider: Maximalgröße erreicht (${0})';
$L['AccountProvider_Error_104'] = 'Accountprovider wurde durch die Gegenstelle zurückgesetzt. Bitte überprüfen, ob die Gegenstelle SSL/TLS-Verbindungen unterstützt.';
$L['AccountProvider_Error_110'] = 'Zeitüberschreitung der Verbindung zum Accountprovider';
$L['AccountProvider_Error_111'] = 'Verbindung zum Accountprovider wurde abgelehnt.';

$L['valid_platform,ad-dns,srv_record,1'] = 'Dies scheint kein Active Directory Domain Controller zu sein';

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