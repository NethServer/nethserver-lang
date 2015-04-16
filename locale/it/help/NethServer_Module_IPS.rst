===
IPS
===

Consente di configurare il comportamento dell'IPS (Intrusion Prevention System).
L'IPS si occupa di analizzare tutto il traffico che attraversa il firewall alla ricerca di 
possibili attacchi e violazioni di policy.

In base alla configurazione, l'IPS può limitarsi a riportare la minaccia oppure può decidere
di bloccare il traffico.

Abilitato/Disabilitato
    Abilita o disabilita l'IPS

Policy regole
   Seleziona il gruppo di regole da applicare. Sono disponibili 4 policy:

   * Connectivity: controlla un vasto numero di vulnerabilità, non impatta su applicazioni realtime (es. VoIP)
   * Balanced: adatta alla maggior parte degli scenari, è un buon compromesso fra sicurezza e usabilità (consigliata)
   * Security: modalità molto sicura ma invasiva, può impattare sul funzionamento di applicazioni di chat e peer to peer
   * Esperto: l'amministratore deve procedere a selezionare manualmente le regole da linea di comando

