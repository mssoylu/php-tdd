<?php

use Classes\Meeting\Hi;

/**
 * Hi Test
 */
class hiTest extends PHPUnit_Framework_TestCase 
{		
	/**
	 * Methods list
	 * 
	 * @var array
	 */
	protected $classMethods = array(
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
    	foreach ($this->classMethods as $methodName)
    		$this->assertContains($methodName, get_class_methods($hi), $methodName . ' method not found.'); 
    } 
    
    /**
     * Test finish
     */
    protected function tearDown() 
    {
    	
    }
}