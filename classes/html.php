<?php

class HTML{
	function __construct() {

	}

	public static function input($name, $required, $value = '', $id = ''){
		$str = "<input name='$name' value='$value' id='$id' placeholder='$name'";
		if( $required) 
			$str .= ' required'; 
		$str .= " />";

		return $str;
	}

	public static function textarea($name, $required, $value = '', $id = ''){
		$str = "<textarea name='$name' id='$id' placeholder='$name'";
		if( $required) 
			$str .= ' required'; 
		$str .= ">$value</textarea>";

		return $str;
	}
}