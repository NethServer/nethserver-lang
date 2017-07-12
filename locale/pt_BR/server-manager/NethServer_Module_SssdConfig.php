<?php

$L['SssdConfig_Title'] = 'Fornecedor de conta';
$L['SssdConfig_Description'] = 'Configurar o provedor de contas de domínio de usuários e grupos';
$L['SssdConfig_Tags'] = 'sssd domínio conta usuário grupo ldap kerberos diretório ativo';

$L['valid_platform,ad-dns,srv_record,1'] = 'Não foi possível encontrar um controlador de domínio do Active Directory';

$L['Select_Title'] = 'Escolha do backend';

$L['LdapUri_label'] = 'Servidor LDAP URI';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'Domínio NetBIOS';

$L['login_label'] = 'Nome de usuário privilegiado';
$L['password_label'] = 'Senha';
$L['Join_label'] = 'Entrar';
$L['Authenticate_header'] = 'Junte-se ao AD do domínio com credenciais de usuário privilegiadas';

$L['Wizard_header'] = 'Configure usuários e grupos para o domínio ${0}';
$L['Local_header'] = 'Instalar um provedor de contas local';
$L['Install_label'] = 'Instalar';
$L['Bind_label'] = 'Bind';


$L['ChooseProvider_general'] = 'Usuários e grupos estão disponíveis através de um provedor de contas. Você pode conectar este servidor a um fornecedor de contas remoto ou instalar um local. Alguns recursos estão disponíveis dependendo do tipo de provedor de contas.';
$L['ChooseProvider_ldap'] = 'Fácil de configurar, não suporta acesso autenticado a pastas compartilhadas';
$L['ChooseProvider_ad'] = 'Permite todos os recursos das pastas compartilhadas, requer opções de configuração avançada';
$L['configAd_label'] = 'Active Directory';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Fornecedor de contas Active Directory';
$L['Ldap_header'] = 'Fornecedor de conta LDAP';
$L['ChooseAd_general'] = 'Computadores em um domínio do Active Directory podem ser membros simples ou controladores de domínio (DC)';
$L['ChooseAd_joinmember'] = 'Torne-se membro de um domínio existente';
$L['ChooseAd_joindc'] = 'Torne-se um DC de um domínio existente';
$L['ChooseAd_newforest'] = 'Initialize a new domain and become DC';
$L['configAdJoinMember_label'] = 'Entrar em um domínio';
$L['configAdJoinDc_label'] = 'Adicionar DC a um domínio';
$L['configAdNewDomain_label'] = 'Novo domínio';

$L['LocalLdapProvider_header'] = 'LDAP local accounts provider for ${0}';
$L['RemoteLdapProvider_header'] = 'LDAP remote accounts provider for ${0}';
$L['ChooseLdap_general'] = 'An LDAP database can store users, groups and passwords. It is required a RFC2307 compatible LDAP schema.';
$L['ChooseLdap_remote'] = 'Bind to a remote LDAP server';
$L['ChooseLdap_local'] = 'Install an OpenLDAP server';
$L['configLdapRemote_label'] = 'Bind remotely';
$L['configLdapLocal_label'] = 'Install locally';

$L['LdapRemoteIpAddress_label'] = 'Host name or IP';
$L['LdapRemoteTcpPort_label'] = 'Porta TCP';
$L['LdapRemoteIp_header'] = 'Bind to a remote LDAP server';
$L['LdapRemoteBind_label'] = 'Verificar configuração';
$L['probeLdapSuccess_warning'] = 'Review and save the LDAP settings to finish the configuration';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Server connection error or invalid service port';

$L['BindType_anonymous_label'] = 'Anonymous bind';
$L['BindType_authenticated_label'] = 'Authenticated bind';
$L['BindType_label'] = 'Read-only bind credentials';
$L['BindDN_label'] = 'Bind DN';
$L['BindPassword_label'] = 'Bind Password';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'Usuário DN';
$L['GroupDN_label'] = 'Grupo DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Padrão';
$L['starttls_enabled'] = 'Sim';
$L['starttls_disabled'] = 'Não';

$L['LdapLocalInstall_header'] = 'Install an OpenLDAP server';
$L['LdapLocalInstall_message'] = 'Download and configure OpenLDAP server as local LDAP accounts provider';
$L['LocalLdapProviderUninstall_label'] = 'Desinstalar';

