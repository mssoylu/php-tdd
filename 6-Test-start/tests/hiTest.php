<?php

use Classes\Meeting\Hi;

/**
 * Hi Test
 */
class HiTest extends PHPUnit_Framework_TestCase 
{		
	/**
	 * Methods list
	 * 
	 * @var array
	 */
	protected $methodsOfHi = array(
			'hi', 
			'bye'
	);
	
    /**
     * Test start
     */
    protected function setUp() 
    {  
    	// check file exists
    	$this->assertFileExists('classes/meeting/hi.php', 'Hi.php file not found.');
    }

    /**
     * Test Hi class instance name
     */
    public function testMethodsListForHiClass()
    {
    	$hi = new Hi();

    	// check object methods created or not
    	foreach ($this->methodsOfHi as $methodName)
    		$this->assertContains($methodName, get_class_methods($hi), $methodName . ' method not found.'); 
    } 
    
    /**
     * Test finish
     */
    protected function tearDown() 
    {
    	
    }
}