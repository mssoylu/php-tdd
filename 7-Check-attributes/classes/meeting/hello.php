<?php 

namespace Classes\Meeting;

/**
 * Hello 
 */
class hello 
{
	/**
	 * Location
	 * 
	 * @var string
	 */
	public $location = 'Istanbul';
	
	/**
	 * People array
	 * 
	 * @var array
	 */
	public $people = array(
			'Mehmet',
			'Hakan',
			'Emin'
	);
	
	/** 
	 * Say hello
	 */
	public function hello(){
		return "hello";
	} 

	/** 
	 * Say take care
	 */
	public function take_care(){
		return "take care";
	} 
}