<?php

$url = "http://www.google.com/search?q=my+ip";
//$url = "http://www.gandul.info";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);


$data = curl_exec($ch);

$fd = fopen("fila.html", 'w');
fwrite($fd, $data);
fclose($fd);
curl_close($ch);
?>
