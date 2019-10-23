<?php

$L['SssdConfig_Title'] = 'Fournisseur des comptes';
$L['SssdConfig_Description'] = 'Configurer le fournisseur de comptes de domaine d\'utilisateur et de groupes';
$L['SssdConfig_Tags'] = 'Groupe d\'utilisateurs du compte de domaine sssd ldap kerberos Active Directory';

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
$L['Local_header'] = 'Installer un fournisseur de comptes local';
$L['Install_label'] = 'Installer';
$L['Bind_label'] = 'liaison';


$L['ChooseProvider_general'] = 'Les utilisateurs et les groupes sont disponibles via un fournisseur de comptes. Vous pouvez connecter ce serveur à un fournisseur de comptes distant, ou en installer un en local. Certaines fonctions sont disponibles selon le type de fournisseur de comptes.';
$L['ChooseProvider_ldap'] = 'Facile à configurer, ne permet pas l\'accès authentifié aux dossiers partagés';
$L['ChooseProvider_ad'] = 'Active toutes les fonctions des dossiers partagés, requiert des options de configuration avancées';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Fournisseur des comptes Active Directory';
$L['Ldap_header'] = 'Fournisseur des comptes LDAP';
$L['ChooseAd_general'] = 'Les ordinateurs dans un domaine Active Directory peuvent être de simples membres ou des contrôleurs de domaine (DC).';
$L['ChooseAd_joinmember'] = 'Devenir membre d\'un domaine existant';
$L['ChooseAd_joindc'] = 'Devenir contrôleur de domaine d\'un domaine existant';
$L['ChooseAd_newforest'] = 'Initialiser un nouveau domaine et devenir contrôleur de domaine';
$L['configAdJoinMember_label'] = 'Joindre un domaine';
$L['configAdJoinDc_label'] = 'Ajouter un contrôleur de domaine au domaine';
$L['configAdNewDomain_label'] = 'Créer un nouveau domaine';

$L['LocalLdapProvider_header'] = 'Fournisseur des comptes locaux LDAP pour ${0}';
$L['RemoteLdapProvider_header'] = 'Fournisseur des comptes distants LDAP pour ${0}';
$L['ChooseLdap_general'] = 'Une base de données LDAP peut stocker des utilisateurs, des groupes et des mots des passe. Ceci requiert un schéma RFC2307 compatible LDAP.';
$L['ChooseLdap_remote'] = 'Lier au LDAP distant';
$L['ChooseLdap_local'] = 'Installer un serveur OpenLDAP ';
$L['configLdapRemote_label'] = 'Lier à distance';
$L['configLdapLocal_label'] = 'Installer localement';

$L['LdapRemoteIpAddress_label'] = 'Nom d\'hôte ou IP';
$L['LdapRemoteTcpPort_label'] = 'port TCP';
$L['LdapRemoteIp_header'] = 'Lier au LDAP distant';
$L['LdapRemoteBind_label'] = 'Vérifiez la configuration';
$L['probeLdapSuccess_warning'] = 'Vérifiez et enregistrez les paramètres LDAP pour terminer la configuration.';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Erreur de connexion au serveur ou port de service non valide';

$L['BindType_anonymous_label'] = 'Lier anonymement';
$L['BindType_authenticated_label'] = 'Liaison authentifiée';
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

$L['LdapLocalInstall_header'] = 'Installer un serveur OpenLDAP ';
$L['LdapLocalInstall_message'] = 'Télécharger et configurer le serveur OpenLDAP en tant que fournisseur de comptes LDAP locaux';
$L['LocalLdapProviderUninstall_label'] = 'Désintaller';

$L['LocalProviderUninstall_header'] = 'Désinstallez le fournisseur de comptes locaux';
$L['LocalProviderUninstall_message'] = 'Cette opération n\'est pas réversible. Les répertoires personnels ne sont pas effacés, mais tout utilisateur, mot de passe, groupe et compte d\'ordinateur sera perdu!';
$L['UninstallButton_label'] = 'Désintaller';
$L['installSuccessLdap_notification'] = 'Le fournisseur de comptes locaux OpenLDAP a été correctement installé ';

$L['uninstallSuccess_notification'] = 'Le fournisseur de comptes locaux a été correctement supprimé ';
$L['unbindSuccess_notification'] = 'Le fournisseur de comptes distant a été correctement délié ';

