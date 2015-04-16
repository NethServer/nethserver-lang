==================
Cartelle condivise
==================

Una cartella condivisa (conosciuta anche come I-bay) è una risorsa a
cui si può accedere in base ai servizi installati nel sistema e ai
permessi impostati da questo modulo.

Crea nuovo / modifica
---------------------

A seconda dei servizi installati sul sistema saranno visibili diverse schede.

Generale
^^^^^^^^

Nome
    Il nome della cartella condivisa può contenere solo lettere
    minuscole, numeri, punti, trattini e underscore e deve iniziare con
    una lettera. La lunghezza massima consentita del nome è 12
    caratteri.

Descrizione
    Campo opzionale per una breve descrizione della cartella condivisa.

Gruppo proprietario
    Il gruppo proprietario della cartella condivisa, solo i membri del
    gruppo potranno accedere.

Consenti scrittura al gruppo proprietario
    Consenti l'accesso in scrittura ai membri del gruppo proprietario.

Consenti lettura a tutti
    Accesso in lettura a chiunque si connetta al sistema, anche da reti pubbliche.

.. raw:: html

   {{{INCLUDE NethServer_Module_SharedFolder_Plugin_*.html}}}


ACL
^^^

Le Access Control List (lista di controllo accessi) consentono di
specificare i permessi di accesso alla cartella condivisa per singoli
utenti o gruppi, in aggiunta a quelli del gruppo proprietario.

Lettura
    Consenti o nega l'acceso in lettura all'utente o gruppo selezionato.  

Scrittura
    Consenti o nega l'acceso in scrittura all'utente o gruppo selezionato.


Elimina
-------

Rimuove la cartella e tutto il suo contenuto. *L'eliminazione non è
reversibile!* L'unico modo per recuperare il contenuto di una cartella
condivisa eliminata è ripristinare un backup.

Reimposta permessi
------------------

Imposta ai valori configurati tramite questo modulo il gruppo
proprietario e le ACL. L'operazione sarà eseguita ricorsivamente su
tutti i file e le sottocartelle della cartella condivisa.

