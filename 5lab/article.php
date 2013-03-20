<?php
	session_start();
	echo "usr = ".$_SESSION["username"];
	echo "<br >priot = ".$_SESSION["p"];
	require_once("Login.php");
	$l = new Login("ion");
	$rights = $l->getter();
	//print_r($rights);
	$rights [] = 1;
	sort($rights);
	//$l->setter($rights);
	//print_r($l->getter());
	//print_r($l->getPermissions());
	echo "<br /> True or false: ";
	//print_r($l->getPermissions(100));
	if ($l->getPermissions(4))
		echo "true";
	else
		echo "false";
	$block = serialize($l);
	if (isset($_SESSION['views'])) {

		$_SESSION['views']++;
		$blk = $_SESSION['seria'];
		$class = unserialize($blk);
		print_r($class);
		if ($_SESSION['username'] != $class->username) {
			session_destroy();
		}else {
			echo "<br >Hello ".$class->username;
		}
		//print_r($blk);
	} else {
		$_SESSION['seria'] = $block;
		$_SESSION['views'] = 1;
	}

	//print_r($block);

?>
