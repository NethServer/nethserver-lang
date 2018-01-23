<?php

$L['SssdConfig_Title'] = 'Poskytovatel účtů';
$L['SssdConfig_Description'] = 'Nastavit poskytovatele doménových účtů uživatelů a skupin';
$L['SssdConfig_Tags'] = 'sssd doména účet uživatel skupina ldap kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Nedaří se nalézt řadič domény Active Directory';

$L['Select_Title'] = 'Volba podpůrné vrstvy (backend)';

$L['LdapUri_label'] = 'URI adresa LDAP serveru';
$L['BindProvider_label'] = 'Spojit';
$L['NetbiosDomain_label'] = 'NetBIOS doména';

$L['login_label'] = 'Uživatelské jméno privilegovaného účtu';
$L['password_label'] = 'Heslo';
$L['Join_label'] = 'Připojit';
$L['Authenticate_header'] = 'Přidat do domény Active Directory pomocí přihlašovacích údajů privilegovaného uživatele';

$L['Wizard_header'] = 'Nastavit uživatele a skupiny pro doménu $[0]';
$L['Local_header'] = 'Nainstalovat místního poskytovatele účtů';
$L['Install_label'] = 'Instalovat';
$L['Bind_label'] = 'Spojit';


$L['ChooseProvider_general'] = 'Uživatelé a skupiny jsou k dostupní skrze poskytovatele účtů. Je možné tento server připojit na vzdáleného poskytovatele účtů nebo nainstalovat místní. Některé funkce jsou dostupné v závislosti na typu poskytovatele účtů.';
$L['ChooseProvider_ldap'] = 'Snadno nastavitelné, nepodporuje ověřený přístup ke sdíleným složkám';
$L['ChooseProvider_ad'] = 'Zapíná všechny funkce sdílených složek, vyžaduje pokročilé volby nastavení';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Poskytovatel účtů Active Directory';
$L['Ldap_header'] = 'Poskytovatel LDAP účtů';
$L['ChooseAd_general'] = 'Počítače v doméně Active Directory mohou být pouhými členy  nebo řadiči domény (DC)';
$L['ChooseAd_joinmember'] = 'Připojit se do stávající domény';
$L['ChooseAd_joindc'] = 'Stát se řadičem existující domény';
$L['ChooseAd_newforest'] = 'Inicializovat novou doménu a stát se jejím řadičem (DC)';
$L['configAdJoinMember_label'] = 'Připojit k doméně';
$L['configAdJoinDc_label'] = 'Přidat doménový řadič do domény';
$L['configAdNewDomain_label'] = 'Vytvořit novou doménu';

$L['LocalLdapProvider_header'] = 'LDAP local accounts provider for ${0}';
$L['RemoteLdapProvider_header'] = 'LDAP remote accounts provider for ${0}';
$L['ChooseLdap_general'] = 'V LDAP databázi mohou být uloženy uživatelské účty, skupiny a hesla. Je vyžadováno LDAP schema dle normy RFC2307.';
$L['ChooseLdap_remote'] = 'Spojit se vzdáleným LDAP serverem';
$L['ChooseLdap_local'] = 'Nainstalovat OpenLDAP server';
$L['configLdapRemote_label'] = 'Spojit vzdáleně';
$L['configLdapLocal_label'] = 'Nainstalovat lokálně';

$L['LdapRemoteIpAddress_label'] = 'Název stroje nebo IP adresa';
$L['LdapRemoteTcpPort_label'] = 'TCP port';
$L['LdapRemoteIp_header'] = 'Spojit s LDAP serverem na jiném stroji';
$L['LdapRemoteBind_label'] = 'Zkontrolovat nastavení';
$L['probeLdapSuccess_warning'] = 'Zkontrolujte a uložte nastavení LDAP a dokončete tak nastavení';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Chyba připojení k serveru nebo neplatný port služby';

$L['BindType_anonymous_label'] = 'Anonymní spojení';
$L['BindType_authenticated_label'] = 'Spojení s ověřováním';
$L['BindType_label'] = 'Authentication credentials for LDAP applications';
$L['valid_adldapcredentials_required'] = 'Set BindDN and BindPassword fields';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Invalid LDAP credentials';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'LDAP connection error';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN was not found or insufficient rights';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Invalid DN syntax';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Spojovací heslo';

$L['BaseDN_label'] = 'Základ rozlišeného názvu (DN)';
$L['UserDN_label'] = 'Rozlišený název uživatele';
$L['GroupDN_label'] = 'Rozlišený název skupiny';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Výchozí';
$L['starttls_enabled'] = 'Ano';
$L['starttls_disabled'] = 'Ne';

