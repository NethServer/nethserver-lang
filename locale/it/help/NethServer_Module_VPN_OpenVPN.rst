.. --initial-header-level=2

OpenVPN
=======

Configura il server OpenVPN sia per i collegamenti roadwarrior sia
net2net.

Quando si crea una rete net2net, è necessario eleggere uno dei due
server come master.  Il master dovrà avere il server roadwarrior
abilitato.  Il server slave dovrà invece configurare un client
nell'apposita sezione *Client*, avendo cura di inserire i dati della
rete remota.

Abilita server roadwarrior
    Consente di abilitare il server OpenVPN in modalità roadwarrior.
    Tale modalità prevede l'esecuzione di un server in ascolto sulla
    porta di default 1194 UDP. E' possibile connettere più client VPN.

Modalità autenticazione
    Permette di scegliere la modalità di autenticazione desiderata.
    Sono disponibili tre differenti metodi di autenticazione:
    
    * Utente e password: selezionare quando si desidera usare un
      utente di sistema
    * Certificato: selezionare quando si desiderare creare una VPN
      net2net
    * Utente, password e certificato: selezionare quando si desidera
      il massimo della sicurezza. L'utente deve essere un utente di
      sistema

Modalità routed
    Selezionare quando si desidera trasportare solo traffico IP. La
    rete della VPN è diversa da quella della LAN. (Modalità
    consigliata).

    Il server OpenVPN risponderà alle richieste DHCP provenienti dagli
    host remoti fornendo un indirizzo dalla rete configurata qui
    sotto:

    * Rete: rete riservata per gli host in VPN. Es: 10.1.1.0
    * Netmask: maschera di rete per gli host in VPN. Es: 255.255.255.0

Modalità bridged
    Selezionare quando si desidera trasportare anche traffico non IP
    (es. NetBIOS). In questa modalità gli host remoti avranno un
    indirizzo IP della LAN.

    Il server OpenVPN risponderà alle richieste DHCP provenienti dagli
    host remoti fornendo un indirizzo IP della LAN.  Se nella rete è
    presente un server DHCP, o se il sistema è il server DHCP stesso,
    stabilire un intervallo di IP al di fuori di quello configurato
    per il DHCP.  Inoltre assicurasi che gli IP nell'intervallo
    selezionato non siano associati staticamente a nessun host della
    rete aziendale.

    * Bridge: interfaccia brige associata
    * Inizio range IP: primo indirizzo IP del range
    * Fine range IP: ultimo indirizzo IP del range

Dirotta traffico dei client attraverso la VPN
    Disponibile solo in modalità *routed*.  Tutti i client collegati
    useranno questo server come default gateway.

Consenti traffico fra client
    Disponibile solo in modalità *routed*.  I client collegati
    potranno scambiarsi traffico di rete, ad esempio file con FTP.

Abilita compressione LZO
    Abilita la compressione LZO dei dati. E' necessario che la direttiva
    sia presente sia sul client che sul server. (Consigliato)

Porta UDP
    Porta di ascolto del server. Il default è 1194.
