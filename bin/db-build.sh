#/bin/bash

#equivalent migrate:fresh
#php artisan db:wipe
#php artisan migrate

php artisan migrate:fresh

#san parametre, c'est la classe DatabaseSeeder qui est utilisée
php artisan db:seed
