

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
- index() OK 
- show()
- create()
- store()
