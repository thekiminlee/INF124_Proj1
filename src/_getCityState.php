<?php
	$locations = array();
	$file = fopen('../asset/zip_codes.csv', 'r');
	while($row = fgetcsv($file)){
		$locations[$row[0]] = $row[1].', '.$row[2];
	}

	$zip = $_POST["zip"];
	if(array_key_exists($zip, $locations)){
		print $locations[$zip];
	} else {
		print " , ";
	}

?>