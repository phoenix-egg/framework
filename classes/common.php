<?php


if ( ! function_exists('dd'))
{
	function dd( $var)
	{
		echo "<pre>";
			var_dump( $var);
		echo "<pre>";
		die();
	}
}

if ( ! function_exists('html_escape'))
{
	function html_escape($var)
	{
		if (is_array($var))
		{
			return array_map('html_escape', $var);
		}
		else
		{
			return htmlspecialchars($var, ENT_QUOTES, config_item('charset'));
		}
	}
}

if ( ! function_exists('subview'))
{
	function subview($file, $data)
	{		
		require VIEW . $file . '.subview.php';
	}
}