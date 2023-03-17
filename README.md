

## Passi da effettuare per UTILIZZARE questo template
1. Aprire questa repository su github e cliccare sul pulsante `Use this template > Create a new repository`
2. Clonare la repository appena creata su `VS Code`
3. Aprire il `terminale`
4. Copiare il file `.env.example` e rinominarlo in `.env`
5. Eseguire il comando `composer install`
6. Eseguire il comando `php artisan key:generate`
7. Eseguire il comando `npm i` o `npm install`
8. Aprire un secondo `terminale`
9. In uno dei due terminali, eseguire il comando `php artisan serve`. Nell'altro, `npm run dev`

CONSEGNA 14-3
oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

Milestone 1
Tramite gli appositi comandi artisan create un model OK con relativa migration OK e un resource controller OK.

Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
- index()   OK 
- show()    OK  
- create()  OK
- store()   OK

CONSEGNA 15-3
Lavorate sulla stessa repo di ieri e completate le operazioni CRUD.
Bonus:
tramite javascript, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.

CONSEGNA 17-3
Potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti.
Bonus:
- validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.
- utilizzare le Request personalizzate per validare i dati
