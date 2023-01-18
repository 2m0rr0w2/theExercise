# Import data from swapi.dev
Laravel - Load data from https://swapi.dev/ to DB.  Alex Nechaev <br>
Used "guzzlehttp/guzzle" for GET requests to swapi.dev
Used many-to-many relation between `films` and `planets` tables.

<h1>Installation</h1>
1. <b>clone this repository</b> <br><br>
2. <b>modify .env database config</b>
<ul>
  <li>DB_CONNECTION=mysql</li>
  <li>DB_HOST=127.0.0.1</li>
  <li>DB_PORT=3306</li>
  <li>DB_DATABASE=`YOUR_DB_NAME`</li>
  <li>DB_USERNAME=`YOUR_USER_NAME`</li>
  <li>DB_PASSWORD=`YOUR_PASSWORD`</li>
</ul>

3) <b>install composer dependency</b><br>
composer install

4) <b>migrate and seed database, run development server</b>  <br>
php artisan migrate <br>
php artisan db:seed <br>
php artisan serve <br>

5)<b>Test by visit:</b> <br>
http://127.0.0.1:8000/films  <br>
http://127.0.0.1:8000/films/{id}  <br>
http://127.0.0.1:8000/planets  <br>
http://127.0.0.1:8000/planets/{id}  <br>


<h4>Notes / TO DO:</h4>
<ul>
  <li>Parse all fields, here i deal with `films` and `planets` relation and skipped some fields that may be added like others</li>
  <li>Use more efficient column types in DB. Now i use `string` in numerical columns with unhandled `undefined` values</li>
  <li>No views. Now just `echo` output from Controllers</li>
  <li>It is my first experience with laravel :) Need more than 1 day to achive better result((</li>
</ul>

 