$L['LocalLdapProviderUpgrade_label'] = 'Mettre à niveau vers un Active Directory';
$L['LocalLdapUpgrade_header'] = 'Mettre à niveau vers un Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Cette opération n\'est pas réversible ! La base de données LDAP peut être mise à niveau vers un fournisseur de comptes Active Directory local';
$L['LocalLdapUpgrade_PDC_message1'] = 'Les utilisateurs, mots de passe, groupes et comptes d\'ordinateurs sont préservés. Les connexions aux dossiers partagés peuvent nécessiter des informations d\'identification différentes!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Lors de la connexion à un dossier partagé, le nom de domaine NetBIOS doit être préfixé par le nom d\'utilisateur (c\'est-à-dire "MONDOMAINE\nomutilisateur") ou inséré dans le champ de formulaire spécifique.';
$L['LocalLdapUpgrade_WS_message1'] = 'Les utilisateurs, mots de passe, groupes et comptes d\'ordinateurs sont préservés. Cependant, les connexions aux dossiers partagés nécessitent des informations d\'identification différentes!';
$L['LocalLdapUpgrade_WS_message2'] = 'Lors de la connexion à un dossier partagé, le nom de domaine NetBIOS doit être préfixé par le nom d\'utilisateur (c\'est-à-dire "MONDOMAINE\nomutilisateur") ou inséré dans le champ de formulaire spécifique.';
$L['LdapUpgradeButton_label'] = 'Mise à niveau';
$L['canUpgradeToSamba_notification'] = 'Le fournisseur de comptes local LDAP peut être mis à niveau vers Samba Active Directory';

$L['AdJoinMember_header'] = 'Joindre l\'Active Directory comme nouveau membre';
$L['AdDns_label'] = 'Serveur DNS de l\'Active Directory';
$L['AdRealm_label'] = 'Nom de domaine DNS';
$L['AdWorkgroup_label'] = 'Nom de domaine NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Identifiants pour joindre le domaine';
$L['AdUsername_label'] = 'Nom d\'utilisateur';
$L['AdPassword_label'] = 'Mot de passe';
$L['AdJoinMember_label'] = 'Rejoindre';

$L['RemoteAdProvider_header'] = 'Fournisseur des comptes distants Active Directory pour ${0}';
$L['AdNewDomain_header'] = 'Créer un nouveau domaine Active Directory';
$L['AdJoinMemberError_label'] = 'Échec de connexion à l\'Active Directory (${0})';
$L['Save_label'] = 'Sauvegarder';
$L['RemoteProviderUnbind_label'] = 'Délié...';
$L['RemoteProviderUnbind_header'] = 'Délier le fournisseur de comptes';
$L['RemoteProviderUnbind_message'] = 'Tout utilisateur et compte de groupe défini par le fournisseur de comptes distants ne sera plus disponible.';
$L['UnbindButton_label'] = 'Délier';
$L['bindAdSuccess_notification'] = 'Domaine Active Directory ${0} a été joint avec succès';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Doit être différent de 127.0.0.1 ou de toute autre adresse IP utilisée par le serveur';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Doit faire partie d\'un réseau vert';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Doit être une adresse IP libre';
$L['valid_platform,dcrealm,differhostname,3'] = 'Doit être différent du FQDN de l\'hôte';
$L['valid_starttls_urischeme'] = 'Conflit avec le schéma URI "ldaps://"';
$L['AdIpAddress_help1'] = 'L\'adresse IP choisie doit satisfaire toutes les conditions suivantes :';
$L['AdIpAddress_help2'] = 'L\'adresse IP doit être dans la même plage de sous-réseau que le réseau vert : ${0}';
$L['AdIpAddress_help3'] = 'L\'adresse IP doit être inutilisée actuellement';
$L['AdIpAddress_label'] = "Adresse IP du contrôleur de domaine";
$L['CreateDomain_label'] = 'Créer un domaine';

$L['installSuccessAd_notification'] = 'Le fournisseur de comptes locaux Active Directory a été correctement installé ';
$L['LocalAdProvider_header'] = 'Fournisseur des comptes locaux Active Directory pour ${0}';
$L['LocalAdProviderUninstall_label'] = 'Désintaller';
$L['LocalAdProviderDcChangeIp_header'] = 'Modifiez l\'adresse IP du contrôleur de domaine';
$L['LocalAdProviderDcChangeIp_label'] = 'Modifiez l\'IP';
$L['ChangeIPButton_label'] = 'Modifiez l\'IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'La modification de l\'adresse IP du contrôleur de domaine peut entraîner des problèmes pour les clients Active Directory. S\'ils utilisent un serveur DNS externe, mettez-le à jour pour utiliser la nouvelle adresse IP.';
$L['dcChangeIpSuccess_notification'] = 'Adresse IP du contrôleur de domaine modifiée avec succès';
$L['AdNsSambaRpmVersion_label'] = 'Version du contrôleur de domaine Samba';
