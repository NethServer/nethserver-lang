<?php

$L['SssdConfig_Title'] = 'Proveedor de cuentas';
$L['SssdConfig_Description'] = 'Configurar usuarios y grupos del proveedor de cuentas del dominio';
$L['SssdConfig_Tags'] = 'sssd dominio cuenta usuario grupo ldap kerberos directorio activo';

$L['valid_platform,ad-dns,srv_record,1'] = 'No se encuentra ningún controlador de dominio de Active Directory';

$L['Select_Title'] = 'Opción de backend';

$L['LdapUri_label'] = 'URI de servidor LDAP';
$L['BindProvider_label'] = 'Enlazar';
$L['NetbiosDomain_label'] = 'Dominio NetBIOS';

$L['login_label'] = 'Nombre de usuario privilegiado';
$L['password_label'] = 'Contraseña';
$L['Join_label'] = 'Unir';
$L['Authenticate_header'] = 'Unirse al dominio con credenciales de usuario privilegiado';

$L['Wizard_header'] = 'Configurar usuarios y grupos para el dominio ${0}';
$L['Local_header'] = 'Instalar un proveedor  de cuentas local';
$L['Install_label'] = 'Instalar';
$L['Bind_label'] = 'Enlazar';


$L['ChooseProvider_general'] = 'Usuarios y grupos estan disponibles a travez de un proveedor de cuentas. Ud. puede conectar este servidor a un proveedor remoto de cuentas, o instalar uno local. Algunas caracteristicas van a depender del tipo de proovedor de cuentas.';
$L['ChooseProvider_ldap'] = 'Facil de configurar, no soporta acceso autenticado a las carpetas compartidas';
$L['ChooseProvider_ad'] = 'Habilita todas las caracteristicas de las carpetas compartida, requiere opciones de configuracion avanzada.';
$L['configAd_label'] = 'Directorio Activo';
$L['configLdap_label'] = 'LDAP';

$L['Ad_header'] = 'Proveedor de cuentas Active Directory';
$L['Ldap_header'] = 'Proveedor de cuentas LDAP';
$L['ChooseAd_general'] = 'Las computadoras en un dominio Active Directory, pueden ser simples miembros o controladoras de dominio (DC)';
$L['ChooseAd_joinmember'] = 'Unirse a dominio existente';
$L['ChooseAd_joindc'] = 'Unirse como DC de un dominio existente';
$L['ChooseAd_newforest'] = 'Inicializar un nuevo dominio y convertirse en controlador de dominio';
$L['configAdJoinMember_label'] = 'Unirse a un Dominio';
$L['configAdJoinDc_label'] = 'Agregar controlador de dominio al dominio';
$L['configAdNewDomain_label'] = 'Crear un nuevo dominio';

$L['LocalLdapProvider_header'] = 'Proveedor LDAP de cuentas locales para ${0}';
$L['RemoteLdapProvider_header'] = 'Proveedor de cuentas remotas LDAP para ${0}';
$L['ChooseLdap_general'] = 'Un base de datos LDAP puede almancenar usuarios, grupos y passwords. Es requerido un esquema LDAP compatible con RFC2307';
$L['ChooseLdap_remote'] = 'Conectar a un servidor LDAP remoto';
$L['ChooseLdap_local'] = 'Instalar servidor OpenLDAP';
$L['configLdapRemote_label'] = 'Conectar remotamente';
$L['configLdapLocal_label'] = 'Instalar localmente';

$L['LdapRemoteIpAddress_label'] = 'Nombre de host o IP';
$L['LdapRemoteTcpPort_label'] = 'Puerto TCP';
$L['LdapRemoteIp_header'] = 'Conectar a un servidor LDAP remoto';
$L['LdapRemoteBind_label'] = 'Comprobar configuración';
$L['probeLdapSuccess_warning'] = 'Revisar y guardar los ajustes de LDAP para finalizar la configuración';
$L['valid_platform,ldap-probe,ldap-check-connect,1'] = 'Error de conexion al servidor o puerto de servicio invalido';

$L['BindType_anonymous_label'] = 'Conexion Anonima';
$L['BindType_authenticated_label'] = 'Conexion Autenticada';
$L['BindType_label'] = 'Autenticacion credenciales para aplicaciones LDAP';
$L['valid_adldapcredentials_required'] = 'Configurar los campos BindDN y BindPassword';
$L['valid_platform,ldap-credentials,ldaptestbind,49'] = 'Credenciales Ldap Invalidas';
$L['valid_platform,ldap-credentials,ldaptestbind,1'] = 'Error de conecion a LDAP';
$L['valid_platform,ldap-credentials,ldaptestbind,32'] = 'El DN de base no se encontro o no tiene sufientes privilegios';
$L['valid_platform,ldap-credentials,ldaptestbind,34'] = 'Sintaxis de DN invalida';
$L['BindDN_label'] = 'Conexion DN';
$L['BindPassword_label'] = 'Password de Bind';

$L['BaseDN_label'] = 'Base DN';
$L['UserDN_label'] = 'Usuario DN';
$L['GroupDN_label'] = 'Grupo DN';

$L['StartTls_label'] = 'STARTTLS';
$L['starttls_auto'] = 'Predeterminado';
$L['starttls_enabled'] = 'Si';
$L['starttls_disabled'] = 'No';

$L['LdapLocalInstall_header'] = 'Instalar servidor OpenLDAP';
$L['LdapLocalInstall_message'] = 'Descargar y configurar servidor OpenLDAP como proveedor local de cuentas LDAP';
$L['LocalLdapProviderUninstall_label'] = 'Desinstalar';

