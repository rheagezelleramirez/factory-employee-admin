#!/bin/bash

cp .env.example .env

composer install

npm install

php artisan key:generate

php artisan config:clear

php artisan serve & npm run dev