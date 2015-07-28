====
DHCP
====

Il server DHCP (Dynamic Host Configuration Protocol) permette di
assegnare indirizzi IP ai client della rete locale in maniera
automatica.

Server
======

Configura il server DHCP.

Disabilitato
    Il server DHCP verrà disabilitato e i client della LAN non
    riceveranno l'indirizzo in maniera automatica da questo
    server. Selezionare questa opzione se è presente un altro server
    DHCP nella rete locale.

Abilitato
    Il server rilascerà indirizzi IP ai computer della rete locale
    (opzione consigliata).

Inizio intervallo
    Il primo indirizzo IP del range assegnabile ai client della LAN.

Fine intervallo
    L'ultimo IP del range, verranno assegnati indirizzi compresi tra
    Inizio e Fine.

IP gateway
    IP del gateway da inviare ai client DHCP.
    Se vuoto, il server sarà il gateway per tutti i client.

Tempo di lease
    Durata in secondi del lease degli IP.
    Se vuoto, il valore di default è 86400 secondi (24 ore).

Dominio
    Nome dominio da inviare ai client DHCP.
    Se valorizzato, il dominio verrà aggiunto nella risoluzione nomi dei client. 

Server DNS
    Lista di server DNS separata da virgole da inviare ai client DHCP.
    Se vuoto, il server stesso sarà il server DNS per tutti i client.

Server WINS
    Lista di server WINS separata da virgole da inviare ai client DHCP.
    Se vuoto, il server stesso sarà il server WINS per tutti i client.

Server NTP
    Lista di server NTP separata da virgole da inviare ai client DHCP.
    Se vuoto, il server stesso sarà il server NTP per tutti i client.

Server TFTP
    Lista di server TFTP separata da virgole da inviare ai client DHCP.
    Se vuoto, il server stesso sarà il server TFTP per tutti i client.

Riserva IP
==========

Crea / Modifica
---------------

Aggiunge una nuova assegnazione statica (reservation) al server DHCP.
L'apparato con l'indirizzo MAC specificato riceverà sempre l'indirizzo
IP inserito.

Nome host
    Il nome host che si vuole assegnare al client della LAN insieme
    all'indirizzo IP.

Descrizione
    Una descrizione opzionale per identificare l'apparato.

Indirizzo IP
    L'indirizzo IP che si desidera assegnare.

Indirizzo MAC
    L'indirizzo MAC dell'apparato di rete (es:
    11:22:33:44:55:66:77:88).
