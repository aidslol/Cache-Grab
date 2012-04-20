<?php

	// keys
	$conKey = "AQ57FHQhbXm5j5Pt7gFY";
	$conSec = "L6w9Sbuv6C3whXtNw8WyW9t748qZeVQQScPBd9W9";

	// go get data from opencache
	$json = file_get_contents("Http://www.opencaching.us/okapi/services/apisrv/stats");
	$data = json_decode($json);
	
	// put vaulable data into an array
	
	// encode the array as json to be passed back to index.html

	$test = array();
	$test['test1'] = '1';
	$test['test2'] = '2';
	$test['test3'] = '3';
	
	echo json_encode($test);
?>