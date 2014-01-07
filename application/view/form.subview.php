<?php

foreach ($data as $name => $page) {
	// echo "Page Name: " . $name . "<br>";
	// echo "Description: " . $page['Description'] . "<br>";
	// echo "Fields:<br> ----<br>";
	echo "<h2>$name</h2>";
	echo "<h3>{$page['Description']}</h3>";

	echo "<form>";
	foreach ($page['Fields'] as $name => $field) {
		echo "<h4>$name</h4>";
		echo '<span>' . HTML::$field['type']($name, $field['required']) . '</span>';

		echo "<br>";
	}
	echo "</form>";
}