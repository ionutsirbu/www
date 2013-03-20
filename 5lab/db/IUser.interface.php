<?php

define ("DB", "pwlab5");
define ("USER", "root");
define ("PASS", "napoleon");

interface IUser {
   public function __construct ($key, $value, $table);
   public function __toString ();
}

?>
