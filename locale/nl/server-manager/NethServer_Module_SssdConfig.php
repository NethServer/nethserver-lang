<?php

$L['SssdConfig_Title'] = 'Accounts provider';
$L['SssdConfig_Description'] = 'Configureer accounts-provider voor gebruikers en groepen';
$L['SssdConfig_Tags'] = 'sssd domein account gebruiker groep ldap kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Kon geen Active Directory domein controller vinden';

$L['Select_Title'] = 'Backend keuze';

$L['LdapUri_label'] = 'LDAP-server URI';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS domein';

$L['login_label'] = 'Gebruikersnaam met admin rechten';
$L['password_label'] = 'Wachtwoord';
$L['Join_label'] = 'Toevoegen';
$L['Authenticate_header'] = 'Voeg toe aan het AD domein met admin gebruikers rechten';

$L['Wizard_header'] = 'Configureer gebruikers en groepen voor domein ${0}';
$L['Local_header'] = 'Installeer een lokale accounts provider';
$L['Install_label'] = 'Installeer';
$L['Bind_label'] = 'Bind';


$L['ChooseProvider_general'] = 'Gebruikers en groepen zijn beschikbaar via een accountprovider. U kunt deze server verbinden met een externe accountprovider of een lokale server installeren. Sommige functies zijn beschikbaar, afhankelijk van het type provider van de account.';
$L['ChooseProvider_ldap'] = 'Eenvoudig te configureren, biedt geen ondersteuning voor geverifieerde toegang tot gedeelde mappen';
$L['ChooseProvider_ad'] = 'Hiermee worden alle functies van gedeelde mappen ingeschakeld, zijn geavanceerde configuratie-opties vereist';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Active Directory accounts provider';
$L['Ldap_header'] = 'LDAP accounts provider';
$L['ChooseAd_general'] = 'Computers in een Active Directory-domein kunnen eenvoudige leden of domeincontrollers (DC) zijn';
$L['ChooseAd_joinmember'] = 'Word lid van een bestaand domein';
$L['ChooseAd_joindc'] = 'Word een DC van een bestaand domein';
$L['ChooseAd_newforest'] = 'Initialiseer een nieuw domein en word DC';
$L['configAdJoinMember_label'] = 'Word lid van een domein';
$L['configAdJoinDc_label'] = 'Voeg DC aan domein toe';
$L['configAdNewDomain_label'] = 'Maak een nieuw domein';

$L['LocalLdapProvider_header'] = 'LDAP lokale accounts provider voor ${0}';
$L['RemoteLdapProvider_header'] = 'LDAP externe accounts provider voor ${0}';
$L['ChooseLdap_general'] = 'Een LDAP-database kan gebruikers, groepen en wachtwoorden opslaan. Het is vereist een RFC2307 compatibel LDAP-schema.';
$L['ChooseLdap_remote'] = 'Binden aan een externe LDAP-server';
$L['ChooseLdap_local'] = 'Installeer een OpenLDAP server';
$L['configLdapRemote_label'] = 'Bind extern';
$L['configLdapLocal_label'] = 'Installeer lokaal';

$L['LdapRemoteIpAddress_label'] = 'Host naam of IP';
$L['LdapRemoteTcpPort_label'] = 'TCP poort';
$L['LdapRemoteIp_header'] = 'Binden aan een externe LDAP-server';
$L['LdapRemoteBind_label'] = 'Controleer configuratie';
$L['probeLdapSuccess_warning'] = 'Controleer en sla de LDAP-instellingen op om de configuratie te voltooien';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Serververbindingsfout of ongeldige servicepoort';

$L['BindType_anonymous_label'] = 'Bind anoniem';
$L['BindType_authenticated_label'] = 'everifieerd';
$L['BindType_label'] = 'Verificatiegegevens voor LDAP-toepassingen';
$L['valid_adldapcredentials_required'] = 'Stel de velden BindDN en BindPassword in';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Ongeldige LDAP-credentials';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'LDAP verbindings-fout';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN is niet gevonden of onvoldoende rechten';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Ongeldige DN-syntax';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Bind wachtwoord';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'Gebruiker DN';
$L['GroupDN_label'] = 'Groep DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Default';
$L['starttls_enabled'] = 'Ja';
$L['starttls_disabled'] = 'Nee';

$L['LdapLocalInstall_header'] = 'Installeer een OpenLDAP server';
$L['LdapLocalInstall_message'] = 'Download en configureer de OpenLDAP-server als lokale LDAP-accountprovider';
$L['LocalLdapProviderUninstall_label'] = 'Deinstalleer';

$L['LocalProviderUninstall_header'] = 'Deinstalleer de lokale accounts provider';
$L['LocalProviderUninstall_message'] = 'Deze bewerking is niet omkeerbaar. Home-mappen worden niet gewist, maar elke gebruiker, wachtwoord, groep en computeraccount gaan verloren!';
$L['UninstallButton_label'] = 'Deinstalleer';
$L['installSuccessLdap_notification'] = 'OpenLDAP lokale accounts provider is correct geïnstalleerd';

