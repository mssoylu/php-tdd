<?php 

// We have still autoload function here
require 'vendor/autoload.php';

// We call namespace class here, think like some kind of include
use Classes\Meeting\hello;

/**
 * Hello Test
 * 
 * Test class name with finish "Test" keyword.
 * We extend this class with PHPUnit Framwork TestCase.
 */
class helloTest extends PHPUnit_Framework_TestCase 
{
	// this method is construct of class	
    protected function setUp() 
    { 
    	echo "\n Hello tests start now.";
    }

    // method name start with "test" keyword 
    function testHello()
    {
    	$hello = new hello();

    	// local test operation name 
    	$this->setName('Say Hello Test');
    	
    	// Here is test condition
    	$this->assertEquals("hello", $hello->hello(), ' You did not say hello.');    	
    } 
    
    // this method is deconstruct of class
    protected function tearDown() 
    {
    	echo "\n\n Hello tests finish now.";
    }
}