===
FTP
===

Il modulo consente di abilitare/disabilitare il server FTP e di configurare
gli utenti virtuali.


Utenti
======


Crea o modifica
---------------

Crea o modifica un utente virtuale.
Un utente virtuale non è un utente di sistema e può accedere esclusivamente 
al server FTP.

Nome utente
    Il nome dell'utente virtuale.
    Può contenere solo lettere minuscole, numeri, trattini, punti e underscore (_) e deve iniziare con una lettera minuscola. 
    Per esempio "luisa", "mrossi" e "liu-jo" sono nomi utente validi, mentre "4amici", "Franco Neri" e "aldo/sbaglio" non lo sono.

Password
    La password dell'utente virtuale. La password verrà trasferita in chiaro dal client.

Abilita chroot utente nella home directory
    Se abilitato, l'utente potrà accedere solo alla sua home FTP.
    La home FTP è posizionata in ``/var/lib/nethserver/ftp/<user>``.
    Se disabilitato, l'utente può accedere a tutto il filesystem. Questa modalità è *sconsigliata*.

Directory chroot personalizzata
    L'utente potrà accedere solo alla directory indicata. 

    Questa funziona è utile qualora si voglia concedere ad un utente
    l'accesso ad una cartella condivisa usata per pubblicare un sito.
    Per restringere l'accesso ad una cartella condivisa, specificare ``/var/lib/nethserver/ibay/<name>``
    sostituendo a ``<name>`` il nome della cartella condivisa.

Abilitato/Disabilitato
    L'utente può essere abilitato o disabilitato.

Descrizione
    Descrizione opzionale dell'utente.
    Esempio: Utente per sito 

