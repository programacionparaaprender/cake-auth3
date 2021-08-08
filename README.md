# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

https://book.cakephp.org/3/en/installation.html

composer create-project --prefer-dist cakephp/app cake-auth
composer create-project --prefer-dist cakephp/app:^3.9 cake-auth
composer create-project --prefer-dist cakephp/app:^3.4.2 cake-auth


1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist "cakephp/app:^3.8"
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist "cakephp/app:^3.8" myapp
```
### curso
https://www.udemy.com/course/cakephp-3-tutorial-with-user-authentication-and-admin/learn/lecture/7289684#overview

### paginas
https://bootswatch.com/yeti/#forms

### autenticación
https://book.cakephp.org/3/en/controllers/components/authentication.html
https://www.youtube.com/watch?v=pTiby1mb17A
11:51


### migraciones
app_local.php colocar la data de base de datos
cd bin
./cake bake migration_snapshot Initial
./cake bake all users

### servidor cake
cd bin
./cake server

### error
 Action required!

     The CakePHP plugin installer v1.3+ no longer requires the
     "post-autoload-dump" hook. Please update your app's composer.json
     file and remove usage of
     Cake\Composer\Installer\PluginInstaller::postAutoloadDump



You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
