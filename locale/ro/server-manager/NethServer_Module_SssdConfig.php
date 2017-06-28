<?php

$L['SssdConfig_Title'] = 'Furnizor conturi';
$L['SssdConfig_Description'] = 'Configurează utilizatorul și furnizorul de grupuri de conturi de domeniu';
$L['SssdConfig_Tags'] = 'sssd domeniu cont utilizator grup ldap kerberos activ director';

$L['valid_platform,ad-dns,srv_record,1'] = 'Nu s-a putut găsi un controller pentru domeniul Active Directory';

$L['Select_Title'] = 'Opțiune pentru backend';

$L['LdapUri_label'] = 'LDAP server URI';
$L['BindProvider_label'] = 'Legat';
$L['NetbiosDomain_label'] = 'Domeniu NetBIOS';

$L['login_label'] = 'Nume utilizator cu drepturi speciale';
$L['password_label'] = 'Parolă';
$L['Join_label'] = 'Aderare';
$L['Authenticate_header'] = 'Aderă domeniului AD cu datele de conectare de utilizator cu drepturi speciale';

$L['Wizard_header'] = 'Configurează utilizatorii și grupurile pentru domeniul ${0}';
$L['Local_header'] = 'Instalează un furnizor local de conturi';
$L['Install_label'] = 'Instalează';
$L['Bind_label'] = 'Legat';


$L['ChooseProvider_general'] = 'Utilizatorii și grupurile sunt disponibile printr-un furnizor de conturi. Poți conecta acest server la un furnizor remote de conturi sau poți instala unul local. Anumite caracteristici sunt disponibile în funcție de tipul de furnizor.';
$L['ChooseProvider_ldap'] = 'Ușor de configurat dar nu suportă acces autentificat la dosarele partajate.';
$L['ChooseProvider_ad'] = 'Activează toate caracteristicile de partajare a dosarelor dar necesită opțiuni de configurare avansate.';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Furnizor de conturi Active Directory';
$L['Ldap_header'] = 'Furnizor de conturi LDAP';
$L['ChooseAd_general'] = 'Computerele din domeniul Active Directory pot fi simpli membri sau controlori de domeniu (DC)';
$L['ChooseAd_joinmember'] = 'Devin-o membru al unui domeniu existent';
$L['ChooseAd_joindc'] = 'Devin-o DC al unui domeniu existent';
$L['ChooseAd_newforest'] = 'Inițializează un domeniu nou și devin-o DC';
$L['configAdJoinMember_label'] = 'Aderă la un domeniu';
$L['configAdJoinDc_label'] = 'Adaugă DC la domeniu';
$L['configAdNewDomain_label'] = 'Crează domeniu nou';

$L['LocalLdapProvider_header'] = 'Furnizor de conturi LDAP locale pentru ${0}';
$L['RemoteLdapProvider_header'] = 'Furnizor de conturi LDAP remote pentru ${0}';
$L['ChooseLdap_general'] = 'O bază de date LDAP poate stoca utilizatori, grupuri și parole. Este necesară o schemă LDAP compatibilă RFC2307.';
$L['ChooseLdap_remote'] = 'Leagă la un server LDAP la distanță';
$L['ChooseLdap_local'] = 'Instalează un server OpenLDAP';
$L['configLdapRemote_label'] = 'Leagă remote';
$L['configLdapLocal_label'] = 'Instalează local';

$L['LdapRemoteIpAddress_label'] = 'Nume de gazdă sau IP';
$L['LdapRemoteTcpPort_label'] = 'Port TCP';
$L['LdapRemoteIp_header'] = 'Leagă la un server LDAP la distanță';
$L['LdapRemoteBind_label'] = 'Verifică configurația';
$L['probeLdapSuccess_warning'] = 'Revizuiește și salvează setările LDAP pentru a finaliza configurația';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Eroare conexiune la server sau port serviciu invalid';

$L['BindType_anonymous_label'] = 'Legat anonim';
$L['BindType_authenticated_label'] = 'Legat autentificat';
$L['BindType_label'] = 'Date autentificare doar în citire';
$L['BindDN_label'] = 'DN Bind';
$L['BindPassword_label'] = 'Parolă BIND';

$L['BaseDN_label'] = 'DN de bază';
$L['UserDN_label'] = 'Utilizator DN';
$L['GroupDN_label'] = 'Grup DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Implicit';
$L['starttls_enabled'] = 'Da';
$L['starttls_disabled'] = 'Nu';

$L['LdapLocalInstall_header'] = 'Instalează un server OpenLDAP';
$L['LdapLocalInstall_message'] = 'Descarcă și configurează server-ul LDAP ca și furnizor local de conturi LDAP';
$L['LocalLdapProviderUninstall_label'] = 'Dezinstalare';

