<?php
//	ini_set('displey_errors', 1);
//	ini_set('display_startup_errors', 1);
	error_reporting(-1);
	$id = 4;
	$connection = new mysqli('localhost', 'root', 'napoleon', 'dbase');

	$query = "SELECT * from users where id = ?";

	$stmt = $connection->prepare($query);
	$stmt->bind_param("i", $id);
	$stmt->execute();
	/*
        $stmt->bind_result($id, $username, $description);
	$stmt->fetch();*/
	while ($row = $stmt->fetch_assoc()){
		echo $row["userId"];
	}
	$connection->close();

	echo ("id = $id");
	echo $username;
	echo $description;

?>
