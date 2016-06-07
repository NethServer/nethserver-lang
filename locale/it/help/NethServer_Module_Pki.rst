======================
Certificato del server
======================

Questa pagina mostra i certificati SSL attualmente installati.

L'azione :guilabel:`Mostra` consente di visualizzare il certificato.

L'azione :guilabel:`Imposta come predefinito` imposta il certificato come predefinito. Le applicazioni useranno questo certificato a meno che non siano configurate diversamente

Il pulsante :guilabel:`Nuovo certificato Letsencrypt` consente di creare un nuovo certificato valido Let's Encrypt.

Il pulsante :guilabel:`Nuovo certificato CA` consente di creare un nuovo certificato auto-firmato.

Il pulsante :guilabel:`Upload certificato` consente di caricare un certificato da file.


Creare un certificato Let's Encrypt
===================================

Da questa pagina è possibile creare un nuove certificato valido con Let's Encrypt (https://letsencrypt.org/). Questo certificato verrà aggiornato automaticamente ogni 30 giorni.

Email per notifiche
    È l'email usata da Let's Encrypt per inviare le notifiche

Domini
    Un singolo certificato Let's Encrypt può essere valido perpiù domini e alias. Per esempio mail.nethserver.org, web.nethserver.org...
    I certificati wildcard (\*.nethserver.org) non sono supportati

quando il tasto :guilabel:`NUOVO CERTIFICATO LETSENCRYPT` viene premuto, questo server è testato da Let's Encrypt per assicurarsi che si abbiano i diritti di avere un certificato. Le condizioni necessarie sono:
* Il server deve essere raggiungibile dall'esterno sulla porta 80. Assicurarsi che la porta 80 sia pubblicamente raggiungibile. (è possibile verificare usando un sito come http://www.canyouseeme.org/)
* I domini per cui si richiede il certificato, devono essere nomi pubblici associati all'IP pubblico del server. Assicurarsi che i nomi dei domini puntino all'IP del server (è possibile verificare usando un sito come http://viewdns.info/)
