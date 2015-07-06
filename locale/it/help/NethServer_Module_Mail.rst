=====
Email
=====

Configura i servizi di posta elettronica

Domini
======

La tabella contiene l'elenco dei nomi di dominio internet per cui il
server accetterà mail in arrivo.

Crea / Modifica
---------------

Aggiunge un dominio all'elenco di quelli configurati per la ricezione
della posta.

Dominio
    Il nome di dominio, per esempio *nethesis.it*.
Descrizione
    Un campo opzionale utile all'amministratore di sistema per prendere nota
    di informazioni sul dominio.
Consegna localmente
    Selezionare questa opzione per configurare il server in modo
    che le mail in arrivo destinate al dominio specificato vengano salvate
    in cartelle locali.
Passa ad un altro server
    Selezionando questa opzione le mail in arrivo verranno
    inoltrate al server specificato.
Disclaimer (nota legale)
    E' possibile aggiungere automaticamente un messaggio legale (disclaimer)
    a tutte le email in uscita (non destinate al dominio).


Elimina
-------

Elimina il dominio da quelli gestiti dal server. Eventuali email
destinate al dominio verranno rifiutate.


Filtro
======

Configura le opzioni di filtraggio della mail (antivirus, antispam,
allegati vietati, etc).

Antivirus
    Abilita la scansione antivirus delle email in transito.
Antispam
    Abilita la scansione antispam delle email in ingresso.
Prefisso Spam
    Aggiunge il prefisso sottostante all'oggetto delle email riconosciute
    come spam.
Blocco allegati
    Il mail server bloccherà le email che contengono gli allegati dei tipi
    specificati.
Eseguibili
    Il mail server bloccherà i programmi eseguibili allegati alle email.
Archivi
    Il mail server bloccherà le email con allegati file di archivio (zip,
    rar, etc).
Lista personalizzata
    E' possibile definire un elenco di estensioni che verranno bloccate, per
    esempio doc, pdf, etc, (senza punto iniziale, doc e non .doc).

.. raw:: html

   {{{INCLUDE NethServer_Module_Mail_*.html}}}

Messaggi
========

Configura la gestione dei messaggi email.

Accetta messaggi fino a
    Utilizzare il cursore per selezionare la dimensione massima di un
    singolo messaggio email. Il server rifiuterà email più grandi del valore
    impostato, ritornando un errore esplicativo.

Tenta l'invio per
    Utilizzare il cursore per selezionare il tempo massimo per cui il server
    tenterà di inviare un messaggio. Quando verrà raggiunto il tempo massimo
    e l'email non sarà ancora stata consegnata, il mittente riceverà un
    errore e il messaggio verrà eliminato dalla coda di invio, il server non
    tenterà più di consegnarlo.

Spedisci sempre una copia (Bcc)
    Spedisci una copia nascosta (Blind carbon copy - Bcc) all'indirizzo email
    specificato per ogni messaggio che entra nel sistema di posta.

Invia tramite smarthost
    Il server tenterà di inviare le mail direttamente a
    destinazione (raccomandato nella maggior parte dei casi). Selezionando
    invece l'invio tramite smarthost, tenterà di consegnarli attraverso il server
    SMTP del provider (raccomandato in caso di connessione inaffidabile o
    ADSL di tipo residenziale, IP dinamico, etc).

Nome host
    Il nome del server mail del provider.

Porta
    La porta del mail server del provider.

Nome utente
    Se il server del provider richiede autenticazione, specificare il nome
    utente.

Password
    La password richiesta dal provider.

Consenti connessione non cifrata
    Normalmente, in caso di connessione autenticata (con utente e password),
    si utilizzerà una connessione cifrata. Selezionando questa opzione, sarà
    possibile anche usare una connessione non sicura per collegarsi al
    provider (sconsigliato, utilizzare con provider problematici).

Gestione coda
=============

La scheda permette di gestire la coda di email in transito nel server.
La tabella elenca tutte le mail in attesa di essere consegnate,
normalmente è vuota. Verranno mostrati i seguenti campi:

* Id: identificativo del messaggio
* Mittente: l'indirizzo email di chi ha inviato il messaggio
* Dimensione: la grandezza in byte della mail
* Data: la data in cui è stata creata la mail
* Destinatari: l'elenco dei destinatari


Elimina
-------

E' possibile eliminare una mail in coda, per esempio una mail inviata
per errore o di grandi dimensioni.

Elimina tutti
-------------

Il pulsante eliminerà tutte le email in coda.

Tenta l'invio
-------------

Normalmente, il server, in caso di problemi durante l'invio della mail,
ritenta ad intervalli regolari. Facendo clic su Tenta l'invio, le email
verranno inviate immediatamente.

Aggiorna
--------

Ricarica l'elenco delle mail in coda.

Accesso SMTP
============

Consenti relay dai seguenti indirizzi IP
    Consente di spedire messaggi di posta dagli IP specificati, senza
    richiedere l'autenticazione SMTP o altre misure di sicurezza.
    Questa opzione è ideale per vecchi apparati di rete che non
    supportano il protocollo SMTP/AUTH.

Consenti relay dalle reti fidate
    Consente di spedire messaggi da qualsiasi host nelle reti fidate,
    senza richiedere l'autenticazione SMTP o altre misure di
    sicurezza.

Abilita autenticazione sulla porta 25
    I client di posta dovrebbero inviare messaggi solo tramite la
    porta submission 587. Per ambienti preesistenti, questa opzione
    abilita l'autenticazione SMTP e il relay dei messaggi anche sulla
    porta 25.
