===
VPN
===

Configurazioni VPN possibili:

1. Collegamento di un terminale remoto alla rete interna
   (roadwarrior), basato su OpenVPN o L2TP/IPsec.

2. Collegamento di due reti remote (net2net), basato su OpenVPN.


Account
=======

La scheda Account consente la gestione degli utenti da utilizzare per
il collegamento VPN a questo server. Gli utenti possono essere di
sistema o dedicati esclusivamente alla VPN.

Crea nuovo
----------

Permette la creazione di un nuovo utente. Per ogni utente il sistema
creerà un certificato x509.

Solo VPN
    Il *Nome* sarà utilizzato per l'accesso VPN. Può contenere solo
    lettere minuscole, numeri, trattini, punti e underscore (\_) e
    deve iniziare con una lettera minuscola. Per esempio "luisa",
    "mrossi" e "liu-jo" sono nomi utente validi, mentre "4amici",
    "Franco Neri" e "aldo/sbaglio" non lo sono.

Utente di sistema
    Abilita l'accesso VPN ad un utente già presente nel sistema
    selezionandolo dal menu a tendina.

Rete remota
    Inserire questi dati solo quando si vuole creare una VPN
    net2net. Questi campi sono utilizzati dal server locale per creare
    correttamente le rotte verso le rete remota.
 
    * Indirizzo di rete: indirizzo di rete della rete remota. Es: 10.0.0.0 
    * Maschera di rete: maschera di rete della rete remota. Es: 255.255.255.0


Client
======

I client VPN consentono di collegare il server ad un altro server VPN
in modo da creare collegamenti net2net.  Al momento sono supportate
solo reti net2net di tipo OpenVPN.

Nome
    Identifica univocamente la VPN

Host remoto
     Nome host o indirizzo IP del server VPN remoto

Porta remota
     Porta UDP su cui il server remoto è in ascolto. Solitamente 1194.

Abilita compressione LZO
    La compressione dei dati LZO deve essere impostata allo stesso
    modo sia sul client che sul server.

Modalità
    Scegliere la stessa modalità configurata sul server.

    * Routed: gli host in VPN sono posizionati su una rete separata
      dalla rete LAN del server remoto
    * Bridged: gli host in VPN sono posizionati sulla rete LAN del
      server remoto

Autenticazione
    Scegliere la stessa modalità configurata sul server.

    * Certificato: incollare nell'apposito spazio il contenuto del
      certificato del client e della CA (Certification Authority)
    * Utente e password: inserire nome utente e password
    * Utente, password e certificato: inserire nome utente e password
      ed incollare il contenuto del certificato del client e della CA
      (Certification Authority)
    * Chiave condivisa: incollare nell'apposito spazio il contenuto
      della chiave condivisa (sconsigliato perchè poco sicuro)

.. raw:: html

   {{{INCLUDE NethServer_Module_VPN_*.html}}}

