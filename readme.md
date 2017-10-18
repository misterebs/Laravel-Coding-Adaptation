# Laravel Coding Adaptation

A simple, clean and beautiful blogging application written in Laravel 5.1.

curl -sS https://getcomposer.org/installer | php

php composer.phar install

mv composer.phar /usr/local/bin/composer

git clone https://github.com/misterebs/Laravel-Coding-Adaptation.git

composer install

php artisan migrate

php artisan db:seed

NB : Edit file .env sesuai database dan lakukan generating key via php artisan key:generate
