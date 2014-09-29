Composer
=====================

## Package Management 
You can use or create symfony, silex or similar framework package or with composer. 

## Well standart autoload support 
Composer can define multiple autoload source. We will use this autoload system in our TDD setup. 

## Use namespaces 

PHP has some coding standarts. For example PSR-0. It is about autoloading classes.

Here is [PSR-0 standart document](http://www.php-fig.org/psr/psr-0/)

We will user namespaces for extendable workflow. All new PHP project use composer and namespaces, dependency management etc.

Our classes are in the classes directory now.  

## Install Composer 

```bash
curl -sS https://getcomposer.org/installer | php
```
Setup composer environment

```bash
php composer.phar install
```
Create composer JSON file

```bash
composer init
```

Add our class directory composer autoload source in composer.json ( it has to be root node )

```json
 	"autoload": {
 	   "psr-0": {
        	"" : "classes"
    	}
	}
```
Process composer.json with terminal command.

```bash
php composer.phar dump-autoload
```

For more info [click for composer site](http://getcomposer.org)

## Test Now !

```bash
phpunit tests/
```