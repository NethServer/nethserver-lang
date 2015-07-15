.. --initial-header-level=2

L2TP/IPsec
==========

Questo tipo di VPN è disponibile di default su tutti i terminali
Android, iOS e sui sistemi Windows e consente l'accesso sicuro del
terminale da Internet alla rete privata aziendale.

Abilita L2TP
   Attivando L2TP è necessario impostare il ruolo 
   "Controller di dominio" (PDC) nel modulo "Rete Windows", 
   altrimenti l'autenticazione dei client fallirà.

Autenticazione IPsec
   Indica il tipo di autenticazione utilizzata dai client.  Se non è
   possibile importare un certificato nel client, si consiglia l'uso
   di PSK anche se meno sicura.

   * RSA: autenticazione basata sui certificati (si veda la sezione
     *Account*)
   * PSK (Pre-Shared Key): autenticazione basata su una chiave
     condivisa fra client e server.  Si consiglia di scegliere la
     chiave con gli stessi criteri di sicurezza usati per le password.

Indirizzi di rete
   Rete degli host remoti. Es: 192.168.78.0

Maschera di rete
   Maschera di rete degli host remoti. Es: 255.255.255.0

