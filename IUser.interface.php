<?php

define ("DB", "dbase");
define ("USER", "root");
define ("PASS", "napoleon");

interface IUser {
   public function __construct ($id);
   public function __toString ();
}

?>
