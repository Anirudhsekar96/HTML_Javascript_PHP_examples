<?php

	$myfile = file_get_contents("abc.json");
	$obj = json_decode("abc.json",TRUE);
	//var_dump($myfile);
	print_r(file_get_contents("abc.json"));
	print_r($obj);
	




?>