<?php

$L['Account_Title'] = 'Gebruikers en groepen';
$L['Account_Description'] = 'Beheer gebruikers en groepen, configureer het domein en authenticatie providers';
$L['Account_Tags'] = 'sssd gebruiker groep realm domein account kerberos ldap';
$L['Select_Title'] = 'Backend keuze';

$L['AuthProvider_header'] = 'Selecteer de gebruikers en groepen provider voor domain "${0}"';
$L['Provider_none_label'] = 'Geen (uitgeschakeld)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'DNS server IP adres';
$L['LdapUri_label'] = 'Server IP adres';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS domein';

$L['login_label'] = 'gebruikersnaam met admin rechten';
$L['password_label'] = 'Wachwoord';
$L['Join_label'] = 'Toevoegen';
$L['Authenticate_header'] = 'Voeg toe aan het AD domein met admin gebruikers rechten';

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

$L['valid_platform,ad-dns,srv_record,1'] = 'Lijkt geen Active Directory domein controller te zijn';

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