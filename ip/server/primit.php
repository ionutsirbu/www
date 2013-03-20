<?php

//echo $_GET['ip'];
$myfile = "ip.in";
$fh = fopen($myfile, 'w') or die("can't open");
fwrite($fh, $_POST['value']);
fclose($fh);

?>
