<?php

//require_once('ip.php');
//require_once('curl3.php');
//$link = "http://localhost/ip/server/primit.php";
$myip = "86.106.128.111";
$link = "http://ionutzs.site88.net/primit.php";

		header("Location: ".$link."?ip=".$myip);

?>
