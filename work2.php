<?php
	require_once('MyOkj.php');
	
	$class = new User(4);
	//echo $class;
	$usr = array();
	//$usr["id"] = 4;
	$usr["username"] = "Io9";
	$usr["description"] = "A lu Io9";
	//$class::update($usr);
	$class::Insert($usr);
	//$usr2 = $class::search("username", "Io");
	//print_r($usr2);
	//echo new USer(4);
	//
	//$class2 = new User(0);
	//echo $class2;

?>
