.. --initial-header-level=3

Samba
^^^^^

Samba fornisce servizi di condivisione di file e stampanti a client
SMB/CIFS (Condivisione file e stampanti di Windows).

Abilita Samba 
    Abilita l'accesso come "cartella condivisa" di Windows.

Cestino di rete
    Raccoglie i file eliminati da questa cartella condivisa, in modo
    analogo al cestino di Windows.

Mantieni file omonimi
    Se due file omonimi vengono eliminati, rimangono distinti nel
    cestino. Disabilitando questa opzione, l'ultimo sovrascrive il
    precedente.

Accesso guest
    Un *utente guest* rappresenta un utente la cui identificazione è
    fallita poiché non ha fornito credenziali o le ha fornite
    errate. Per gli utenti o i dispositivi che agiscono in questa
    modalità si possono concedere i seguenti permessi:

    * Nessuno
    * Sola lettura
    * Lettura e scrittura
