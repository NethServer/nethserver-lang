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
$L['ChooseAd_newforest'] = 'Inicialize um novo domínio e torne-se DC';
$L['configAdJoinMember_label'] = 'Entrar em um domínio';
$L['configAdJoinDc_label'] = 'Adicionar DC a um domínio';
$L['configAdNewDomain_label'] = 'Novo domínio';

$L['LocalLdapProvider_header'] = 'Provedor de contas locais LDAP para ${0}';
$L['RemoteLdapProvider_header'] = 'Provedor de contas remotas LDAP para ${0}';
$L['ChooseLdap_general'] = 'Um banco de dados LDAP pode armazenar usuários, grupos e senhas. É necessário um esquema LDAP compatível com RFC2307.';
$L['ChooseLdap_remote'] = 'Vincular a um servidor LDAP remoto';
$L['ChooseLdap_local'] = 'Instalar um servidor OpenLDAP';
$L['configLdapRemote_label'] = 'Vincular remotamente';
$L['configLdapLocal_label'] = 'Instalação Local';

$L['LdapRemoteIpAddress_label'] = 'Nome ou IP do Host';
$L['LdapRemoteTcpPort_label'] = 'Porta TCP';
$L['LdapRemoteIp_header'] = 'Vincular a um servidor LDAP remoto';
$L['LdapRemoteBind_label'] = 'Verificar configuração';
$L['probeLdapSuccess_warning'] = 'Revise e salve as configurações do LDAP para finalizar a configuração';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Erro de conexão do servidor ou porta de serviço inválida';

$L['BindType_anonymous_label'] = 'Ligação anônima';
$L['BindType_authenticated_label'] = 'Ligação autenticada';
$L['BindType_label'] = 'Autenticação de credenciais para aplicação LDAP';
$L['valid_adldapcredentials_required'] = 'Preencher campos BindDN e BindPassword';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Credencial LDAP inválida';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'Erro de conexão LDAP';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'Base DN não foi encontrada ou direitos insuficientes.';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Sintaxe DN inválida ';
$L['BindDN_label'] = 'Vincular DN';
$L['BindPassword_label'] = 'Bind Password';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'Usuário DN';
$L['GroupDN_label'] = 'Grupo DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Padrão';
$L['starttls_enabled'] = 'Sim';
$L['starttls_disabled'] = 'Não';

$L['LdapLocalInstall_header'] = 'Instale um servidor OpenLDAP';
$L['LdapLocalInstall_message'] = 'Baixe e configure o servidor OpenLDAP como fornecedor local de contas LDAP';
$L['LocalLdapProviderUninstall_label'] = 'Desinstalar';

$L['LocalProviderUninstall_header'] = 'Desinstale o provedor de contas local';
$L['LocalProviderUninstall_message'] = 'Esta operação não é reversível. Os diretórios domésticos não são apagados, mas qualquer usuário, senha, grupo e conta de computador serão perdidos!';
$L['UninstallButton_label'] = 'Desinstalar';
$L['installSuccessLdap_notification'] = 'O provedor de contas locais OpenLDAP foi instalado corretamente';

$L['uninstallSuccess_notification'] = 'O provedor de contas locais foi removido com sucesso';
$L['unbindSuccess_notification'] = 'O provedor de contas remotas foi descompactado com sucesso';