$L['LdapLocalInstall_header'] = 'Nainstalovat OpenLDAP server';
$L['LdapLocalInstall_message'] = 'Download and configure OpenLDAP server as local LDAP accounts provider';
$L['LocalLdapProviderUninstall_label'] = 'Odinstalovat';

$L['LocalProviderUninstall_header'] = 'Uninstall the local accounts provider';
$L['LocalProviderUninstall_message'] = 'This operation is not reversible. Home directories are not erased, but any user, password, group and computer account will be lost!';
$L['UninstallButton_label'] = 'Odinstalovat';
$L['installSuccessLdap_notification'] = 'OpenLDAP local accounts provider was installed correctly';

$L['uninstallSuccess_notification'] = 'The local accounts provider was successfully removed';
$L['unbindSuccess_notification'] = 'The remote accounts provider was succesfully unbound';

$L['LocalLdapProviderUpgrade_label'] = 'Povýšit na Active Directory';
$L['LocalLdapUpgrade_header'] = 'Povýšit na Active Directory';
$L['LocalLdapUpgrade_message1'] = 'This operation is not reversible! The LDAP database can be upgraded to a local Active Directory accounts provider.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Users, passwords, groups and computer accounts are preserved. Shared folder connections may require different credentials!';
$L['LocalLdapUpgrade_PDC_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LocalLdapUpgrade_WS_message1'] = 'Users, passwords and groups are preserved; however shared folder connections require different credentials!';
$L['LocalLdapUpgrade_WS_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LdapUpgradeButton_label'] = 'Přejít na novou verzi';
$L['canUpgradeToSamba_notification'] = 'The local LDAP accounts provider can be upgraded to Samba Active Directory';

$L['AdJoinMember_header'] = 'Připojit do Active Directory jako nový člen';
$L['AdDns_label'] = 'AD DNS server';
$L['AdRealm_label'] = 'DNS domain name';
$L['AdWorkgroup_label'] = 'NetBIOS domain name';
$L['AdJoinMemberCredentials_label'] = 'Přihlašovací údaje pro přidání do domény';
$L['AdUsername_label'] = 'Uživatelské jméno';
$L['AdPassword_label'] = 'Heslo';
$L['AdJoinMember_label'] = 'Připojit';

$L['RemoteAdProvider_header'] = 'Active Directory remote accounts provider for ${0}';
$L['AdNewDomain_header'] = 'Vytvořit novou doménu Active Directory';
$L['AdJoinMemberError_label'] = 'Přidání do Active Directory se nezdařilo (${0})';
$L['Save_label'] = 'Uložit';
$L['RemoteProviderUnbind_label'] = 'Unbind...';
$L['RemoteProviderUnbind_header'] = 'Unbind accounts provider';
$L['RemoteProviderUnbind_message'] = 'Any user and group account defined by the remote accounts provider will no longer be available.';
$L['UnbindButton_label'] = 'Unbind';
$L['bindAdSuccess_notification'] = 'Active Directory domain ${0} was joined successfully';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Must be different from 127.0.0.1 or any other IP address used by the server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Je třeba, aby bylo součástí zelené (vnitřní) sítě';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Je třeba, aby se jednalo o doposud nepoužívanou IP adresu';
$L['valid_platform,dcrealm,differhostname,3'] = 'Must differ from the host FQDN';
$L['valid_starttls_urischeme'] = 'Conflicts with "ldaps://" URI scheme';
$L['AdIpAddress_help1'] = 'Je třeba, aby zvolená IP adresa splňovala veškeré níže uvedené podmínky:';
$L['AdIpAddress_help2'] = 'the IP address must be in the same subnet range of a green network: ${0}';
$L['AdIpAddress_help3'] = 'je třeba, aby tato IP adresa už nebyla používána';
$L['AdIpAddress_label'] = "IP adresa řadiče domény";
$L['CreateDomain_label'] = 'Vytvořit doménu';

$L['installSuccessAd_notification'] = 'Active Directory local accounts provider was installed correctly';
$L['LocalAdProvider_header'] = 'Active Directory local accounts provider for ${0}';
$L['LocalAdProviderUninstall_label'] = 'Odinstalovat';
$L['LocalAdProviderDcChangeIp_header'] = 'Změnit IP adresu řadiče domény';
$L['LocalAdProviderDcChangeIp_label'] = 'Změnit IP adresu';
$L['ChangeIPButton_label'] = 'Změnit IP adresu';
$L['LocalAdProviderDcChangeIp_message1'] = 'Changing the Domain Controller IP address can cause problems to Active Directory clients. If they use an external DNS server, update it to use the new IP address.';
$L['dcChangeIpSuccess_notification'] = 'IP adresa řadiče domény úspěšně změněna';
$L['AdNsSambaRpmVersion_label'] = 'Verze Samba doménového řadiče';
