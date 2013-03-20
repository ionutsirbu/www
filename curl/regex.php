<?php
/*
$exp = "ce plm 123 nu e 610 si 3o1 nu e l01";
$pattern = '/^6\d{2}$/';
preg_match($pattern, $exp, $matches);
 */

preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
print_r($matches);

?>
