<?php

$settings = new core();

// $pages = $settings->pages;

	$pages['Page 1'] = array(
		"Name"	=>	"Page 1",
		"Description" => "This is the page One",
		"Fields" => array(
				"Name"	=> array(	
							"name"	=> "Name",
							"type"	=> "input",
							"required" => 1
				),
				"Age"	=> array(	
							"name"	=> "Age",
							"type"	=> "input",
							"required" => 1
				)
			)
	);
// dd( $pages);
	// $page =$pages['Page 1'];

include VIEW . 'home.tmpl.php'	;