$L['LocalProviderUninstall_header'] = 'Desinstalar proveedor de cuentas local';
$L['LocalProviderUninstall_message'] = 'Esta operacion no es reversible. Los directorios home no seran eliminados, pero cualqueir usuario, password, grupo y cuenta de maquina se perderan.';
$L['UninstallButton_label'] = 'Desinstalar';
$L['installSuccessLdap_notification'] = 'El proveedor de cuentas local OpenLDAP se ha instalado correctamente';

$L['uninstallSuccess_notification'] = 'El proveedor de cuentas locales se removio exitosamente.';
$L['unbindSuccess_notification'] = 'El proveedor de cuentas remotas se desconecto exitosamente';

$L['LocalLdapProviderUpgrade_label'] = 'Actualizar a Active Directory';
$L['LocalLdapUpgrade_header'] = 'Actualizar a Active Directory';
$L['LocalLdapUpgrade_message1'] = 'Esta operacion no es reversible! La base de LDAP puede ser actualizada a un controlador local de Active Directory';
$L['LocalLdapUpgrade_PDC_message1'] = 'Usuario, password, grupos y cuentas de maquina se guardara. Las conexiones a carpetas compartidas pueden tener diferentes credenciales.';
$L['LocalLdapUpgrade_PDC_message2'] = 'Cuando se conecta a una carpeta compartida, el nombre de dominio NetBIOS ser prefijo del nombre de usuario (i.e. "MYDOMAIN\usuario"), o insertado en el campo especifico';
$L['LocalLdapUpgrade_WS_message1'] = 'Usuarios, passwords y grupos son preservados, sin embargo las conexiones a carpetas compartidas van a requerir diferentes credenciales!';
$L['LocalLdapUpgrade_WS_message2'] = 'Cuando se conecta a una carpeta compartida, el nombre de dominio NetBIOS ser prefijo del nombre de usuario (i.e. "MYDOMAIN\usuario"), o insertado en el campo especifico';
$L['LdapUpgradeButton_label'] = 'Actualizar';
$L['canUpgradeToSamba_notification'] = 'El provedor local de cuentas LDAP puede ser actualizado a un controlador de Dominio samba';

$L['AdJoinMember_header'] = 'Unirse a Active directory como un nuevo miembro';
$L['AdDns_label'] = 'Servidor de DNS de Active Directory';
$L['AdRealm_label'] = 'Nombre de dominio DNS';
$L['AdWorkgroup_label'] = 'Dominio NetBIOS';
$L['AdJoinMemberCredentials_label'] = 'Credenciales para unirse al dominio';
$L['AdUsername_label'] = 'Usuario';
$L['AdPassword_label'] = 'Contraseña';
$L['AdJoinMember_label'] = 'Unirse';

$L['RemoteAdProvider_header'] = 'Proveedor remoto de cuentas Active Directory para  ${0}';
$L['AdNewDomain_header'] = 'Crear un nuevo Dominio';
$L['AdJoinMemberError_label'] = 'Error al unirse al Active Directory ($(0))';
$L['Save_label'] = 'Guardar';
$L['RemoteProviderUnbind_label'] = 'Desconectar....';
$L['RemoteProviderUnbind_header'] = 'Desconectar proveedor de cuentas';
$L['RemoteProviderUnbind_message'] = 'Cualquier cuenta de usuario y grupo definida por el proveedor remoto de cuentas no estara mas disponible';
$L['UnbindButton_label'] = 'Desconectar';
$L['bindAdSuccess_notification'] = 'Se unio correctamente al Active Directory ${0}';

$L['valid_platform,dcipaddr,ipgreenandbridged,3'] = 'Debe ser diferente de 127.0.0.1 o ninguna otra IP usada por el servidor';
$L['valid_platform,dcipaddr,ipgreenandbridged,4'] = 'Debe ser parte de una red verde';
$L['valid_platform,dcipaddr,ipgreenandbridged,5'] = 'Debe ser una IP libre';
$L['valid_platform,dcrealm,differhostname,3'] = 'Debe diferir del nombre de host FQDN';
$L['valid_starttls_urischeme'] = 'En conflicto con el esquema URI "ldaps://"';
$L['AdIpAddress_help1'] = 'La IP elejida debe satisfacer todas las condiciones de abajo.';
$L['AdIpAddress_help2'] = 'La direccion IP debe estar en el mismo rango de red que la red verde: ${0}';
$L['AdIpAddress_help3'] = 'La direccion IP debe estar actualmente sin uso';
$L['AdIpAddress_label'] = "Direccion IP del controlador de dominio";
$L['CreateDomain_label'] = 'Crear Dominio';

$L['installSuccessAd_notification'] = 'El proveedor de cuentas locales de Active Directory se instalo correctamente';
$L['LocalAdProvider_header'] = 'Proveedor de cuentas locales de Active Directory para  ${0}';
$L['LocalAdProviderUninstall_label'] = 'Desinstalar';
$L['LocalAdProviderDcChangeIp_header'] = 'Cambiar direccion IP del controlador de dominio';
$L['LocalAdProviderDcChangeIp_label'] = 'Cambiar IP';
$L['ChangeIPButton_label'] = 'Cambiar IP';
$L['LocalAdProviderDcChangeIp_message1'] = 'Cambiar la IP del controlador de dominio puede causar problemas a los clientes de Active Directory. Si ellos usan un servidor de DNS externo, actualizelo para usar la nueva direccion IP';
$L['dcChangeIpSuccess_notification'] = 'IP del controlador de dominio se cambio exitosamente';
$L['AdNsSambaRpmVersion_label'] = 'Version Samba DC';
