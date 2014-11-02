<?php 

use Classes\Meeting\hello;

/**
 * Hello Test
 */
class helloTest extends PHPUnit_Framework_TestCase 
{		
    /**
     * Test start
     */
    protected function setUp() 
    {  
    	// check file exists
    	$this->assertFileExists('classes/meeting/hello.php', 'hello.php file not found.');
    }

    /**
     * Test hello class instance name
     */
    public function testCheckMethodReturnsForHelloClass()
    {
    	$hello = new hello();
    	
    	// check object returns
    	$this->assertEquals('hello', $hello->hello(), 'take_care() method does not return "hello"');
    	$this->assertEquals('take care', $hello->take_care(), 'take_care() method does not return "take care"');
    } 
    
    /**
     * Test finish
     */
    protected function tearDown() 
    {
    	
    }
}