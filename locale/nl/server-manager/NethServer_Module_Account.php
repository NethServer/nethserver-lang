<?php

$L['Account_Title'] = 'Gebruikers en groepen';
$L['Account_Description'] = 'Beheer gebruikers en groepen, configureer het domein en authenticatie providers';
$L['Account_Tags'] = 'sssd gebruiker groep realm domein account kerberos ldap';
$L['Select_Title'] = 'Backend keuze';

$L['AuthProvider_header'] = 'Selecteer de gebruiker- en groepprovider voor domein "${0}"';
$L['Provider_none_label'] = 'Geen (uitgeschakeld)';
$L['Provider_ldap_label'] = 'LDAP';
$L['Provider_ad_label'] = 'Active Directory';
$L['AdDns_label'] = 'DNS server IP adres';
$L['LdapUri_label'] = 'Server IP adres';
$L['BindProvider_label'] = 'Bind';
$L['NetbiosDomain_label'] = 'NetBIOS domein';

$L['login_label'] = 'Gebruikersnaam met admin rechten';
$L['password_label'] = 'Wachwoord';
$L['Join_label'] = 'Toevoegen';
$L['Authenticate_header'] = 'Voeg toe aan het AD domein met admin gebruikers rechten';

$L['NoConfig_header'] = 'Domain ${0}';

$L['AccountProvider_Error_22'] = 'Account provider fout: ongeldige DN. Controleer Base DN, Groups DN en Users DN in Accounts provider configuratie';
$L['AccountProvider_Error_32'] = 'Account provider fout: geen inschrijving gevonden. Controleer de LDAP bind rechten en de Base DN in Accounts provider';
$L['AccountProvider_Error_34'] = 'Account provider fout: onjuist wachtwoord. Verifieer dat de server op de juiste wijze verbonden is met een domein';
$L['AccountProvider_Error_49'] = 'Account provider fout: onjuiste gebruikersnaam of wachtwoord (${0})';
$L['AccountProvider_Error_49_710'] = 'Onvoldoende toegangsrechten (49/710): kies andere gebruiker voor LDAP bind in Account provider configuratie';
$L['AccountProvider_Error_4'] = 'Account provider waarschuwing: limiet overschreden (${0})';
$L['AccountProvider_Error_104'] = 'Verbinding met account provider verbroken: verifieer dat de server SSL/TLS-verbinding ondersteunt';
$L['AccountProvider_Error_110'] = 'Time-out bij verbinden met account provider';
$L['AccountProvider_Error_111'] = 'Account provider weigert verbinding';

$L['valid_platform,ad-dns,srv_record,1'] = 'Lijkt geen Active Directory domein controller te zijn';

$L['ChooseProvider_1'] = 'Gebruikers en groepen zijn beschikbaar middels de account provider. U kunt deze server verbinden met een externe account provider of zelf een lokaal installeren.';
$L['ChooseProvider_2'] = 'Er zijn twee soorten account provider:';
$L['ChooseProvider_3'] = 'Active Directory: met name geschikt voor Windows-netwerken, gebruikers kunnen gedeelde mappen met hun eigen gebruikersnaam en wachtwoord benaderen. ';
$L['ChooseProvider_4'] = 'LDAP: eenvoudige installatie en gebruik, gedeelde mappen zijn toegankelijk zonder wachtwoord.';
$L['ChooseProvider_5'] = 'Configureer een externe accounts provider';
$L['ChooseProvider_6'] = 'Installeer een lokale accounts provider; eenmaal geïnstalleerd mag deze niet meer verwijdert worden';
$L['ChooseProvider_7'] = 'Gedeelde mappen zijn beschikbaar na installatie van de bestands-server-module.';
$L['configureButton_label'] = 'Configureer';
$L['softwareCenterButton_label'] = 'Installeer';
$L['dismissButton_label'] = 'Nee, bedankt!';