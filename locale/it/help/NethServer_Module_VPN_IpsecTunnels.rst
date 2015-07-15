.. --initial-header-level=2 

Tunnel IPsec
============

I tunnel possono essere usati per creare connessioni sicure fra reti (net2net),
infatti tutto il traffico all'interno del tunnel IPsec è cifrato.
La modalità tunnel supporta anche il NAT traversal.

Crea/Modifica
-------------

Crea o modifica un tunnel IPsec.

Nome
    Nome univoco che identifica il tunnel.

Abilita tunnel
    Se selezionato, il tunnel verrà abilitato dopo aver premuto il tasto di salvataggio.
    I tunnel verranno avviati anche in fase di boot del server.

Chiave condivisa
    Password segreta per cifrare il traffico. Deve essere lunga almeno 6 caratteri.

Reti locali
    Lista separata da virgole di reti locali che saranno accessibili dall'altro lato del tunnel.

Identificatore locale
    Un nome speciale usato per identificare il tunnel sul lato locale.
    Se lasciato vuoto, il sistema creerà automaticamente un nome identificativo.

IP remoto
    Indirizzo IP remoto dell'altro lato del tunnel.

Reti remote
    Lista separata da virgole di reti remote che saranno accessibili da questo lato del tunnel.

Identificatore remoto
    Un nome speciale usato per identificare il tunnel sul lato remoto.
    Se lasciato vuoto, il sistema creerà automaticamente un nome identificativo.

Abilita DPD (Dead Peer Detection)
    Riavvia il tunnel se un peer non è raggiungibile.
    Usare con cautela poichè il tunnel può diventare instabile.

Abilita PFS (Perfect Forward Secrecy)
    Assicura che le chiavi di sessioni non possano essere compromesse se la chiave condivisa è stata rubata.

Abilita compressione
    Prova sempre a negoziare la compressione del traffico.

Fase 1(IKE) e Fase 2 (ESP): Automatico
    Se selezionato, l'algoritmo di cifratura, l'agoritmo di integrità, il gruppo Diffie-Hellman e
    la durata della chiave sono negoziati durante la creazione del tunnel.

    Questa è la configurazione raccomandata.

Fase 1(IKE) e Fase 2 (ESP): Personalizzato
    Se selezionato, l'algoritmo di cfratura, l'algoritmo di integrità, il gruppo Diffie-Hellman e
    la durata della chiave possono essere cambiati.

    La configurazione deve essere uguale in entrambi i lati del tunnel.

Durata chiave (secondi)
    Validità della chiave prima che venga negoziata nuovamente.