$L['LocalLdapProviderUpgrade_label'] = 'Atualizar para Active Directory';
$L['LocalLdapUpgrade_header'] = 'Atualizar para Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Esta operação não é reversível! O banco de dados LDAP pode ser atualizado para um provedor local de contas do Active Directory.';
$L['LocalLdapUpgrade_PDC_message1'] = 'Usuários, senhas, grupos e contas de computadores são preservados. As conexões de pasta compartilhada podem exigir credenciais diferentes!';
$L['LocalLdapUpgrade_PDC_message2'] = 'Ao se conectar a uma pasta compartilhada, o nome de domínio NetBIOS deve ser prefixado para o nome de usuário (ou seja, "MYDOMAIN\username"), ou inserido no campo de formulário específico.';
$L['LocalLdapUpgrade_WS_message1'] = 'Usuários, senhas e grupos são preservados; Contudo, as conexões de pastas compartilhadas requerem credenciais diferentes!';
$L['LocalLdapUpgrade_WS_message2'] = 'Ao se conectar a uma pasta compartilhada, o nome de domínio NetBIOS deve ser prefixado para o nome de usuário (ou seja, "MYDOMAIN\username"), ou inserido no campo de formulário específico.';
$L['LdapUpgradeButton_label'] = 'Atualizar';
$L['canUpgradeToSamba_notification'] = 'O provedor local de contas LDAP pode ser atualizado para o Samba Active Directory';

$L['AdJoinMember_header'] = 'Junte-se ao Active Directory como novo membro';
$L['AdDns_label'] = 'Servidor DNS AD';
$L['AdRealm_label'] = 'Nome de domínio DNS';
$L['AdWorkgroup_label'] = 'Nome de domínio NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Credenciais para se juntar ao domínio';
$L['AdUsername_label'] = 'Nome de usuário';
$L['AdPassword_label'] = 'Senha';
$L['AdJoinMember_label'] = 'Entrar';

$L['RemoteAdProvider_header'] = 'Provedor de contas remotas do Active Directory para ${0}';
$L['AdNewDomain_header'] = 'Crie um novo domínio do Active Directory';
$L['AdJoinMemberError_label'] = 'Falha ao se juntar ao Active Directory (${0})';
$L['Save_label'] = 'Salvar';
$L['RemoteProviderUnbind_label'] = 'Desligar...';
$L['RemoteProviderUnbind_header'] = 'Desligar fornecedor de contas';
$L['RemoteProviderUnbind_message'] = 'Qualquer usuário e conta de grupo definida pelo provedor de contas remotas não estará mais disponível.';
$L['UnbindButton_label'] = 'Desligar';
$L['bindAdSuccess_notification'] = 'O domínio do Active Directory ${0} foi juntado com sucesso';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Deve ser diferente do 127.0.0.1 ou de qualquer outro endereço IP usado pelo servidor';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Deve ser parte de uma rede verde';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Deve ser um endereço IP livre';
$L['valid_platform,dcrealm,differhostname,3'] = 'Deve ser diferente do FQDN do host';
$L['valid_starttls_urischeme'] = 'Conflitos com "ldaps://" esquema URI';
$L['AdIpAddress_help1'] = 'O endereço IP escolhido deve satisfazer todas as condições abaixo:';
$L['AdIpAddress_help2'] = 'o endereço IP deve estar na mesma faixa de sub-rede de uma rede verde: ${0}';
$L['AdIpAddress_help3'] = 'o endereço IP deve estar inutilizado atualmente';
$L['AdIpAddress_label'] = "Endereço IP do Controlador de Domínio";
$L['CreateDomain_label'] = 'Novo domínio';

$L['installSuccessAd_notification'] = 'O provedor de contas locais do Active Directory foi instalado corretamente';
$L['LocalAdProvider_header'] = 'Fornecedor de contas locais do Active Directory para ${0}';
$L['LocalAdProviderUninstall_label'] = 'Desinstalar';
$L['LocalAdProviderDcChangeIp_header'] = 'Alterar o endereço IP do controlador de domínio';
$L['LocalAdProviderDcChangeIp_label'] = 'Alterar IP';
$L['ChangeIPButton_label'] = 'Alterar IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Alterar o endereço IP do controlador de domínio pode causar problemas aos clientes do Active Directory. Se eles usam um servidor DNS externo, atualize-o para usar o novo endereço IP.';
$L['dcChangeIpSuccess_notification'] = 'O endereço IP do controlador de domínio foi alterado com sucesso';
$L['AdNsSambaRpmVersion_label'] = 'Versão do Samba DC';
