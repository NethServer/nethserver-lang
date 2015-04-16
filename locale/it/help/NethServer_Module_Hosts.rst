===
DNS
===

Il DNS (Domain Name System) si occupa della risoluzione dei nomi di
dominio (es. www.nethesis.it) nei loro corrispettivi indirizzi numerici
(es. 10.11.12.13) e viceversa. il server demanda la risoluzione dei
nomi ai server DNS configurati, ma permette di specificare indirizzi
arbitrari per nomi selezionati. Per esempio, è possibile configurare il
sistema per rispondere alle richieste per l'IP del sito facebook.com con
0.0.0.0, ottenendo l'effetto di rendere irraggiungibile il sito
facebook.com.

Server DNS
==========

Fare clic su Configura per immettere gli indirizzi dei server DNS che
il server contatterà per la risoluzione dei nomi.

DNS primario
    L'indirizzo del server principale da contattare per la risoluzione nomi (obbligatorio).

DNS secondario
    L'indirizzo del server secondario da contattare nel caso in cui il primario non risponda (opzionale).

Host
====

Crea / Modifica
---------------

Fare clic su Crea per assegnare un nome host ad un indirizzo IP. Il
server ritornerà l'IP configurato per le richieste del relativo nome
host.

Nome host
    Il nome di dominio, per esempio www.nethesis.it. E' possibile creare
    nomi per il dominio locale, utile per dare un nome mnemonico ad
    apparati configurati con IP statico oppure per qualsiasi dominio,
    che avranno la precedenza sui server DNS del provider (vedere
    esempio di facebook.com sopra).

Indirizzo IP
    L'IP del nome host.

Descrizione
    Una descrizione opzionale per commentare il nome host (esempio:
    "blocco facebook" oppure "server video").


Alias server
============

Gli alias sono nomi alternativi per questo server. Per esempio, se il
server si chiama *server.mycompany.com*, un alias potrebbe essere
*mail.mycompany.com*. Il server risponderà con il proprio indirizzo IP
alle richieste per il nome alias indicato.

Crea / Modifica
---------------------

Consente la creazione di un nuovo alias per questo server.

Nome host
    Il nome host che si desidera aggiungere o modificare. Può contenere solo
    lettere, numeri e trattini e deve iniziare con una lettera o un numero.

Descrizione
    Una descrizione opzionale utile a identificare l'alias.

