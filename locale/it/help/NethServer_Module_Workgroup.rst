============
Rete Windows
============

Gestisci il ruolo del server all'interno della rete Windows.

Ruolo
=====

Selezionare il ruolo che il sistema avrà all'interno della rete:
workstation, controller di dominio o membro di Active Directory.

Workstation
    Abilitando tale opzione il sistema si comporterà come una normale
    workstation.

Nome del gruppo di lavoro
    Identificatore del gruppo di lavoro, utile solo a sfogliare la rete.

Controller di dominio
    Abilitando tale opzione il sistema viene configurato come
    controller di dominio della rete.

Dominio
    Il nome del dominio.

Abilita profili roaming
    Se abilitato, il filo dell'utente viene salvalo sul server in modo
    che possa essere utilizzato indipendentemente dal computer su cui
    viene effettuato il login.

Membro di Active Directory
    Il server diventa membro di un dominio Active Directory esistente.
    È necessario essere in possesso delle credenziali
    dell'amministratore del dominio.

Realm
    Reame di Active Directory (per esempio *mydomain.local*).

Dominio
    Nome del dominio Active Directory.

Ramo LDAP degli account
    Individua la base della ricerca per i gruppi e gli utenti nel
    database LDAP. Il valore dipende da come è configurato Active
    Directory; un'impostazione tipica è ``ou=Qualcosa``. Le parti DC
    (Domain Component) sono aggiunte automaticamente.


Autenticazione Active Directory
-------------------------------

Inserire le credenziali per permettere al sistema di diventare membro
di un dominio Active Directory.

Nome utente
    Nome utente amministratore del Controller di Dominio Active
    Directory.

Password
    Password dell'utente amministratore del Controller di Dominio
    Active Directory.
            
