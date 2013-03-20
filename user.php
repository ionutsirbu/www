<?php

require_once('IUser.interface.php');

class User implements IUser{
	public $id;
	public $usr;
	public $desc;

		public function __construct($id) {
			
			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "SELECT * from users where id = $id";
			$res = $con->query($query);
			
			if (!$res) {
			
				throw new Exception("DADADA");
			
			}
			
			while ($row = $res->fetch_assoc()) {
			
				$this->id = $row["id"];
				$this->usr = $row["username"];
				$this->desc = $row["description"];
			}	
		}


		public function update($id, $name, $desc) {
		
			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "UPDATE users SET username='$name', 
				description='$desc' WHERE id='$id'";
			$res = $con->query($query);

			if (!$res) {
				echo "\n".$query."\n";	
			}

			//$res->close();
		
		}
		
		public function __toString(){
			
			$ret = 	'['.$this->id.','.$this->usr.','.$this->desc.']';
			return $ret;
			
		}
}

?>
