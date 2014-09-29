<?php 

/**
 * Hello Test
 */

Class helloTest // test class name end "test" keyword
{	
	// this method is construct of class	
    protected function setUp() {
    }

    // this method will test hello method of hello class
    function helloTest()
    {
    	$hello = new hello();
    } 
    
    // this method is deconstruct of class
    protected function tearDown() {
    }
}
