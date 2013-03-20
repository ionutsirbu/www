<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
$arr = array("unu" => "primul", "doi"=>"al doilea", "trei"=>3);
print_r($arr);
//print_r(serialize($arr));
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="stylesheet" href="a.css" type="text/css" media="screen,projection" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
<body>
	<div id="wrapper">
		<form action="main.php" method="POST">
		<input type="hidden" name="class" value='<?php print_r(serialize($arr));?>' />

			Username: <input type="text" name="user"/></br>
			Password: <input type="password" name="passwd"/>
			<input type="submit" value="submit"/>
		</form>
	</div>
</body>

</html>
