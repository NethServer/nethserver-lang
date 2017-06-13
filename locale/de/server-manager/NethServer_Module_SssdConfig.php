<?php

$L['SssdConfig_Title'] = 'Accountprovider';
$L['SssdConfig_Description'] = 'Konfiguriere Benutzer- und Gruppen-Accountprovider der Domäne ';
$L['SssdConfig_Tags'] = 'sssd domain account user group ldap kerberos active directory ad benutzer gruppe gruppen konto domäne';

$L['valid_platform,ad-dns,srv_record,1'] = 'Konnte keinen Active Directory-Domänencontroller finden';

$L['Select_Title'] = 'Backendauswahl';

$L['LdapUri_label'] = 'LDAP-Server-URI';
$L['BindProvider_label'] = 'Verknüpfen';
$L['NetbiosDomain_label'] = 'NetBIOS Domäne';

$L['login_label'] = 'Privilegierter Benutzername';
$L['password_label'] = 'Passwort';
$L['Join_label'] = 'Beitreten';
$L['Authenticate_header'] = 'AD beitreten mit privilegierten Anmeldedaten';

$L['Wizard_header'] = 'Konfigurieren von Benutzern und Gruppen für Domain $ {0}';
$L['Local_header'] = 'Installiere einen lokalen Account-Provider';
$L['Install_label'] = 'Installieren';
$L['Bind_label'] = 'Verknüpfen';


$L['ChooseProvider_general'] = 'Benutzer und Gruppen sind über einen Kontenanbieter verfügbar.  Sie können diesen Server mit einem Remote-Account-Provider verbinden oder einen lokale installieren.  Einige Funktionen sind je nach Kontenanbietertyp verfügbar.';
$L['ChooseProvider_ldap'] = 'Einfach zu konfigurieren, unterstützt keinen authentifizierten Zugriff auf freigegebene Ordner';
$L['ChooseProvider_ad'] = 'Ermöglicht alle Funktionen für freigegebene Ordner, erfordert erweiterte Konfigurationsoptionen';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Active Directory-Kontoanbieter';
$L['Ldap_header'] = 'LDAP-Kontoanbieter';
$L['ChooseAd_general'] = 'Computer in einer Active Directory-Domäne können einfache Mitglieder oder Domänencontroller (DC) sein';
$L['ChooseAd_joinmember'] = 'Mitglied einer bestehenden Domäne werden';
$L['ChooseAd_joindc'] = 'DC einer bestehenden Domäne werden';
$L['ChooseAd_newforest'] = 'Eine neue Domäne initialisieren und DC werden';
$L['configAdJoinMember_label'] = 'Einer Domain beitreten';
$L['configAdJoinDc_label'] = 'DC zur Domäne hinzufügen';
$L['configAdNewDomain_label'] = 'Erstelle neue Domäne';

$L['LocalLdapProvider_header'] = 'LDAP lokaler Kontenanbieter für $ {0}';
$L['RemoteLdapProvider_header'] = 'LDAP Remote Account Provider für $ {0}';
$L['ChooseLdap_general'] = 'Eine LDAP-Datenbank kann Benutzer, Gruppen und Passwörter speichern.  Es ist ein RFC2307 kompatibles LDAP-Schema erforderlich.';
$L['ChooseLdap_remote'] = 'An einen entfernten LDAP-Server binden';
$L['ChooseLdap_local'] = 'OpenLDAP-Server installieren';
$L['configLdapRemote_label'] = 'Remote anbinden';
$L['configLdapLocal_label'] = 'Lokale Installation';

$L['LdapRemoteIpAddress_label'] = 'Hostname oder IP';
$L['LdapRemoteTcpPort_label'] = 'TCP port';
$L['LdapRemoteIp_header'] = 'An einen entfernten LDAP-Server binden';
$L['LdapRemoteBind_label'] = 'Einstellungen überprüfen';
$L['probeLdapSuccess_warning'] = 'LDAP-Einstellungen überprüfen und speichern, um die Konfiguration abzuschließen';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Server-Verbindungsfehler oder ungültiger Service-Port';

$L['BindType_anonymous_label'] = 'Anonyme Anbindung';
$L['BindType_authenticated_label'] = 'Authentifizierte Anbindung';
$L['BindType_label'] = 'Read-only bind credentials';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Bind Passwort';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'User DN';
$L['GroupDN_label'] = 'Group DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Standard';
$L['starttls_enabled'] = 'Ja';
$L['starttls_disabled'] = 'Nein';

$L['LdapLocalInstall_header'] = 'Einen OpenLDAP-Server installieren';
$L['LdapLocalInstall_message'] = 'Laden und konfigurieren des OpenLDAP-Server als Lokalen LDAP-Kontenanbieter';
$L['LocalLdapProviderUninstall_label'] = 'Deinstallieren';

$L['LocalProviderUninstall_header'] = 'Lokalkontenanbieter deinstallieren';
$L['LocalProviderUninstall_message'] = 'Dieser Vorgang kann nicht rückgängig gemacht werden. Die Home-Verzeichnisse werden beibehalten, aber jegliche Nutzer, Passwörter, Gruppen und Konten werden gelöscht.';
$L['UninstallButton_label'] = 'Deinstallieren';
$L['installSuccessLdap_notification'] = 'Der OpenLDAP-Lokalkontenanbieter wurde korrekt installiert';

