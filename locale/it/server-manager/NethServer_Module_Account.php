<?php

$L['Account_Title'] = 'Utenti e gruppi';
$L['Account_Description'] = 'Gestisci utenti e gruppi, configura l\'identità di dominio e i fornitori di autenticazione';
$L['Account_Tags'] = 'sssd user group realm domain account kerberos ldap dominio';
$L['Select_Title'] = 'Scelta backend';

$L['AuthProvider_header'] = 'Seleziona il fornitore di autenticazione per il dominio "${0}"';
$L['Provider_none_label'] = 'Nessuno (disabilitato)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'Indirizzo IP del server DNS';
$L['LdapUri_label'] = 'Indirizzo IP server';
$L['BindProvider_label'] = 'Collega';
$L['NetbiosDomain_label'] = 'Dominio NetBIOS';

$L['login_label'] = 'Nome utente privilegiato';
$L['password_label'] = 'Password';
$L['Join_label'] = 'Join';
$L['Authenticate_header'] = 'Join al dominio AD con credenziali utente privilegiato';

$L['NoConfig_header'] = 'Dominio ${0}';

$L['AccountProvider_Error_22'] = 'Account provider error: invalid DN. Check Base DN, Groups DN and Users DN in Accounts provider configuration';
$L['AccountProvider_Error_32'] = 'Errore account provider: nessun risultato trovato. Controllare le credenziali per il bind LDAP e il Base DN nella configurazione di Account provider';
$L['AccountProvider_Error_34'] = 'Account provider error: invalid machine password. Check the server is correctly joined to a domain';
$L['AccountProvider_Error_49'] = 'Errore account provider: credenziali non valide (${0})';
$L['AccountProvider_Error_49_710'] = 'Diritti di accesso non sufficienti (49/710): specificare delle credenziali alternative per il bind LDAP nella configurazione Account provider';
$L['AccountProvider_Error_4'] = 'Avviso Account provider: limite di dimensione superato (${0})';
$L['AccountProvider_Error_104'] = 'Account provider connection reset by peer: check if the server supports SSL/TLS connections';
$L['AccountProvider_Error_110'] = 'Time out della connessione con l\'Account provider';
$L['AccountProvider_Error_111'] = 'Connessione rifiutata con l\'Account provider';

$L['valid_platform,ad-dns,srv_record,1'] = 'Non sembra essere un controller di dominio Active Directory';
