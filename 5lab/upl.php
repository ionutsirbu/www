<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
	session_start();
	if (empty($_SESSION['count'])) {
		$_SESSION['count'] = 1;
	} else {
		$_SESSION['count']++;
	}

	echo $_SESSION["username"];

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	
<body>
	<form enctype="multipart/form-data" action="script.php" method="POST"> 
	    <input type="hidden" name="MAX_FILE_SIZE" value="100000" /> Choose a file to upload: 
	    <input name="uploadedfile" type="file" /><br /> <input type="submit" value="Upload File" /> 
	</form>

</body>

</html>
