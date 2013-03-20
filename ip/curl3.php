<?php
$userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';
//$target_url = "http://www.google.com/search?q=my+ip";
$target_url = "http://checkip.dyndns.org";
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$html = curl_exec($ch);
if (!$html) {
	echo "<br />cURL error number:" .curl_errno($ch);
	echo "<br />cURL error:" . curl_error($ch);
	exit;
}
/*
echo $html."\n";
$pieces = explode(" ", $html);
echo $pieces[0]."\n";
echo $pieces[1]."\n";
echo $pieces[2]."\n";
echo $pieces[3]."\n";
echo $pieces[4]."\n";
echo $pieces[5]."\n";
 */
/*
$pattern = " [0-9]{1,3}";
$patt = "\b\[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\b";
 */
//$pattern = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';
//$pattern = '/^([0-9]){1,3}.([0-9]){1,3}.([0-9]){1,3}.([0-9]){1,3}$/';
$pattern = '/\b(?:[0-9]{1,3}\.){3}[0-9]{1,3}\b/';
if (preg_match($pattern, $html, $matches)) {
	//echo "{".$matches[0]."}";
	$myip = $matches[0];
	//print_r($matches);
}else 
	echo "false";
//$valid = filter_var($html, FILTER_VALIDATE_IP);
//echo $valid;
?>
