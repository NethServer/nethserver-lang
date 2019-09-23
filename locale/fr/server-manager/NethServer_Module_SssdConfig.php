<?php

$L['SssdConfig_Title'] = 'Fournisseur des comptes';
$L['SssdConfig_Description'] = 'Configure user and groups domain accounts provider';
$L['SssdConfig_Tags'] = 'sssd domain account user group ldap kerberos active directory';

$L['valid_platform,ad-dns,srv_record,1'] = 'Contrôleur de domaine Active Directory introuvable';

$L['Select_Title'] = 'choix du fournisseur de compte ';

$L['LdapUri_label'] = 'URI du serveur LDAP';
$L['BindProvider_label'] = 'liaison';
$L['NetbiosDomain_label'] = 'domaine NetBIOS';

$L['login_label'] = 'Nom d\'utilisateur privilégié ';
$L['password_label'] = 'Mot de passe';
$L['Join_label'] = 'Rejoindre';
$L['Authenticate_header'] = 'Joindre le domaine AD avec l\'identifiant et le mot de passe d\'un utilisateur autorisé';

$L['Wizard_header'] = 'Configurer les utilisateurs et les groupes pour le domaine ${0}';
$L['Local_header'] = 'Install a local accounts provider';
$L['Install_label'] = 'Installer';
$L['Bind_label'] = 'liaison';


$L['ChooseProvider_general'] = 'Users and groups are available through an accounts provider. You can connect this server to a remote accounts provider, or install a local one. Some features are available depending on the accounts provider type.';
$L['ChooseProvider_ldap'] = 'Facile à configurer, ne permet pas l\'accès authentifié aux dossiers partagés';
$L['ChooseProvider_ad'] = 'Active toutes les fonctions des dossiers partagés, requiert des options de configuration avancées';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Active Directory accounts provider';
$L['Ldap_header'] = 'LDAP accounts provider';
$L['ChooseAd_general'] = 'Les ordinateurs dans un domaine Active Directory peuvent être de simples membres ou des contrôleurs de domaine (DC).';
$L['ChooseAd_joinmember'] = 'Become a member of an existing domain';
$L['ChooseAd_joindc'] = 'Become a DC of an existing domain';
$L['ChooseAd_newforest'] = 'Initialize a new domain and become DC';
$L['configAdJoinMember_label'] = 'Join a domain';
$L['configAdJoinDc_label'] = 'Add DC to domain';
$L['configAdNewDomain_label'] = 'Créer un nouveau domaine';

$L['LocalLdapProvider_header'] = 'LDAP local accounts provider for ${0}';
$L['RemoteLdapProvider_header'] = 'LDAP remote accounts provider for ${0}';
$L['ChooseLdap_general'] = 'An LDAP database can store users, groups and passwords. It is required a RFC2307 compatible LDAP schema.';
$L['ChooseLdap_remote'] = 'Bind to a remote LDAP server';
$L['ChooseLdap_local'] = 'Install an OpenLDAP server';
$L['configLdapRemote_label'] = 'Bind remotely';
$L['configLdapLocal_label'] = 'Install locally';

$L['LdapRemoteIpAddress_label'] = 'Host name or IP';
$L['LdapRemoteTcpPort_label'] = 'port TCP';
$L['LdapRemoteIp_header'] = 'Bind to a remote LDAP server';
$L['LdapRemoteBind_label'] = 'Check configuration';
$L['probeLdapSuccess_warning'] = 'Review and save the LDAP settings to finish the configuration';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Server connection error or invalid service port';

$L['BindType_anonymous_label'] = 'Anonymous bind';
$L['BindType_authenticated_label'] = 'Authenticated bind';
$L['BindType_label'] = 'Informations d\'identification pour les applications LDAP';
$L['valid_adldapcredentials_required'] = 'Renseignez les champs BindDN and BindPassword';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Identifiants LDAP incorrects';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'Erreur de connexion à l\'annuaire LDAP';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'La base DN n\'a pas été trouvée ou les droits sont insuffisants';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Syntaxe DN invalide';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Mot de passe Bind';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'Utilisateur DN';
$L['GroupDN_label'] = 'Groupe DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Défaut';
$L['starttls_enabled'] = 'Oui';
$L['starttls_disabled'] = 'Non';

