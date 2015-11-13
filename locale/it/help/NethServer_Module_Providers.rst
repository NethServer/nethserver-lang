=========
Multi WAN
=========

Se si dispone di più di una connessione ad Internet,
è necessario configurare i dati relativi alla singole WAN
(provider) e stabilire le politiche d'uso (per esempio favorire una connessione).



Configura
=========

Selezionare la politica di gestione dei provider:

* Balance per utilizzare contemporanemaente tutte le connessioni
* Active-Backup per usare le connessioni di minor peso solo in caso di problemi al provider con la priorità maggiore

IP di controllo
     Uno o più indirizzi IP separati da virgola a cui verrà inviato un pacchetto ping ICMP ad intervalli regolari.
     In caso di mancata risposta ai ping, il sistema disabilita il provider, ma continua a verificare 
     la raggiungibilità dell'IP di controllo, per poter riabilitare il provider.
     E' ammesso un indirizzo IP o una lista di IP separati da virgola.
     Utilizzando una lista di IP, il provider verrà disabilitato solo se tutti gli IP sono irraggiungibili.

Link status monitor
     Questo gruppo di opzioni controlla la reattività di LSM (Link Status Monitor), che verifica
     la raggiungibilità di ogni provider.
     Opzioni disponibili:
     * Intervallo ping: numero di secondi tra i ping all'IP di controllo (default 5 secondi)
     * # di pacchetti persi: massimo numero di pacchetti consecutivi persi/ricevuti per disattivare/riattivare il provider
     * % di pacchetti persi: soglia percentuale di pacchetti persi/ricevuti per disattivazione/ripristino provider

Invia mail di notifica in caso di disattivazione/ripristino provider
     Se abilitato, il sistema invierà una mail quando un provider cambia stato.
     Opzioni disponibili:
     * Mittente: indirizzo mail che verrà utilizzato come mittente della mail di notifica (From:)
     * Destinatario: indirizzo mail a cui verranno inviate le notifiche (To:)


Crea o Modifica
===============

Modifica la configurazione del provider.

Nome
    Un nome per identificare la connessione (ISP). Max 5 caratteri.

Abilitato/Disablitato
    Abilita o disabilita il provider.

Peso
    Il "peso" della connessione. A peso maggiore verrà proporzionalmente
    instradato più traffico dati, quindi, per esempio,
    un provider con peso 100 riceverà il doppio del traffico di uno con peso 50.
    Se si dispone di due linee con disponibiltà di banda diversa, per esempio una doppia dell'altra, 
    sarà necessario assegnare peso doppio alla più veloce rispetto alla più lenta.
    Nella modalità acrive-backup, il peso determina l'uso della linea. 
    Se il provider 1 ha peso 100 e il 2 50, il traffico verrà sempre inviato al provider 1, passando al 2 solo in caso di problemi all'1.

Descrizione
    Una descrizione opzionale per riconoscere il provider.

