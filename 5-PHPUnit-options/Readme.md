PHP Unit Options
=====================

## Easy way for test 

After composer autoload install we still using autoload including in test files.
But we have an alternative for autoload in PHPUnit. It's a XML options file : phpunit.xml
   
```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php">
	<testsuites>
		<testsuite name="PHP TDD">
			<directory>tests</directory>
		</testsuite>
	</testsuites>
</phpunit>
```

Here is document about [phpunit.xml](https://phpunit.de/manual/3.7/en/appendixes.configuration.html)


With this file you 

## Test Now !

Now we do not need more "tests" keyword in our test directive.

```bash
phpunit
```