<?php

$L['SssdConfig_Title'] = 'Account provider';
$L['SssdConfig_Description'] = 'Configura l\'Account provider degli utenti e gruppi di dominio';
$L['SssdConfig_Tags'] = 'sssd domain account user group ldap kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Impossibile trovare un controller di dominio Active Directory';

$L['Select_Title'] = 'Scelta backend';

$L['LdapUri_label'] = 'URI server LDAP';
$L['BindProvider_label'] = 'Collega';
$L['NetbiosDomain_label'] = 'Dominio NetBIOS';

$L['login_label'] = 'Nome utente privilegiato';
$L['password_label'] = 'Password';
$L['Join_label'] = 'Join';
$L['Authenticate_header'] = 'Join al dominio AD con credenziali utente privilegiato';

$L['Wizard_header'] = 'Configura utenti e gruppi per il dominio ${0}';
$L['Local_header'] = 'Installa un Account provider locale';
$L['Install_label'] = 'Installa';
$L['Bind_label'] = 'Collega';


$L['ChooseProvider_general'] = 'Utenti e gruppi sono disponibli attraverso un account provider. Si può collegare questo server a un account provider remoto oppure installarne uno locale.
Alcune funzionalità dipendono dal tipo di account provider.';
$L['ChooseProvider_ldap'] = 'Semplice da configurare, non supporta l\'autenticazione per le cartelle condivise';
$L['ChooseProvider_ad'] = 'Abilita tutte le funzioni delle cartelle condivise, richiede la configurazione di opzioni avanzate';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Account provider Active Directory';
$L['Ldap_header'] = 'Account provider LDAP';
$L['ChooseAd_general'] = 'I computer in un dominio Active Directory possono essere semplici membri o Domain Controller (DC)';
$L['ChooseAd_joinmember'] = 'Diventa membro di un dominio esistente';
$L['ChooseAd_joindc'] = 'Diventa DC di un dominio esistente';
$L['ChooseAd_newforest'] = 'Inizializza un nuovo dominio e diventa DC';
$L['configAdJoinMember_label'] = 'Join a un dominio';
$L['configAdJoinDc_label'] = 'Aggiungi un DC al dominio';
$L['configAdNewDomain_label'] = 'Crea un nuovo dominio';

$L['LocalLdapProvider_header'] = 'Account provider LDAP locale per ${0}';
$L['RemoteLdapProvider_header'] = 'Account provider LDAP remoto per ${0}';
$L['ChooseLdap_general'] = 'Un database LDAP può contenere utenti, gruppi e password. E\' necessario uno schema LDAP compatibile con RFC2307.';
$L['ChooseLdap_remote'] = 'Collega un server LDAP remoto';
$L['ChooseLdap_local'] = 'Installa il server OpenLDAP';
$L['configLdapRemote_label'] = 'Collega remotamente';
$L['configLdapLocal_label'] = 'Installa in locale';

$L['LdapRemoteIpAddress_label'] = 'Nome Host o IP';
$L['LdapRemoteTcpPort_label'] = 'Porta TCP';
$L['LdapRemoteIp_header'] = 'Collega un server LDAP remoto';
$L['LdapRemoteBind_label'] = 'Controlla configurazione';
$L['probeLdapSuccess_warning'] = 'Verificare e salvare i parametri LDAP per completare la configurazione.';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Errore di connessione o porta del servizio non valida';

$L['BindType_anonymous_label'] = 'Bind anonimo';
$L['BindType_authenticated_label'] = 'Bind autenticato';
$L['BindType_label'] = 'Credenziali bind in sola lettura';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Bind password';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'User DN';
$L['GroupDN_label'] = 'Group DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Default';
$L['starttls_enabled'] = 'Sì';
$L['starttls_disabled'] = 'No';

$L['LdapLocalInstall_header'] = 'Installa il server OpenLDAP';
$L['LdapLocalInstall_message'] = 'Scarica e configura OpenLDAP come account provider LDAP locale';
$L['LocalLdapProviderUninstall_label'] = 'Disinstalla';

$L['LocalProviderUninstall_header'] = 'Disinstalla un account provider locale';
$L['LocalProviderUninstall_message'] = 'Questa operazione non è reversibile. Le home directory non saranno eliminate, ma ogni utente, password, gruppo e computer account sarà perso!';
$L['UninstallButton_label'] = 'Disinstalla';
$L['installSuccessLdap_notification'] = 'L\'account provider OpenLDAP locale è stato installato correttamente';

