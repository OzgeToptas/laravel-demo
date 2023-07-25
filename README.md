# Project Setup

## Installation with Docker

-   Run `composer require laravel/sail --dev` and install the laravel sail package
-   If an error occurs, for example, if the php packages are missing, open the php ini file for example ;ext-fileinfo package at the beginning; You need to uncheck it and restart php
-   Copy the sample env file with the `copy .env.example .env` command
-   We install sail with `php artisan sail:install` command and select mysql by pressing 0 in the menu that appears.
-   We start the docker installation with the command `./vendor/bin/sail up`
-   Login to PHP container running in Sail environment with `./vendor/bin/sail shell`
-   Create database and tables with `php artisan migrate --seed` command

### Normal setup

-   Install laravel packages with `composer i`
-   Copy the sample env file with the `copy .env.example .env` command
-   We fill in the DB_DATABASE, DB_USERNAME and DB_PASSWORD fields in the .env file according to our own mysql information
-   Create database and tables with `php artisan migrate --seed` command
-   Start the project with the `php artisan serve` command

```
Note, if there is an error, the pdo_mysql and mysqli packages may not be installed. Open the php.ini file and open the php.ini file.
; at the beginning of pdo_mysql and mysqli; You may need to uncheck it and restart php and try again.
```
