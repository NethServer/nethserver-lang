==========
Proxy POP3
==========

Il proxy POP3 intercetta le connessioni ai server esterni, 
scansionando tutte le mail in entrata, in modo da bloccare i virus ed etichettare lo spam. 
Da parte del client di posta il processo è assolutamente trasparente, 
l'utente crederà di collegarsi direttamente al server POP3 del proprio provider, 
mentre il server intercetterà tutto il traffico effettuando la connessione al server esterno.

Abilitato/Disabilitato
    Se abilitato, tutte le connessioni alla porta POP3 (110)
    verranno intercettate dal firewall ed indirizzate al proxy.

Antivirus
    Abilita il controllo antivirus sulle mail scaricate.

Antispam
    Abilita il controllo antispam sulle mail scaricate.

Scansione POP3s (porta 995)
    Abilita la scansione POP3 con SSL (POP3s):
    tutte le connessioni alla porta 995 verranno intercettate dal firewall ed indirizzate al proxy.
    Sarà compito del server stabilire una connessione sicura con i server esterni, mentre lo scambio dati con i client
    della LAN avverrà in chiaro.
    *NB*: i client dovranno essere configurati per collegarsi alla porta 995 ma dovranno disattivare la cifratura.

Lingua template mail
    In caso di rilevamento virus, il client viene notificato con uno speciale messaggio.
    Questo campo consente di scegliere la lingua del messaggio di notifica.