$L['LocalProviderUninstall_header'] = 'Dezinstalează furnizorul local de conturi';
$L['LocalProviderUninstall_message'] = 'Această operațiune nu este reversibilă. Directoarele de bază nu sunt șterse dar orice utilizator, parolă, grup și cont de computer vor fi pierdute!';
$L['UninstallButton_label'] = 'Dezinstalare';
$L['installSuccessLdap_notification'] = 'Furnizorul de conturi locale LDAP a fost instalat corect';

$L['uninstallSuccess_notification'] = 'Furnizorul local de conturi a fost îndepărtat cu succes';
$L['unbindSuccess_notification'] = 'Furnizorul la distanță de conturi a fost deconectat cu succes';

$L['LocalLdapProviderUpgrade_label'] = 'Îmbunătățire prin trecere la Active Directory';
$L['LocalLdapUpgrade_header'] = 'Îmbunătățire prin trecere la Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Această operațiune nu este reversibilă. Baza de date LDAP poate fi trecută la un furnizor local de conturi Active Directory ';
$L['LocalLdapUpgrade_PDC_message1'] = 'Utilizatorii, parolele, grupurile și conturile de computer sunt păstrate. Conexiunile la dosarele partajate pot solicita alte date de conectare.';
$L['LocalLdapUpgrade_PDC_message2'] = 'La conectarea la un dosar partajat, numele de domeniu NETBIOS trebuie să fie menționat în fața numelui de utilizator (de ex. "DOMENIULMEU\numedeutilizator")';
$L['LocalLdapUpgrade_WS_message1'] = 'Utilizatorii, parolele și grupurile sunt păstrate. Totuși, conexiunile la dosarele partajate necesită alte date de conectare.';
$L['LocalLdapUpgrade_WS_message2'] = 'La conectarea la un dosar partajat, numele de domeniu NETBIOS trebuie să fie menționat în fața numelui de utilizator (de ex. "DOMENIULMEU\numedeutilizator")';
$L['LdapUpgradeButton_label'] = 'Îmbunătățire';
$L['canUpgradeToSamba_notification'] = 'Furnizorul local de conturi LDAP poate fi îmbunătățit prin trecerea la Samba Active Directory';

$L['AdJoinMember_header'] = 'Aderă la Active Directory ca membru';
$L['AdDns_label'] = 'Server AD DNS';
$L['AdRealm_label'] = 'Nume de domeniu DNS';
$L['AdWorkgroup_label'] = 'Nume de domeniu NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Date de conectare pentru conectarea la domeniu';
$L['AdUsername_label'] = 'Nume de utilizator';
$L['AdPassword_label'] = 'Parolă';
$L['AdJoinMember_label'] = 'Aderare';

$L['RemoteAdProvider_header'] = 'Furnizor de conturi Active Directory la distanță pentru ${0}';
$L['AdNewDomain_header'] = 'Crează un nou domeniu Active Directory';
$L['AdJoinMemberError_label'] = 'Aderarea la Active Directory (${0}) a eșuat';
$L['Save_label'] = 'Salvează';
$L['RemoteProviderUnbind_label'] = 'Detașează...';
$L['RemoteProviderUnbind_header'] = 'Detașează furnizorul de conturi';
$L['RemoteProviderUnbind_message'] = 'Orice utilizator și cont de grup definit de furnizorul de conturi la distanță nu va mai fi disponibil.';
$L['UnbindButton_label'] = 'Detașează';
$L['bindAdSuccess_notification'] = 'S-a aderat cu succes la la domeniul Active Directory ${0}';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Trebuie să fie diferită de 127.0.0.1 sau de orice adresă de IP utilizată de server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Trebuie să fie parte a unei rețele verzi';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Trebuie să fie o adresă IP neutilizată';
$L['valid_starttls_urischeme'] = 'Este în conflict cu schema URI "ldaps://"';
$L['AdIpAddress_help1'] = 'Adresa de IP aleasă trebuie să îndeplinească toate cerințele de mai jos:';
$L['AdIpAddress_help2'] = 'Adresa de IP trebuie să fie în același interval de subdomeniu al unei rețele verzi: ${0}';
$L['AdIpAddress_help3'] = 'Adresa de IP trebuie să nu fie în uz';
$L['AdIpAddress_label'] = "Adresa IP a controler-ului de domeniu";
$L['CreateDomain_label'] = 'Crează domeniu';

$L['installSuccessAd_notification'] = 'Furnizorul de conturi Active Directory locale a fost instalat cu corect';
$L['LocalAdProvider_header'] = 'Furnizor de conturi Active Directory locale pentru ${0}';
$L['LocalAdUpdate_label'] = 'Actualizează DC';
$L['LocalAdProviderUninstall_label'] = 'Dezinstalare';
$L['sambaUpdateIsAvailable_notification'] = "Este disponibilă o actualizare a pachetului controler-ului de domeniu";
$L['LocalAdUpdate_header'] = 'Actualizează DC';
$L['LocalAdUpdate_message'] = 'Este posibil ca această operațiune să necesite descărcarea de pachete adiționale. Controler-ul de domeniu va fi restartat după actualizarea software-ului';
