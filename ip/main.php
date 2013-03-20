<?php

require_once('ip.php');
require_once('curl3.php');
//$link = "http://localhost/ip/server/primit.php";
$link = "http://ionutzs.site88.net/primit.php";
$ip = new ip();

$newrecord = array();
//echo $myip;
$newrecord['value'] = $myip;
$newrecord['time'] = date('Y-m-d H:i:s');
	if($ip->insert($newrecord) == 1) {
		$useragent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
		$ch = curl_init();
		//set  some cookie
		curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $newrecord);

		$res = curl_exec($ch);
		curl_close($ch);
	}

?>