$L['uninstallSuccess_notification'] = 'De lokale accounts provider is succesvol verwijderd';
$L['unbindSuccess_notification'] = 'De externe accountprovider was succesvol ontbonden';

$L['LocalLdapProviderUpgrade_label'] = 'Upgrade naar Active Directory';
$L['LocalLdapUpgrade_header'] = 'Upgrade naar Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Deze bewerking is niet omkeerbaar! De LDAP-database kan worden geüpgraded naar een lokale Active Directory-accountsprovider.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Gebruikers, wachtwoorden, groepen en computeraccounts blijven behouden. Voor gedeelde mapverbindingen zijn mogelijk andere referenties vereist!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Wanneer u verbinding maakt met een gedeelde map, moet de NetBIOS-domeinnaam worden voorafgegaan door de gebruikersnaam (d.w.z. "MYDOMAIN\gebruikersnaam"), of worden ingevoegd in het specifieke formulierveld.';
$L['LocalLdapUpgrade_WS_message1'] = 'Gebruikers, wachtwoorden en groepen worden bewaard; gedeelde mapverbindingen vereisen echter andere referenties!';
$L['LocalLdapUpgrade_WS_message2'] = 'Wanneer u verbinding maakt met een gedeelde map, moet de NetBIOS-domeinnaam worden voorafgegaan door de gebruikersnaam (d.w.z. "MYDOMAIN\gebruikersnaam"), of worden ingevoegd in het specifieke formulierveld.';
$L['LdapUpgradeButton_label'] = 'Upgrade';
$L['canUpgradeToSamba_notification'] = 'De lokale LDAP-accountprovider kan worden geüpgraded naar Samba Active Directory';

$L['AdJoinMember_header'] = 'Word lid van Active Directory als nieuw lid';
$L['AdDns_label'] = 'AD DNS server';
$L['AdRealm_label'] = 'DNS domein naam';
$L['AdWorkgroup_label'] = 'NetBIOS domein naam';
$L['AdJoinMemberCredentials_label'] = 'Credentials voor deelname aan het domein';
$L['AdUsername_label'] = 'Gebruikersnaam';
$L['AdPassword_label'] = 'Wachtwoord';
$L['AdJoinMember_label'] = 'Toevoegen';

$L['RemoteAdProvider_header'] = 'Externe Active Directory-provider voor ${0}';
$L['AdNewDomain_header'] = 'Maak een nieuw Active Directory domein';
$L['AdJoinMemberError_label'] = 'Verbinden met Active Directory (${0}) mislukt';
$L['Save_label'] = 'Opslaan';
$L['RemoteProviderUnbind_label'] = 'Ontbinden...';
$L['RemoteProviderUnbind_header'] = 'Ontbind accounts provider';
$L['RemoteProviderUnbind_message'] = 'Gebruikers- en groepsaccounts gedefinieerd door de externe accountprovider zijn niet langer beschikbaar.';
$L['UnbindButton_label'] = 'Ontbind';
$L['bindAdSuccess_notification'] = 'Active Directory-domein ${0} is succesvol toegevoegd';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Moet verschillen van 127.0.0.1 of een ander IP-adres dat door de server wordt gebruikt';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Moet onderdeel zijn van een groen netwerk';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Moet een vrij IP-adres zijn';
$L['valid_platform,dcrealm,differhostname,3'] = 'Moet verschillen van de host FQDN';
$L['valid_starttls_urischeme'] = 'Conflicten met "ldaps://" URI-schema';
$L['AdIpAddress_help1'] = 'Het gekozen IP adres moet voldoen aan alle onderstaande eisen:';
$L['AdIpAddress_help2'] = 'het IP adres moet in hetzelfde subnet zitten van groen netwerk: ${0}';
$L['AdIpAddress_help3'] = 'het IP adres mag niet worden gebruikt';
$L['AdIpAddress_label'] = "Domein Controller IP-adres";
$L['CreateDomain_label'] = 'Maak domein aan';

$L['installSuccessAd_notification'] = 'Lokale Active Directory-provider van Active Directory is correct geïnstalleerd';
$L['LocalAdProvider_header'] = 'Lokale Active Directory-provider voor ${0}';
$L['LocalAdProviderUninstall_label'] = 'Deinstalleer';
$L['LocalAdProviderDcChangeIp_header'] = 'Wijzig het IP-adres van de domeincontroller';
$L['LocalAdProviderDcChangeIp_label'] = 'Wijzig het IP-adres';
$L['ChangeIPButton_label'] = 'Wijzig het IP-adres';
$L['LocalAdProviderDcChangeIp_message1'] = 'Het wijzigen van het IP-adres van de domeincontroller kan problemen veroorzaken met Active Directory-clients. Als ze een externe DNS-server gebruiken, werkt u deze bij om het nieuwe IP-adres te gebruiken.';
$L['dcChangeIpSuccess_notification'] = 'IP-adres van domeincontroller is gewijzigd';
$L['AdNsSambaRpmVersion_label'] = 'Samba DC versie';
