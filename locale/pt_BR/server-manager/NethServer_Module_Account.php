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

$L['AccountProvider_Error_22'] = 'Account provider error: invalid DN. Check Base DN, Groups DN and Users DN in Accounts provider configuration';
$L['AccountProvider_Error_32'] = 'Erro do provedor de conta: nenhuma entrada encontrada. Verifique as credenciais de vinculação LDAP e a base DN na configuração do provedor de Contas';
$L['AccountProvider_Error_34'] = 'Account provider error: invalid machine password. Check the server is correctly joined to a domain';
$L['AccountProvider_Error_49'] = 'Erro do provedor de conta: credenciais inválidas (${0})';
$L['AccountProvider_Error_49_710'] = 'Direitos de acesso insuficientes (49/710): especifique credenciais de ligação LDAP alternativas na configuração do provedor de Contas';
$L['AccountProvider_Error_4'] = 'Aviso do provedor de conta: limite de tamanho excedido (${0})';
$L['AccountProvider_Error_104'] = 'Account provider connection reset by peer: check if the server supports SSL/TLS connections';
$L['AccountProvider_Error_110'] = 'A ligação do provedor da conta expirou';
$L['AccountProvider_Error_111'] = 'Conexão do provedor de conta recusada';

$L['valid_platform,ad-dns,srv_record,1'] = 'Não parece um controlador de domínio do Active Directory';
