<?php

require_once('2lab.php');

$crit = array("firstName"=>"Matei", "lastName"=>"Popovici");
//$usr = new UserCollection("name","d",$crit);
$usr = new UserCollection("email","d",$crit);

echo $usr;

//$user = $usr::getNextUser();
echo "<br> in ordine <br>";
while ($user = $usr->getNextUser()) {
	echo "ada";
	echo $user;

}
?>
