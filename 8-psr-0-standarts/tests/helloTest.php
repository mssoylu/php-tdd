<?php 

use Classes\Meeting\Hello;

/**
 * Hello Test
 */
class helloTest extends PHPUnit_Framework_TestCase 
{
	/**
	 * Methods list
	 * 
	 * @var array
	 */
	protected $classAttributes = array(
			'location', 
			'people'
	);
	
    /**
     * Test start
     */
    protected function setUp() 
    {  
    	// check file exists
    	$this->assertFileExists('src/Classes/Meeting/Hello.php', 'Hello.php file not found.');
    }

    /**
     * Test hello class instance name
     */
    public function testCheckAttributesForHelloClass()
    {
    	$hello = new Hello();
    	
    	// check object attributes 
    	foreach ($this->classAttributes as $attributeName)
    		$this->assertClassHasAttribute($attributeName, get_class($hello)); 
    } 
    
    /**
     * Test finish
     */
    protected function tearDown() 
    {
    }
}