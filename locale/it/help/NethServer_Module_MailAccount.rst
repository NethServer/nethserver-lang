===============
Email addresses
===============

Associa un indirizzo email alle mailbox (caselle di posta) degli utenti e
condivise.

Mailbox utente
==============

Modifica
^^^^^^^^

Accesso ai servizi email
    Abilita o disabilita l'accesso SMTP, IMAP e POP3 per l'utente

Inoltra messaggi
    Le email inoltrate saranno comunque salvate nella casella email dell'utente.

Tieni una copia sul server
    I messaggi inoltrati saranno comunque salvati nella mailbox dell'utente

Quota email personalizzata
    Permette di specificare un valore di quota diverso da quello di default.

Personalizza tempo di permanenza delle email di spam.
    Le email di spam vengono eliminate ad intervalli regolari. Spuntando la
    casella è possibile stabilire per quanti giorni i messaggi classificati come
    spam arrivati a questo utente verranno mantenuti nel sistema prima di
    essere eliminati.

Mailbox condivise
=================

Crea nuovo / modifica
^^^^^^^^^^^^^^^^^^^^^

Nome
    Il nome dovrebbe essere una stringa descrittiva e sarà mostrato dai client IMAP
    e dalle applicazioni web per la posta elettronica.

Gruppi proprietari
    Scegli uno o più gruppi di utenti a cui saranno concessi i permessi di lettura
    e scrittura sulla cartella condivisa.

Crea alias
    Crea automaticamente un alias pubblico per questa mailbox condivisa

Accesso speciale
    Le ACL IMAP impostate mediante altri client di posta elettronica saranno 
    elencate qui.

Elimina
^^^^^^^

Elimina la mailbox condivisa e tutti i suoi contenuti.


Mail alias
==========

Crea l'associazione tra un nuovo indirizzo email e le mailbox utenti, mailbox
condivise e indirizzi email esterni.

Crea nuovo / Modifica
^^^^^^^^^^^^^^^^^^^^^

Crea l'associazione tra un nuovo indirizzo di posta elettronica ed un
utente o a un gruppo già presente nel sistema.

Indirizzo email
    Specificare nel campo di testo solo la parte prima del carattere
    **@**. Scegliere poi dal menù a tendina se l'indirizzo è per un
    dominio specifico o per *tutti i domini* presenti nel sistema.

Destinazioni
    Selezionare gli utenti e le cartelle condivise da associare
    all'indirizzo email.  I nomi di gruppi saranno automaticamente espansi nella
    lista dei membri all'istante della modifica.

Solo reti locali
    Abilitando questa opzione verrà bloccata la ricezione di messaggi
    provenienti da mittenti esterni.

Elimina
^^^^^^^

Elimina l'indirizzo di posta elettronica. Questo non influisce sui
messaggi già recapitati. Futuri messaggi destinati all'indirizzo saranno rifiutati.