$L['LocalProviderUninstall_header'] = 'Uninstall the local accounts provider';
$L['LocalProviderUninstall_message'] = 'This operation is not reversible. Home directories are not erased, but any user, password, group and computer account will be lost!';
$L['UninstallButton_label'] = 'Desinstalar';
$L['installSuccessLdap_notification'] = 'OpenLDAP local accounts provider was installed correctly';

$L['uninstallSuccess_notification'] = 'The local accounts provider was successfully removed';
$L['unbindSuccess_notification'] = 'The remote accounts provider was succesfully unbound';

$L['LocalLdapProviderUpgrade_label'] = 'Atualizar para Active Directory';
$L['LocalLdapUpgrade_header'] = 'Atualizar para Active Directory';
$L['LocalLdapUpgrade_message1'] = 'This operation is not reversible! The LDAP database can be upgraded to a local Active Directory accounts provider.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Users, passwords, groups and computer accounts are preserved. Shared folder connections may require different credentials!';
$L['LocalLdapUpgrade_PDC_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LocalLdapUpgrade_WS_message1'] = 'Users, passwords and groups are preserved; however shared folder connections require different credentials!';
$L['LocalLdapUpgrade_WS_message2'] = 'When connecting to a shared folder, the NetBIOS domain name must be either prefixed to the user name (i.e. "MYDOMAIN\username"), or inserted in the specific form field.';
$L['LdapUpgradeButton_label'] = 'Atualizar';
$L['canUpgradeToSamba_notification'] = 'The local LDAP accounts provider can be upgraded to Samba Active Directory';

$L['AdJoinMember_header'] = 'Join Active Directory as new member';
$L['AdDns_label'] = 'AD DNS server';
$L['AdRealm_label'] = 'DNS domain name';
$L['AdWorkgroup_label'] = 'NetBIOS domain name';
$L['AdJoinMemberCredentials_label'] = 'Credentials for joining the domain';
$L['AdUsername_label'] = 'Nome de usuário';
$L['AdPassword_label'] = 'Senha';
$L['AdJoinMember_label'] = 'Entrar';

$L['RemoteAdProvider_header'] = 'Active Directory remote accounts provider for ${0}';
$L['AdNewDomain_header'] = 'Crie um novo domínio do Active Directory';
$L['AdJoinMemberError_label'] = 'Failed to join Active Directory (${0})';
$L['Save_label'] = 'Salvar';
$L['RemoteProviderUnbind_label'] = 'Unbind...';
$L['RemoteProviderUnbind_header'] = 'Unbind accounts provider';
$L['RemoteProviderUnbind_message'] = 'Any user and group account defined by the remote accounts provider will no longer be available.';
$L['UnbindButton_label'] = 'Unbind';
$L['bindAdSuccess_notification'] = 'Active Directory domain ${0} was joined successfully';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Must be different from 127.0.0.1 or any other IP address used by the server';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Deve ser parte de uma rede verde';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Deve ser um endereço IP livre';
$L['valid_starttls_urischeme'] = 'Conflicts with "ldaps://" URI scheme';
$L['AdIpAddress_help1'] = 'The chosen IP address must satisfy all of the below conditions:';
$L['AdIpAddress_help2'] = 'the IP address must be in the same subnet range of a green network: ${0}';
$L['AdIpAddress_help3'] = 'the IP address must be unused currently';
$L['AdIpAddress_label'] = "Endereço IP do Controlador de Domínio";
$L['CreateDomain_label'] = 'Novo domínio';

$L['installSuccessAd_notification'] = 'Active Directory local accounts provider was installed correctly';
$L['LocalAdProvider_header'] = 'Active Directory local accounts provider for ${0}';
$L['LocalAdUpdate_label'] = 'Atualizar DC';
$L['LocalAdProviderUninstall_label'] = 'Desinstalar';
$L['sambaUpdateIsAvailable_notification'] = "Um pacote de atualização esta disponível para o Controlador de Domínio";
$L['LocalAdUpdate_header'] = 'Atualizar DC';
$L['LocalAdUpdate_message'] = 'Esta operação pode exigir baixar pacotes adicionais. O controlador de domínio será reiniciado após o software ter sido atualizado';
