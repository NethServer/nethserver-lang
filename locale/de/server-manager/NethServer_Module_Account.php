<?php

$L['Account_Title'] = 'Benutzer und Gruppen';
$L['Account_Description'] = 'Verwalte Benutzer und Gruppen, konfiguriere die Domäne sowie Authentifizierungsanbieter';
$L['Account_Tags'] = 'sssd user group realm domain account kerberos ldap benutzer gruppen domäne konto konten';
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

$L['NoConfig_header'] = 'Domain ${0}';

$L['AccountProvider_Error_22'] = 'Account provider error: invalid DN. Check Base DN, Groups DN and Users DN in Accounts provider configuration';
$L['AccountProvider_Error_32'] = 'Account provider error: no entries found. Check the LDAP bind credentials and Base DN in Accounts provider configuration';
$L['AccountProvider_Error_34'] = 'Account provider error: invalid machine password. Check the server is correctly joined to a domain';
$L['AccountProvider_Error_49'] = 'Account provider error: invalid credentials (${0})';
$L['AccountProvider_Error_49_710'] = 'Insufficent access rights (49/710): specify alternative LDAP bind credentials in Accounts provider configuration';
$L['AccountProvider_Error_4'] = 'Account provider warning: size limit exceeded (${0})';
$L['AccountProvider_Error_104'] = 'Account provider connection reset by peer: check if the server supports SSL/TLS connections';
$L['AccountProvider_Error_110'] = 'Account provider connection timed out';
$L['AccountProvider_Error_111'] = 'Account provider connection refused';

$L['valid_platform,ad-dns,srv_record,1'] = 'Dies scheint kein Active Directory Domain Controller zu sein';
