<?php

define ("DB", "dbase");
define ("USER", "root");
define ("PASS", "napoleon");

interface IUser {
   public function __construct ($key, $value);
   public function __toString ();
}

?>
