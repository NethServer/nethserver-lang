<?php

$L['Account_Title'] = 'Uživatelé a skupiny';
$L['Account_Description'] = 'Manage users and groups, configure the domain identity and authentication providers';
$L['Account_Tags'] = 'sssd user group realm domain account kerberos ldap';
$L['Select_Title'] = 'Volba podpůrné vrstvy (backend)';

$L['AuthProvider_header'] = 'Select the users and groups provider of domain "${0}"';
$L['Provider_none_label'] = 'Žádné (vypnuto)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'IP adresa jmenného (DNS) serveru';
$L['LdapUri_label'] = 'IP adresa serveru';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS doména';

$L['login_label'] = 'Privilegované uživatelské jméno';
$L['password_label'] = 'Heslo';
$L['Join_label'] = 'Připojit';
$L['Authenticate_header'] = 'Připojit k doméně Active Directory s pověřeními privilegovaného uživatele';

$L['NoConfig_header'] = 'Domain ${0}';

$L['AccountProvider_Error_32'] = 'Account provider error: no entries found. Check the LDAP bind credentials and Base DN in Accounts provider configuration';
$L['AccountProvider_Error_49'] = 'Account provider error: invalid credentials (${0})';
$L['AccountProvider_Error_49_710'] = 'Insufficent access rights (49/710): specify alternative LDAP bind credentials in Accounts provider configuration';
$L['AccountProvider_Error_4'] = 'Account provider warning: size limit exceeded (${0})';
$L['AccountProvider_Error_110'] = 'Account provider connection timed out';
$L['AccountProvider_Error_111'] = 'Account provider connection refused';

$L['valid_platform,ad-dns,srv_record,1'] = 'Nezdá se být řadičem domény Active Directory';
