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
We put our classes in classes directory in meeting directory.
And use "namespace Classes\Meeting;" row all this classes.

Add our class directory composer autoload source in composer.json file.

```json
{
    "autoload": {
 	   "classmap": [
        	"classes"
    	]
	}
}
```
Process composer.json with terminal command.

```bash
php composer.phar dump-autoload
```

Now our autoload system is ready. You can vendor/composer/autoload_classmap.php file.
You will see our namespace classes in file.

For more info [click for composer site](http://getcomposer.org)

## Test Now !

Now we do not need more include our target classes start of test classes. 
Because composer will use dump autoload for PHPUnit test command.

```bash
phpunit tests/
```