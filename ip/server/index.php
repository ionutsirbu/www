<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php

$myfile = "ip.in";
$fh = fopen($myfile, 'r');
$ip = fread($fh, filesize($myfile));
fclose($fh);
$ip1 = "http://".$ip.":88";
$ip2 = "http://".$ip;
//echo $ip;

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="stylesheet" href="a.css" type="text/css" media="screen,projection" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
<body>
	<a href="<?php echo $ip1;?>">Camera firma</a><br />
	<a href ="<?php echo $ip2;?>">Camera casa</a>
</body>

</html>

