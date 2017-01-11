<?php

$L['Account_Title'] = 'Usuarios y Grupos';
$L['Account_Description'] = 'Administrar usuarios y grupos, configurar la identidad de dominio y proveedores de autenticación';
$L['Account_Tags'] = 'sssd usuario grupo nombre dominio cuenta kerberos ldap';
$L['Select_Title'] = 'Elección de backend';

$L['AuthProvider_header'] = 'Seleccione los usuarios y grupos del proveedor de dominio "${0}"';
$L['Provider_none_label'] = 'Ninguno (desactivado)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Directorio Activo';
$L['AdDns_label'] = 'Dirección IP del servidor DNS';
$L['LdapUri_label'] = 'Dirección IP del servidor';
$L['BindProvider_label'] = 'Enlazar';
$L['NetbiosDomain_label'] = 'Dominio NetBIOS';

$L['login_label'] = 'Nombre de usuario con privilegios';
$L['password_label'] = 'Contraseña';
$L['Join_label'] = 'Unirse';
$L['Authenticate_header'] = 'Unirse al dominio de AD con credenciales de usuario con privilegios';

$L['NoConfig_header'] = 'Dominio ${0}';

$L['AccountProvider_Error_22'] = 'Proveedor de Cuenta - Error: DN no válido. Comprobar DN de base, DN de grupos y DN de usuarios en la configuración del proveedor de cuentas';
$L['AccountProvider_Error_32'] = 'Error del proveedor de cuenta: no se encontraron registros. Compruebe las credenciales de enlace LDAP y el base DN en la configuración del proveedor de Cuentas';
$L['AccountProvider_Error_34'] = 'Proveedor de Cuenta - Error: contraseña de máquina no válida. Compruebe que el servidor está correctamente unido a un dominio';
$L['AccountProvider_Error_49'] = 'Error del proveedor de cuenta: credenciales no válidas (${0})';
$L['AccountProvider_Error_49_710'] = 'Permisos de acceso insuficientes (49/710): especifica credenciales de enlace LDAP alternativas en la configuración del proveedor de cuentas';
$L['AccountProvider_Error_4'] = 'Advertencia del proveedor de cuenta: se ha superado el límite de tamaño (${0})';
$L['AccountProvider_Error_104'] = 'Conexión del proveedor de cuenta restablecida por pares: compruebe si el servidor admite conexiones SSL/TLS';
$L['AccountProvider_Error_110'] = 'Tiempo de conexión del proveedor de cuenta agotado';
$L['AccountProvider_Error_111'] = 'Se ha rechazado la conexión del proveedor de cuenta';

$L['valid_platform,ad-dns,srv_record,1'] = 'No parece un controlador de dominio de Active Directory';
