======
Utenti
======

L'utente di sistema è necessario per accedere a molti servizi erogati dal
server (email, cartelle condivise etc.).

Ogni utente è caratterizzato da una coppia di credenziali (utente e
password). Un utente appena creato rimane bloccato finché non viene
settata una password. Un utente bloccato non può utilizzare i servizi del
server che richiedono autenticazione.

Crea / Modifica
===============

Permette di creare o modificare i dati dell'utente. Il nome utente non
può essere cambiato dopo la creazione.

Utente
------

Informazioni di base sull'utente. Questi campi devono essere
necessariamente compilati.

Nome utente
    Il *Nome utente*, sarà utilizzato per accedere ai servizi. Può
    contenere solo lettere minuscole, numeri, trattini, punti e
    underscore (\_) e deve iniziare con una lettera minuscola. Per
    esempio "luisa", "mrossi" e "liu-jo" sono nomi utente validi, mentre
    "4amici", "Franco Neri" e "aldo/sbaglio" non lo sono.
Nome
    È il nome reale dell'utente. Per esempio "Mario"
Cognome
    Il cognome dell'utente
Gruppi
    Grazie alla barra di ricerca è possibile selezionare i gruppi ai
    quali aggiungere l'utente. L'utente può appartenere a più gruppi.

Cambia password
---------------

Permette di configurare per la prima volta, o modificare, la password dell'utente.

La password deve soddisfare i seguenti requisiti:

 * deve contenere almeno 5 caratteri diversi
 * non deve essere presente nei dizionari di parole comuni
 * deve essere diversa dallo username
 * non può avere ripetizioni di pattern formati da più 3 caratteri (ad esempio la password As1.$As1.$ non è valida)

Blocca / Sblocca
----------------

Consente di bloccare o sbloccare un utente. I dati dell'utente non
verranno eliminati.

Elimina
-------

Elimina l'utente. Tutti i dati dell'utente verranno cancellati.

Dettagli
--------

Questa sezione raccoglie le informazioni sull'organizzazione a cui
appartiene l'utente e sono facoltative. I valori di default si possono
specificare dalla voce del menù *Dati organizzazione*.

Per i seguenti campi è possibile specificare un valore personalizzato,
altrimenti vale l'impostazione effettuata dal modulo "Dati
organizzazione", disponibile solo per l'amministratore del sistema.

* Società
* Ufficio
* Indirizzo
* Città
* Telefono


Servizi
-------

Questa sezione contiene la lista dei servizi ai quali l'utente è
abilitato.

.. raw:: html

   {{{INCLUDE NethServer_Module_User_Plugin_*.html}}}
