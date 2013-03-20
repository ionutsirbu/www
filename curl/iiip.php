<?php

$string = "this is sprta 255.255.255.255";
preg_match(
'/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/',
$string, $matches);
print_r($matches);

?>
