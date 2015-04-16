===============
Connettore POP3
===============

Gli indirizzi email esterni sono caselle di posta elettronica che
vengono controllate ad intervalli regolari tramite i protocolli **POP3**
o **IMAP**.  I messaggi ad essi recapitati vengono scaricati e
consegnati agli utenti o gruppi locali, in base alla configurazione
sottostante.

Indirizzi esterni
=================

Configura la lista degli indirizzi esterni e l'associazione con l'utente di sistema.

Crea / Modifica
---------------

Crea o modifica un indirizzo esterno.

Indirizzo email
    L'indirizzo email esterno da controllare.

Protocollo
    Il protocollo utilizzato per accedere al server remoto. Può essere *POP3* o *IMAP* (consigliato).

Indirizzo server
    Nome host o indirizzo IP del server remoto.

Nome utente
    Nome utente utilizzato per l'autenticazione dell'account remoto.

Password
    Password utilizzata per l'autenticazione dell'account remoto.

Account
    Seleziona l'utente o il gruppo a cui verranno consegnate i messaggi scaricati. 

Abilita SSL
    Abilita la cifratura della connessione con il server remoto.

Elimina messaggi scaricati
    Se abilitato, i messaggi scaricati verranno eliminati dal server remoto (consigliato). Lasciare disabilitato se si desidera mantenere
    una copia sul server remoto.

Elimina
-------

L'eliminazione di un account *non* comporta l'eliminazione dei messaggi già consegnati.


Scarica ora
-----------

Avvia immediatamente il controllo di tutte gli indirizzi esterni.


Generale
========

Abilita
    Consente di abilitare o disabilitare il demone Fetchmail che si
    occupa del download della posta dagli indirizzi esterni.

Controlla ogni
    Frequenza del controllo di nuovi messaggi sugli indirizzi esterni.
    Si consiglia un intervallo di 15 minuti.


