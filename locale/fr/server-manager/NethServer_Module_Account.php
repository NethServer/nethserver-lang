<?php

$L['Account_Title'] = 'Utilisateurs et groupes';
$L['Account_Description'] = '
';
$L['Account_Tags'] = 'sssd user group realm domain account kerberos ldap';
$L['Select_Title'] = 'Backend choice';

$L['AuthProvider_header'] = 'Select the users and groups provider of domain "${0}"';
$L['Provider_none_label'] = 'Aucun (Désactivé)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'Adresse IP du serveur DNS';
$L['LdapUri_label'] = 'Server IP address';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS domain';

$L['login_label'] = 'Nom d\'utilisateur privilégié ';
$L['password_label'] = 'Mot de passe';
$L['Join_label'] = 'Rejoindre';
$L['Authenticate_header'] = 'Join the AD domain with privileged user credentials';

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

$L['valid_platform,ad-dns,srv_record,1'] = 'Does not seem an Active Directory domain controller';
