<?php

$L['Account_Title'] = 'Usuários e grupos';
$L['Account_Description'] = 'Gerenciar usuários e grupos, configurar a identidade do domínio e os provedores de autenticação';
$L['Account_Tags'] = 'sssd usuário grupo reino domínio conta kerberos ldap';
$L['Select_Title'] = 'Escolha o Backend';

$L['AuthProvider_header'] = 'Selecione os provedores de usuário e grupos  do domínio "${0}"';
$L['Provider_none_label'] = 'Nenhum (desabilitado)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'Endereço IP do servidor DNS ';
$L['LdapUri_label'] = 'Endereço IP do Servidor';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'Domínio NetBIOS';

$L['login_label'] = 'Nome do usuário privilegiado';
$L['password_label'] = 'Senha';
$L['Join_label'] = 'Entrar';
$L['Authenticate_header'] = 'Entrar no domínio AD com credenciais de usuário privilegiado';

$L['NoConfig_header'] = 'Domínio ${0}';

$L['AccountProvider_Error_22'] = 'Erro do provedor de conta: DN inválido. Verificar DN de base, DN de grupos e DN de usuários na configuração do provedor de contas';
$L['AccountProvider_Error_32'] = 'Erro do provedor de conta: nenhuma entrada encontrada. Verifique as credenciais de vinculação LDAP e a base DN na configuração do provedor de Contas';
$L['AccountProvider_Error_34'] = 'Erro do provedor de conta: senha de máquina inválida. Verifique se o servidor está corretamente unido a um domínio';
$L['AccountProvider_Error_49'] = 'Erro do provedor de conta: credenciais inválidas (${0})';
$L['AccountProvider_Error_49_710'] = 'Direitos de acesso insuficientes (49/710): especifique credenciais de ligação LDAP alternativas na configuração do provedor de Contas';
$L['AccountProvider_Error_4'] = 'Aviso do provedor de conta: limite de tamanho excedido (${0})';
$L['AccountProvider_Error_104'] = 'Conexão do provedor de conta redefinida por pares: verifique se o servidor suporta conexões SSL/TLS';
$L['AccountProvider_Error_110'] = 'A ligação do provedor da conta expirou';
$L['AccountProvider_Error_111'] = 'Conexão do provedor de conta recusada';

$L['valid_platform,ad-dns,srv_record,1'] = 'Não parece um controlador de domínio do Active Directory';

$L['ChooseProvider_1'] = 'Users and groups are available through an accounts provider. You can connect this server to a remote accounts provider, or install a local one.';
$L['ChooseProvider_2'] = 'There are two kinds of accounts provider:';
$L['ChooseProvider_3'] = 'Active Directory: ideal for Windows networks, users can access shared folders with their own credentials';
$L['ChooseProvider_4'] = 'LDAP: easy to install and configure, shared folders are accessible without user authentication';
$L['ChooseProvider_5'] = 'Configure a remote accounts provider';
$L['ChooseProvider_6'] = 'Install a local accounts provider; once installed, it must not be removed';
$L['ChooseProvider_7'] = 'Shared folders are available by installing the "File server" module.';
$L['configureButton_label'] = 'Configure';
$L['softwareCenterButton_label'] = 'Install';
$L['dismissButton_label'] = 'No, thanks!';