<?php

require_once "autoload.php";

/**
 * Hi Test
 * 
 * Test class name with finish "Test" keyword.
 * We extend this class with PHPUnit Framwork TestCase.
 */
Class hiTest extends PHPUnit_Framework_TestCase 
{
	// this method is construct of class	
    protected function setUp() 
    { 
    	echo "\n Hi tests start now.";
    }

    // method name start with "test" keyword 
    function testHi()
    {
    	$hi = new hi();

    	// local test operation name 
    	$this->setName('Say Hi Test');
    	
    	// Here is test condition
    	$this->assertEquals("hi", $hi->hi(), ' You did not say hi.');    	
    } 
    
    // this method is deconstruct of class
    protected function tearDown() 
    {
    	echo "\n\n Hi tests finish now.";
    }
}
