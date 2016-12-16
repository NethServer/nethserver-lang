
.. raw:: html

   {{{INCLUDE NethServer_Module_SssdConfig_*.html}}}

================
Account provider
================

E' possibile connettere questo sistema ad un account provider **remoto** LDAP o
Active Directory. Per installare un account provider **locale** LDAP o Active
Directory andare alla pagina Software center.

LDAP
====

Indirizzo IP del server
    Inserire l'indirizzo IP o il nome host del server LDAP.

Active Directory
================

Dominio NetBIOS
    Questo valore conosciuto anche come "workgroup" può essere necessario per
    accedere a risorse tramite SMB, come le *Cartelle condivise*. E' impostato
    automaticamente alla prima parte del suffisso DNS. E' troncato alla lunghezza
    massima di 15 caratteri.

Indirizzo IP del server DNS
    Indirizzo IP del server DNS di dominio (di solito è lo stesso del domain
    controller stesso).

Impostazioni avanzate
=====================

Nome utente LDAP o Windows
    Specificare il DN per eseguire l'operazione BIND di LDAP. Il valore attuale
    del DN dipende dal server LDAP. Per esempio, potrebbe essere 
    ``uid=user,ou=People,dc=domain,dc=com``.  I server Active Directory ammettono
    l'uso di nomi in stile NT account, come ``COMPANY\user``.

Password
    La password per l'operazione BIND di LDAP. E' memorizzata in chiaro, in 
    formato testo, nel database e-smith *configuration*.

Base DN
    Esegue ogni ricerca LDAP sotto il dato DN.

User DN
    Se specificato, esegue la ricerca LDAP degli utenti sotto il dato DN,
    altrimenti ricade su :guilabel:`Base DN`.

Group DN
    Se specificato, esegue la ricerca LDAP dei gruppi sotto il dato DN,
    altrimenti ricade su :guilabel:`Base DN`.

URI per la connessione LDAP
    La sintassi dell'URI è ``ldap://`` o ``ldaps://`` come schema, il ``nome
    host`` o un ``indirizzo IP``, seguiti opzionalmente dal suffisso col numero
    della porta TCP (``389``, per esempio).

STARTTLS
    Per *default* con i provider LDAP, se una operazione BIND è richiesta e la
    connessione non è già protetta con SSL, allora viene tentata la cifratura
    mediante il comando STARTTLS.  Il valore *sì/no* scavalca questo
    comportamento.

