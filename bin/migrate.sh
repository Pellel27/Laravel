#!/bin/bash

#supprimer la base de donnée et la recré
php artisan db:wipe && php artisan migrate