$L['LdapLocalInstall_header'] = 'Install an OpenLDAP server';
$L['LdapLocalInstall_message'] = 'Télécharger et configurer le serveur OpenLDAP en tant que fournisseur de comptes LDAP locaux';
$L['LocalLdapProviderUninstall_label'] = 'Uninstall';

$L['LocalProviderUninstall_header'] = 'Uninstall the local accounts provider';
$L['LocalProviderUninstall_message'] = 'This operation is not reversible. Home directories are not erased, but any user, password, group and computer account will be lost!';
$L['UninstallButton_label'] = 'Uninstall';
$L['installSuccessLdap_notification'] = 'OpenLDAP local accounts provider was installed correctly';

$L['uninstallSuccess_notification'] = 'The local accounts provider was successfully removed';
$L['unbindSuccess_notification'] = 'The remote accounts provider was succesfully unbound';

$L['LocalLdapProviderUpgrade_label'] = 'Upgrade to Active Directory';
$L['LocalLdapUpgrade_header'] = 'Upgrade to Active Directory';
$L['LocalLdapUpgrade_message1'] = 'This operation is not reversible! The LDAP database can be upgraded to a local Active Directory accounts provider.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Users, passwords, groups and computer accounts are preserved. Shared folder connections may require different credentials!';
$L['LocalLdapUpgrade_PDC_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LocalLdapUpgrade_WS_message1'] = 'Users, passwords and groups are preserved; however shared folder connections require different credentials!';
$L['LocalLdapUpgrade_WS_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LdapUpgradeButton_label'] = 'Mise à niveau';
$L['canUpgradeToSamba_notification'] = 'The local LDAP accounts provider can be upgraded to Samba Active Directory';

$L['AdJoinMember_header'] = 'Join Active Directory as new member';
$L['AdDns_label'] = 'AD DNS server';
$L['AdRealm_label'] = 'DNS domain name';
$L['AdWorkgroup_label'] = 'Nom de domaine NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Identifiants pour joindre le domaine';
$L['AdUsername_label'] = 'Nom d\'utilisateur';
$L['AdPassword_label'] = 'Mot de passe';
$L['AdJoinMember_label'] = 'Rejoindre';

$L['RemoteAdProvider_header'] = 'Active Directory remote accounts provider for ${0}';
$L['AdNewDomain_header'] = 'Create a new Active Directory domain';
$L['AdJoinMemberError_label'] = 'Failed to join Active Directory (${0})';
$L['Save_label'] = 'Sauvegarder';
$L['RemoteProviderUnbind_label'] = 'Unbind...';
$L['RemoteProviderUnbind_header'] = 'Unbind accounts provider';
$L['RemoteProviderUnbind_message'] = 'Any user and group account defined by the remote accounts provider will no longer be available.';
$L['UnbindButton_label'] = 'Unbind';
$L['bindAdSuccess_notification'] = 'Active Directory domain ${0} was joined successfully';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Must be different from 127.0.0.1 or any other IP address used by the server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Must be part of a green network';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Must be a free IP address';
$L['valid_platform,dcrealm,differhostname,3'] = 'Doit être différent du FQDN de l\'hôte';
$L['valid_starttls_urischeme'] = 'Conflicts with "ldaps://" URI scheme';
$L['AdIpAddress_help1'] = 'The chosen IP address must satisfy all of the below conditions:';
$L['AdIpAddress_help2'] = 'the IP address must be in the same subnet range of a green network: ${0}';
$L['AdIpAddress_help3'] = 'L\'adresse IP doit être inutilisée actuellement';
$L['AdIpAddress_label'] = "Adresse IP du contrôleur de domaine";
$L['CreateDomain_label'] = 'Create domain';

$L['installSuccessAd_notification'] = 'Active Directory local accounts provider was installed correctly';
$L['LocalAdProvider_header'] = 'Active Directory local accounts provider for ${0}';
$L['LocalAdProviderUninstall_label'] = 'Uninstall';
$L['LocalAdProviderDcChangeIp_header'] = 'Change IP address of Domain Controller';
$L['LocalAdProviderDcChangeIp_label'] = 'Change IP';
$L['ChangeIPButton_label'] = 'Change IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Changing the Domain Controller IP address can cause problems to Active Directory clients. If they use an external DNS server, update it to use the new IP address.';
$L['dcChangeIpSuccess_notification'] = 'Domain Controller IP address successfully changed';
$L['AdNsSambaRpmVersion_label'] = 'Samba DC version';
