<?php

$L['SssdConfig_Title'] = 'Poskytovatel účtů';
$L['SssdConfig_Description'] = 'Nastavit poskytovatele doménových účtů uživatelů a skupin';
$L['SssdConfig_Tags'] = 'sssd doména účet uživatel skupina ldap kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Could not find an Active Directory domain controller';

$L['Select_Title'] = 'Volba podpůrné vrstvy (backend)';

$L['LdapUri_label'] = 'URI adresa LDAP serveru';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS domain';

$L['login_label'] = 'Privileged user name';
$L['password_label'] = 'Heslo';
$L['Join_label'] = 'Připojit';
$L['Authenticate_header'] = 'Join the AD domain with privileged user credentials';

$L['Wizard_header'] = 'Configure users and groups for domain ${0}';
$L['Local_header'] = 'Install a local accounts provider';
$L['Install_label'] = 'Instalovat';
$L['Bind_label'] = 'Bind';


$L['ChooseProvider_general'] = 'Users and groups are available through an accounts provider. You can connect this server to a remote accounts provider, or install a local one. Some features are available depending on the accounts provider type.';
$L['ChooseProvider_ldap'] = 'Easy to configure, does not support authenticated access to shared folders';
$L['ChooseProvider_ad'] = 'Enables all shared folders features, requires advanced configuration options';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Poskytovatel účtů Active Directory';
$L['Ldap_header'] = 'LDAP accounts provider';
$L['ChooseAd_general'] = 'Computers in an Active Directory domain can be simple members or domain controllers (DC)';
$L['ChooseAd_joinmember'] = 'Become a member of an existing domain';
$L['ChooseAd_joindc'] = 'Become a DC of an existing domain';
$L['ChooseAd_newforest'] = 'Initialize a new domain and become DC';
$L['configAdJoinMember_label'] = 'Připojit k doméně';
$L['configAdJoinDc_label'] = 'Přidat doménový řadič do domény';
$L['configAdNewDomain_label'] = 'Vytvořit novou doménu';

$L['LocalLdapProvider_header'] = 'LDAP local accounts provider for ${0}';
$L['RemoteLdapProvider_header'] = 'LDAP remote accounts provider for ${0}';
$L['ChooseLdap_general'] = 'An LDAP database can store users, groups and passwords. It is required a RFC2307 compatible LDAP schema.';
$L['ChooseLdap_remote'] = 'Bind to a remote LDAP server';
$L['ChooseLdap_local'] = 'Nainstalovat OpenLDAP server';
$L['configLdapRemote_label'] = 'Bind remotely';
$L['configLdapLocal_label'] = 'Install locally';

$L['LdapRemoteIpAddress_label'] = 'Název stroje nebo IP adresa';
$L['LdapRemoteTcpPort_label'] = 'TCP port';
$L['LdapRemoteIp_header'] = 'Spojit s LDAP serverem na jiném stroji';
$L['LdapRemoteBind_label'] = 'Zkontrolovat nastavení';
$L['probeLdapSuccess_warning'] = 'Review and save the LDAP settings to finish the configuration';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Server connection error or invalid service port';

$L['BindType_anonymous_label'] = 'Anonymous bind';
$L['BindType_authenticated_label'] = 'Authenticated bind';
$L['BindType_label'] = 'Read-only bind credentials';
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
$L['AdJoinMemberCredentials_label'] = 'Credentials for joining the domain';
$L['AdUsername_label'] = 'Uživatelské jméno';
$L['AdPassword_label'] = 'Heslo';
$L['AdJoinMember_label'] = 'Připojit';

$L['RemoteAdProvider_header'] = 'Active Directory remote accounts provider for ${0}';
$L['AdNewDomain_header'] = 'Vytvořit novou doménu Active Directory';
$L['AdJoinMemberError_label'] = 'Failed to join Active Directory (${0})';
$L['Save_label'] = 'Uložit';
$L['RemoteProviderUnbind_label'] = 'Unbind...';
$L['RemoteProviderUnbind_header'] = 'Unbind accounts provider';
$L['RemoteProviderUnbind_message'] = 'Any user and group account defined by the remote accounts provider will no longer be available.';
$L['UnbindButton_label'] = 'Unbind';
$L['bindAdSuccess_notification'] = 'Active Directory domain ${0} was joined successfully';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Must be different from 127.0.0.1 or any other IP address used by the server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Must be part of a green network';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Must be a free IP address';
$L['valid_starttls_urischeme'] = 'Conflicts with "ldaps://" URI scheme';
$L['AdIpAddress_help1'] = 'Je třeba, aby zvolená IP adresa splňovala veškeré níže uvedené podmínky:';
$L['AdIpAddress_help2'] = 'the IP address must be in the same subnet range of a green network: ${0}';
$L['AdIpAddress_help3'] = 'the IP address must be unused currently';
$L['AdIpAddress_label'] = "IP adresa řadiče domény";
$L['CreateDomain_label'] = 'Vytvořit doménu';

$L['installSuccessAd_notification'] = 'Active Directory local accounts provider was installed correctly';
$L['LocalAdProvider_header'] = 'Active Directory local accounts provider for ${0}';
$L['LocalAdUpdate_label'] = 'Update DC';
$L['LocalAdProviderUninstall_label'] = 'Odinstalovat';
$L['sambaUpdateIsAvailable_notification'] = "An update to the Domain Controller package is available";
$L['LocalAdUpdate_header'] = 'Update DC';
$L['LocalAdUpdate_message'] = 'This operation might require the download of additional packages. The Domain Controller will be restarted after the software has been updated';