$L['uninstallSuccess_notification'] = 'Der Lokalkontenanbieter wurde korrekt entfernt';
$L['unbindSuccess_notification'] = 'Der Remotekontenanbieter wurde erfolgreich entbunden';

$L['LocalLdapProviderUpgrade_label'] = 'Auf Active Directory aktualisieren';
$L['LocalLdapUpgrade_header'] = 'Auf Active Directory aktualisieren';
$L['LocalLdapUpgrade_message1'] = 'Dieser Vorgang ist nicht umkehrbar !  Die LDAP-Datenbank kann auf einen lokalen Active Directory-Kontenanbieter umgestellt werden.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Benutzer, Passwörter, Gruppen und Computerkonten bleiben erhalten.  Freigegebene Ordnerverbindungen können unterschiedliche Anmeldeinformationen erfordern!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Bei der Verbindung zu einem freigegebenen Ordner muss der NetBIOS-Domänenname entweder dem Benutzernamen vorangestellt werden (d. H. "MYDOMAIN \ username") oder in das jeweilige Formularfeld eingefügt werden.';
$L['LocalLdapUpgrade_WS_message1'] = 'Benutzer, Passwörter und Gruppen bleiben erhalten;  Aber geteilte Ordnerverbindungen erfordern unterschiedliche Anmeldeinformationen!';
$L['LocalLdapUpgrade_WS_message2'] = 'Bei der Verbindung zu einem freigegebenen Ordner muss der NetBIOS-Domänenname entweder dem Benutzernamen vorangestellt werden (d. H. "MYDOMAIN \ username") oder in das jeweilige Formularfeld eingefügt werden.';
$L['LdapUpgradeButton_label'] = 'Aktualisieren';
$L['canUpgradeToSamba_notification'] = 'Der lokale LDAP-Kontenanbieter kann auf Samba Active Directory aktualisiert werden';

$L['AdJoinMember_header'] = 'Trete Active Directory als neues Mitglied bei';
$L['AdDns_label'] = 'AD-DNS-Server';
$L['AdRealm_label'] = 'DNS-Domänenname';
$L['AdWorkgroup_label'] = 'NetBIOS-Domänenname';
$L['AdJoinMemberCredentials_label'] = 'Zugangsdaten für den Domainbeitritt';
$L['AdUsername_label'] = 'Benutzername';
$L['AdPassword_label'] = 'Passwort';
$L['AdJoinMember_label'] = 'Beitreten';

$L['RemoteAdProvider_header'] = 'Active Directory Fernzugriffsprovider für $ {0}';
$L['AdNewDomain_header'] = 'Neue Active Directory Domain erstellen';
$L['AdJoinMemberError_label'] = 'Fehler beim Beitritt zu Active Directory ($ {0})';
$L['Save_label'] = 'Speichern';
$L['RemoteProviderUnbind_label'] = 'Nicht gebunden ...';
$L['RemoteProviderUnbind_header'] = 'Nicht gebundener Kontenanbieter';
$L['RemoteProviderUnbind_message'] = 'Ein vom Fernkontenanbieter definiertes Benutzer- und Gruppenkonto ist nicht mehr verfügbar.';
$L['UnbindButton_label'] = 'Nicht gebunden';
$L['bindAdSuccess_notification'] = 'Active Directory Domäne $ {0} wurde erfolgreich beigetreten';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Muß von 127.0.0.1 oder einer anderen vom Server verwendeten IP-Adresse abweichen';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Muss Teil eines grünen Netzwerks sein';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Muß eine freie IP-Adresse sein';
$L['valid_starttls_urischeme'] = 'Konflikte mit "ldaps: //" URI-Schema';
$L['AdIpAddress_help1'] = 'Die gewählte IP-Adresse muss alle nachfolgenden Bedingungen erfüllen:';
$L['AdIpAddress_help2'] = 'Die IP-Adresse muß im selben Subnetzbereich eines grünen Netzwerks sein: $ {0}';
$L['AdIpAddress_help3'] = 'Die IP-Adresse muss derzeit ungenutzt sein';
$L['AdIpAddress_label'] = "IP-Adresse des Domänencontrollers";
$L['CreateDomain_label'] = 'Domain erstellen';

$L['installSuccessAd_notification'] = 'Active Directory lokaler Kontenanbieter wurde korrekt installiert';
$L['LocalAdProvider_header'] = 'Active Directory lokaler Kontenanbieter für $ {0}';
$L['LocalAdUpdate_label'] = 'DC aktualisieren';
$L['LocalAdProviderUninstall_label'] = 'Deinstallieren';
$L['sambaUpdateIsAvailable_notification'] = "Ein Update für das Domänencontroller-Paket ist verfügbar";
$L['LocalAdUpdate_header'] = 'DC aktualisieren';
$L['LocalAdUpdate_message'] = 'Dieser Vorgang könnte zusätzliche Pakete erfordern. Der Domain-Controller wird nach der Softwareaktualisierung neu gestartet';
