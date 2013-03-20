<?php

require_once('IUser.interface.php');
require_once('MyException.php');

class Ip implements IUser{
	public $id;
	public $usr;

		public function __construct() {

/*			if ($id <1) {
				
				throw new MyException();
			
			}

			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "SELECT * from users where id = $id";
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
			$res->close();
 */			$con = new mysqli('localhost', USER, PASS, DB);
 			$query = "SELECT MAX(id) from ip";
			$res = $con->query($query);
			
			if (!$res) {
			
				throw new Exception($query);
			
			}

			if ($row = $res->fetch_assoc()) {

				//print_r($row);	
				$this->id =  $row['MAX(id)'];

			}
			$res->close();
			$query = "SELECT * from ip where id = $this->id";
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


/*		public function update($usr){
			
			$con = new mysqli('localhost', USER, PASS, DB);
			$query = "UPDATE users SET ";
			
			foreach ($usr as $key => $value) {
			
				$query = $query.$key.'='."'$value'".', ';

			}
			
			$query = substr($query, 0, -2);
			$id = $usr["id"];
			$query = $query." WHERE id=$id";
			echo $query;

			$res = $con->query($query);

			if (!$res) 
				{ throw new  Exception($query);}
	
			
		
		}
 */

		public function insert($usr)
		{
			if (strcmp($usr['value'], $this->usr['value']) != 0){
				
				$con = new mysqli('localhost', USER, PASS, DB);
				$query = "INSERT INTO ip ";
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
					throw new Exception($query);
				}
				
				return 1;
			}
			return 0;

		}
		
/*		public static function search($key, $value) 
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
 */

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
