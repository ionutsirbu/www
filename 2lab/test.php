
<?php
echo "<!DOCTYPE html><html><body>";

$arr = array("Foo", 5, "yes", -2);
$arr [] = "nou";
$arr["newkey"] = "keys";
$arr [] = "lst";
print_r($arr);
echo count($arr)."<br>";
/*
unset($arr[3]);

print_r($arr);
echo count($arr);
 */
reset($arr);
$nxt = current($arr);

do{	

	echo $nxt."=";
	echo current($arr)."<br>";

}while ($nxt = next($arr));

echo "DDD=";
reset($arr);
print_r(each($arr));
echo "</body></html>";
?>
