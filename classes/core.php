<?php

/**
* By 	: Nishad
* Date 	: 07/01/2014
*/
class core
{
	public $pages = array();
	
	function __construct()
	{
		//Initialise the page variable
		$this->pages = $this->get_pages( SETTINGS);	
	}


	//Get elements from the file
	private function get_pages( $file_name){
		$arr = array(	'First'		=> array('name', 'age', 'class'),
						'Second'	=> array('average', 'sample'),
						'Third'		=> array('limit', 'color')
					);

		return $arr;
	}
}