<?php
error_reporting(E_WARNING);
require_once('db/MyOkj.php');

	$username = $_POST['user'];
	$passwd = $_POST['passwd'];

	$user = new User("username", $username, "users");
			/*
			$usr = array();
			$usr["username"] = "ion";
			$usr["password"] = md5("napoleon");

			$user->Insert($usr);
			*/
	if (md5($passwd) != $user->usr["password"])
		echo "parola gresita";
	else {
		//parola corecta: new session + redirect
		session_start();
		if (isset($_SESSION['views'])) {
			$_SESSION['views']++;
		} else {
			$_SESSION['views'] = 1;
		}
		$_SESSION["username"]=$username;
		$_SESSION["p"]=1;
		if (isset($_COOKIE[$username])) {
			echo "Welcome ".$_COOKIE[$username]."!<br >";
		} else {
			$expire = time() + 60*60*24*30;
			setcookie($username, "Salut".$username, $expire);
			echo "Welcome guest!<br />";
		}
		//echo "sid = {".SID."}<br>";
		//echo "sid = {".htmlspecialchars(SID)."}<br>";
		Header("Location: article.php?".htmlspecialchars(SID));
	}
?>
