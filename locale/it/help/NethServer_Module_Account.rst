
======
Utenti
======

L'utente di sistema è necessario per accedere a molti servizi erogati dal server
(email, cartelle condivise etc.).

Ci si può connettere ad un *Account provider* LDAP o Active Directory **remoto**
o installarne uno **locale**. La creazione e modifica degli utenti e gruppi è
disponibile solo se si è installato un Account provider **locale**. Se se ne usa
uno **remoto** le liste degli utenti e dei gruppi sono in **sola lettura**.

Ogni utente è caratterizzato da una coppia di credenziali (utente e password).
Un utente appena creato rimane bloccato finché non viene settata una password.
Un utente bloccato non può utilizzare i servizi del server che richiedono
autenticazione.

Crea / Modifica
===============

Permette di creare o modificare i dati dell'utente. Il nome utente non può
essere cambiato dopo la creazione.

Utente
------

Informazioni di base sull'utente. Questi campi devono essere necessariamente
compilati.

Nome utente
    Il Nome utente, sarà utilizzato per accedere ai servizi. Può contenere solo
    lettere minuscole, numeri, trattini, punti e underscore (_) e deve iniziare
    con una lettera minuscola. Per esempio "luisa", "mrossi" e "liu-jo" sono
    nomi utente validi, mentre "4amici", "Franco Neri" e "aldo/sbaglio" non lo
    sono.

Nome
    È il nome reale dell'utente. Per esempio "Mario Rossi"

Gruppi
    Grazie alla barra di ricerca è possibile selezionare i gruppi ai quali
    aggiungere l'utente. L'utente può appartenere a più gruppi.

Abilita scadenza password
    Se abilitato, la password dell'utente dovrà essere modificata trascorso il
    periodo di tempo definito nella pagina "Gestione password".

Shell remota (SSH)
    Consente all'utente di accedere da remoto mediante la shell sicura SSH.

Imposta password / Cambia password
----------------------------------

Permette di configurare per la prima volta, o modificare, la password
dell'utente.

La password deve soddisfare i seguenti requisiti:

* deve contenere almeno 5 caratteri diversi

* non deve essere presente nei dizionari di parole comuni

* deve essere diversa dallo username

* non può avere ripetizioni di pattern formati da più 3 caratteri (ad esempio la
  password As1.$As1.$ non è valida)

Blocca / Sblocca
----------------

Consente di bloccare o sbloccare un utente. I dati dell'utente non verranno
eliminati.

Elimina
-------

Elimina l'utente. Tutti i dati dell'utente verranno cancellati. Questa azione è
disponibile solo se è stato installato un sistema di autenticazione su questa
macchina

======
Gruppi
======

Consente la creazione, la modifica o la rimozione di gruppi di utenti utilizzati
per assegnare servizi e permessi di accesso agli utenti.

Crea / Modifica
===============

Gruppo
------

Consente la creazione di un nuovo gruppo e l'associazione dei relativi membri.

Nome gruppo
    Può contenere solo lettere minuscole, numeri, trattini, punti e trattino
    basso (underscore) e deve iniziare con una lettera minuscola. Per esempio
    "vendite", "beta3" e "riv_net" sono nomi validi, mentre "3d", "Ufficio
    Vendite" e "q&a" non lo sono.

Membri
    Consente di ricercare gli utenti presenti sul server. Gli utenti si
    associano al gruppo con il tasto Aggiungi. Per eliminare gli utenti elencati
    usare il pulsante *X*.

Elimina
=======

Questa azione consente di rimuovere un gruppo.  Eventuali cartelle condivise
associate al gruppo non vengono eliminate.

