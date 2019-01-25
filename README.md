<p align="center">
  <img src="https://laravel.com/assets/img/components/logo-laravel.svg">
 <img src="https://jwt.io/img/logo-asset.svg" width="170">
</p>

Isjeady Youtube Video [Youtube](https://www.youtube.com/channel/UC1fhZ1C2E-UOZjeIvm1XpWw) e [isjeady.com](https://isjeady.com) 

# Progetto Laravel+Jwt laravel-vuejs-jwt-auth

## Cloniamo il Repository

- Assicurati di avere installato Git sul sistema,scrivendo sulla linea di comando
```
git --version
```
Se il comando risponde hai Git sul tuo Pc altrimenti [Clicca Qui](https://git-scm.com/download/win) per scaricarlo e installarlo.

- Esegui il Comando
```
git clone https://github.com/jimfrenette/laravel-vuejs-jwt-auth.git
```
- Ora spostati nel directory del progetto con il seguente comando
```
cd laravel-vuejs-jwt-auth\
```
## Installiamo le Dipendenze

- Ora sei all'interno della cartella del project lancia il comando
```
composer install
```
per installare tutte le dipendenze,se il non hai composer installalo, [Clicca Qui](https://getcomposer.org/download/).
Per installare tutto avrà bisogno di un po di tempo.

## Configuriamo il file di Config di Laravel .env

- Copia o Duplica il file .env.backup in un file rinominandolo .env oppure lancia il seguente comando
```
cp .env.backup .env
```
- Apri il file con un editor di testo e modifica le seguenti righe con i tuoi parametri di connessione al Db Mysql,
Nome Database,Username e Password.Il Database lo devi creare manualmente,puoi utilizzare un tool che utilizzo io
nei video per facilitarti la creazione ovvero  [Heidisql](https://www.heidisql.com/)

```
DB_DATABASE=laravelisjeady
DB_USERNAME=root
DB_PASSWORD=root
```
Salva il file una volta configurato e lancia il comando:
```
php artisan migrate
```
Se hai configurato correttamente la connessione non dovresti avere problemi in questa fase.

## Comandi Laravel

- Importare i dati all'interno del Database Sql,esegui il comando:
```
php artisan db:seed --class=ImportSqlSeeder
```
- Ora possiamo lanciare il server Laravel con il comando

```
php artisan serve
```
- L'applicazione è pronta, se hai qualche problema durante queste fasi scrivimi pure alla mail **info@isjeady.com**


## Librerie utilizzate e Version Framework
Using Laravel to build JSON Web Token based authentication with a Vue.js user interface

http://jimfrenette.com/2016/09/laravel-vuejs-jwt-auth/

Versions that were used in this tutorial

* Laravel 5.2
* Laravel Elixir Vueify v1.0.6
* JWT Auth v0.5.9
* Vue v1.0.26
* Vue Resource v1.0.1
* Vue Router v0.7.13