$L['uninstallSuccess_notification'] = 'L\'account provider locale è stato correttamente rimosso';
$L['unbindSuccess_notification'] = 'L\'account provider remoto è stato correttamente scollegato';

$L['LocalLdapProviderUpgrade_label'] = 'Aggiorna a Active Directory';
$L['LocalLdapUpgrade_header'] = 'Aggiorna a Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Questa operazione non è reversibile! Il database LDAP può essere aggiornato all\'account provider locale Active Directory.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Utenti, password, gruppi e account computer sono preservati.
Il collegamento alle cartelle condivise potrebbe richiedere credenziali diverse!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Quando ci si collega ad una cartella condivisa, il nome dominio NetBIOS deve essere aggiunto come prefisso al nome utente (es. MYDOMAIN\username"), oppure inserito nell\'apposito campo dell\'interfaccia grafica.';
$L['LocalLdapUpgrade_WS_message1'] = 'Utenti, password, gruppi e account computer sono preservati, ma il collegamento alle cartelle condivise richiede credenziali diverse!';
$L['LocalLdapUpgrade_WS_message2'] = 'Quando ci si collega ad una cartella condivisa, il nome dominio NetBIOS deve essere aggiunto come prefisso al nome utente (es. MYDOMAIN\username"), oppure inserito nell\'apposito campo dell\'interfaccia grafica.';
$L['LdapUpgradeButton_label'] = 'Aggiorna';
$L['canUpgradeToSamba_notification'] = 'L\'account provider LDAP locale può essere aggiornato a Samba Active Directory';

$L['AdJoinMember_header'] = 'Join Active Directory  come nuovo membro';
$L['AdDns_label'] = 'Server DNS AD';
$L['AdRealm_label'] = 'Nome dominio DNS';
$L['AdWorkgroup_label'] = 'Nome dominio NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Credenziali per il join al dominio';
$L['AdUsername_label'] = 'Nome utente';
$L['AdPassword_label'] = 'Password';
$L['AdJoinMember_label'] = 'Join';

$L['RemoteAdProvider_header'] = 'Account provider Active Directory remoto per ${0}';
$L['AdNewDomain_header'] = 'Crea un nuovo dominio Active Directory';
$L['AdJoinMemberError_label'] = 'Join all\'Active Directory fallito (${0})';
$L['Save_label'] = 'Salva';
$L['RemoteProviderUnbind_label'] = 'Scollega...';
$L['RemoteProviderUnbind_header'] = 'Scollega account provider';
$L['RemoteProviderUnbind_message'] = 'Qualsiasi utente e gruppo definito dall\'account provider remoto non sarà più disponibile.';
$L['UnbindButton_label'] = 'Scollega';
$L['bindAdSuccess_notification'] = 'Join al dominio Active Directory ${0} avvenuto correttamente ';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Deve essere diverso da 127.0.0.1 o qualsiasi altro indirizzo IP utilizzato dal server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Deve essere incluso in una rete green';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Deve essere un IP libero';
$L['valid_platform,dcrealm,differhostname,3'] = 'Devono differire dall\'host FQDN';
$L['valid_starttls_urischeme'] = 'Incompatibile con lo schema URI "ldaps://"';
$L['AdIpAddress_help1'] = 'L\'indirizzo IP deve soddisfare tutti seguenti requisiti:';
$L['AdIpAddress_help2'] = 'l\'indirizzo IP deve essere contenuto nello stesso intervallo della rete green: ${0}';
$L['AdIpAddress_help3'] = 'l\'indirizzo IP non deve essere correntemente in uso';
$L['AdIpAddress_label'] = "Indirizzo IP Controller di Dominio";
$L['CreateDomain_label'] = 'Crea dominio';

$L['installSuccessAd_notification'] = 'L\'account provider locale Active Directory è stato correttamente installato';
$L['LocalAdProvider_header'] = 'Account provider Active Directory locale per ${0}';
$L['LocalAdProviderUninstall_label'] = 'Disinstalla';
$L['LocalAdProviderDcChangeIp_header'] = 'Cambia l\'indirizzo IP del Domain Controller';
$L['LocalAdProviderDcChangeIp_label'] = 'Cambia IP';
$L['ChangeIPButton_label'] = 'Cambia IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Modificare l\'indirizzo IP del Domain Controller può causare problemi ai client di Active Directory. Se utilizzano un server DNS esterno, aggiornarlo per utilizzare il nuovo indirizzo IP.';
$L['dcChangeIpSuccess_notification'] = 'L\'indirizzo IP del Domain Controller è stato modificato correttamente';
$L['AdNsSambaRpmVersion_label'] = 'Versione Samba DC';
