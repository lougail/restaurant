#!/bin/bash

# supprime la BDD puis la recrée.
php artisan db:wipe && php artisan migrate