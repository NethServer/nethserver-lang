======================
Certificato del server
======================

Questa pagina mostra i certificati X.509 attualmente installati per cifrare le
comunicazioni TLS/SSL.

L'azione :guilabel:`Mostra` consente di visualizzare il certificato e impostare 
il certificato di default.

Il pulsante :guilabel:`Carica certificato` consente di caricare un certificato
da file.

Il pulsante :guilabel:`Richiedi certificato Let's Encrypt` modifica la configurazione
di `Let's Encrypt`_ e invia una nuova richiesta di certificato.

Il pulsante :guilabel:`Modifica certificato auto-firmato` consente di modificare
il certificato auto-firmato, generandone uno nuovo.

.. _`Let's Encrypt`: https://letsencrypt.org/

Creare un certificato Let's Encrypt
===================================

Da questa pagina è possibile creare un nuove certificato valido con Let's Encrypt (https://letsencrypt.org/). Questo certificato verrà aggiornato automaticamente ogni 30 giorni.

Email per notifiche
    È l'email usata da Let's Encrypt per inviare le notifiche. |product|
    controlla comunque la validità dei certificati installati e avvisa l'utente
    ``root`` tramite email se un certificato è scaduto.

Domini
    Un singolo certificato Let's Encrypt può essere valido per più domini e
    alias. Per esempio mail.nethserver.org, web.nethserver.org... I certificati
    wildcard (\*.nethserver.org) non sono supportati.

Quando il tasto :guilabel:`Richiedi certificato Let's Encrypt` viene premuto,
questo server è testato da Let's Encrypt per assicurarsi che si abbiano i
diritti di avere un certificato. Le condizioni necessarie sono:

* Il server deve essere raggiungibile dall'esterno sulla porta 80. Assicurarsi
  che la porta 80 sia pubblicamente raggiungibile. (è possibile verificare usando
  un sito come http://www.canyouseeme.org/).

* I domini per cui si richiede il certificato, devono essere nomi pubblici
  associati all'IP pubblico del server. Assicurarsi che i nomi dei domini
  puntino all'IP del server (è possibile verificare usando un sito come
  http://viewdns.info/).
