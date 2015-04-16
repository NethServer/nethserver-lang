===
UPS
===

La gestione di un gruppo di continuità (UPS - Uninterruptible Power
Supply) collegato al server è affidata a NUT (Network UPS Tools), che
provvederà ad effettuare uno shutdown in caso di assenza di
alimentazione. NUT supporta diversi modelli di gruppi di continuità,
collegabili con apposito cavo seriale o USB.

In questo pannello si effettuano le configurazioni di NUT, per
visualizzarne il funzionamento occorre accedere alla Dashboard.

Abilita NUT UPS
    Abilita o disabilita il servizio NUT.

Modalità
========

Master
    Questa modalità va selezionata se l'UPS è collegato
    direttamente al server tramite cavo seriale o USB.

Cerca driver per modello
    Consente di cercare un driver compatibile con il proprio modello di UPS. Dopo aver selezionato il modello dall lista, 
    il campo *Driver* verrà valorizzato con il nome del driver opportuno.

Driver
    I driver da utilizzare per il modello di UPS collegato.

Device
    La porta fisica a cui è collegato l'UPS. Fra parentesi è riportato il nome del device UNIX, nel caso di collegamento USB
    il nome del device è calcolato automaticamente.

Slave
    Questa modalità deve essere utilizzata se l'UPS non è collegato
    direttamente al server, ma ad un altro server con NUT configurato
    in modalità Master al quale il server si collegherà.

Indirizzo server master
    Indirizzo IP o nome host del server master. Il client utilizzerà l'utente *UPS* per collegarsi al server master.
    Assicurarsi che tale utente sia configurato nel server master.

Password
    La password da specificare qui è quella configurata sul server
    master per la connessione dello slave.
