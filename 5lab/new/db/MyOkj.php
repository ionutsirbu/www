<?php

require_once('IUser.interface.php');
require_once('MyException.php');

class User implements IUser{
	public $usr;

		public function __construct($key, $value, $table) {

			if ($key == NULL) {
				
				throw new MyException();
			
			}

			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "SELECT * from $table where $key = '$value'";
			$res = $con->query($query);
			if (!$res) {
			
				throw new Exception($query);
			
			}
			$this->usr = array();
			while ($row = $res->fetch_assoc()) {
				
				foreach ($row as $key => $value) {
					
					$this->usr[$key] = $value;	

				}
			}
		}

		public function update($usr){
			
			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "UPDATE users SET ";
			
			foreach ($usr as $key => $value) {
			
				$query = $query.$key.'='."'$value'".', ';

			}
			
			$query = substr($query, 0, -2);
			$id = $usr["id"];
			$query = $query." WHERE id=$id";
			//echo $query;

			$res = $con->query($query);

			if (!$res) 
				{ throw new  Exception($query);}
	
			
		
		}

		public function Insert($usr)
		{
	
			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "INSERT INTO users ";
			$keys ="(";
			$values=" VALUES (";
			foreach ($usr as $key => $value) {
			
				$keys = $keys.$key.", ";
				$values = $values."'$value'".", ";

			}
			$keys = substr($keys, 0, -2);
			$values = substr($values, 0, -2);
			$keys = $keys.")";
			$values = $values.")";
			$query = $query.$keys.$values;
			//echo $query;
			$res = $con->query($query);
			
			if (!$res) 
			{
				throw new Exception("Yeaaa");
			}

		}
		
		public static function search($key, $value) 
			{
				$con = new mysqli('localhost', USER, PASS, DB);
				$usr = array();
				$query = "SELECT * from users where 
						$key = '$value'";
				$result = $con->query($query);
				if (!$result) {throw new Exception("aici");}
					if ($row = $result->fetch_assoc()){
					
						return $row;
					
					}else{
					
						throw new Exception("NF");
				
					}

			}


		public function __toString(){
			$ret = "<!DOCTYPE html><html><body>";
			foreach ($this->usr as $key => $value){
			
				$ret = $ret.'{'.$key.'=>'.$value.'}<br>';
			
			}
			
			$ret = $ret."<br></body></html>";
			return $ret;
			
		}
}

?>
