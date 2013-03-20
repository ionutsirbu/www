<?php
/* gets the data from a URL */
$url = "http://www.google.com/search?q=my+ip";
function get_data($url) {
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

function echobig($string, $bufferSize = 8192) {
  $splitString = str_split($string, $bufferSize);

  foreach($splitString as $chunk) {
	  echo "totuna";
    echo $chunk;
  }
}

$data = get_data($url);
echobig($data, 8192);
?>
