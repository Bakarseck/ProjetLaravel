1-
    - create a projet vith the command:  composer create-project laravel/laravel nomProjet
2- 
    -configuration de la base de donnée au niveau du fichier .env
        DB_DATABASE=nom de votre base de données
        DB_USERNAME=nom utilisateur de votre DB : root by default
        DB_PASSWORD=password utilisateur de votre DB : empty by default
3-
    -install the breeze package with : composer require laravel/breeze --dev
        php artisan breeze:install
        php artisan migrate
        npm install
        npm run dev
4-
    -implentation de notre page d'accueil  :welcome.blade.php
5-
    -tester  login and register

------------------------------------git Clone---------------------------------------
1-
     - cloner notre ripo
-2
    -lancer dans le dossier raccine de notre la command: composer install
-3
    -lancer dans le dossier raccine de notre la command: php artisan key:generate 
         pour generer le APP_KEY de notre projet ki se trouver dans le fichier .env 
4-
    -tester l'application