=================
Gestione password
=================

Modifica la politica delle password. Se il campo è selezionato, la politica applica è *strong*,
altrimenti vale la politica *none*.

none
----
    Quando questa politica è abilitata, la password non deve rispettare criteri particolari ma
    la lunghezza minima è di 7 caratteri.

strong
------
  Questa politica (default) richiede che la password rispetti le seguenti regole:

    * lunghezza minima 7 caratteri
    * contenere almeno 1 numero
    * contenere almeno 1 carattere maiuscolo 
    * contenere almeno 1 carattere minuscolo
    * contenere almeno 1 carattere speciale
    * contenere almeno 5 caratteri diversi
    * non deve essere presente nei dizionari di parole comuni 
    * deve essere diversa dallo username
    * non può avere ripetizioni di pattern formati da più 3 caratteri (ad esempio la password As1.$As1.$ non è valida)


Password forti per utenti
    Abilita/disabilta le password forti per gli utenti (se non selezionato, viene applicata la politica 'none')

Password forti per l'amministratore
    Abilita/disabilta le password forti per l'amministratore (se non selezionato, viene applicata la politica 'none')

Durata massima password
    Numero massimo di giorni in cui è possibile mantenere la stessa password

Durata minima password
    Numero minimo di giorni per cui l'utente è costretto a mentenere la stessa password

Numero di giorni prima di inviare promemoria
    Un promemoria verrà inviato all'utente X giorni prima della scadenza password
