<?php

use Classes\Meeting\Bye;

/**
 * Bye Test
 */
class ByeTest extends PHPUnit_Framework_TestCase 
{		
	/**
	 * Methods list
	 * 
	 * @var array
	 */
	protected $classMethods = array(
			'byeBye', 
			'takeCare'
	);
	
    /**
     * Test start
     */
    protected function setUp() 
    {  
    	// check file exists
    	$this->assertFileExists('src/Classes/Meeting/Bye.php', 'Bye.php file not found.');
    }

    /**
     * Test Bye class instance name
     */
    public function testMethodsListForByeClass()
    {
    	$Bye = new Bye();

    	// check object methods created or not
    	foreach ($this->classMethods as $methodName)
    		$this->assertContains($methodName, get_class_methods($Bye), $methodName . ' method not found.'); 
    } 
    
    /**
     * Test finish
     */
    protected function tearDown() 
    {
    	
    }
}