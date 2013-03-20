<?php

require_once('User-lab3.class.php');
class UserCollection {

	public $Users = array();
	public $itr;
	public $keysort;
	public $typesort;
	public $restrictions = array();

	public function __construct($keysort = false, $typesort, $rest = array()) {

		$query = " SELECT id from users";
		
		if (count($rest) > 0) {
		
			$query.=" where ";

			foreach ($rest as $key => $value) {
			
				$query.="$key"."="."'$value' AND ";	
			
			}

			$query = substr($query, 0, -5);

		}

		//echo "{".$query."}";
		$db = new mysqli('localhost', USER, PASS, DB);
		$result = $db->query($query);
		
		while ($row = $result->fetch_assoc()) {

			$id = $row['id'];
			$usr = new User($id);
			$this->Users[] = $usr;
			//echo $usr;
		
		}
		$this->itr = 0;
		$this->keysort = $keysort;
		
		if ($keysort != NULL) {
		
			//echo "<br>".$keysort."<br>"	;
			global $arg;
		        $arg = $keysort;
			function compare($a, $b) {
				//$keysort = "firstName";
				$keysort = self::keysort;
				echo "{".$keysort."}";
				return strcmp($a->$keysort,$b->$keysort);

			}
		
			usort($this->Users, "compare");
			echo "aici".$this->Users[0]."acolo";	

		}
		
		echo "<br>inainte".$this->Users[0];	
		if (strcmp($typesort, "d") == 0) {
			echo "<br>intra<br>";
			array_reverse($this->Users);
		
		}
		echo "<br>inainte".$this->Users[0];	

	}
	
	public function getNextUser() {

		$current = $this->itr;
		$this->itr++;
		if (count($this->Users) > $current)
			return $this->Users[$current];
		else 
			return false;

	}

	public function __toString() {

		$str = "";
		foreach($this->Users as $usr){
			
			ob_start();
			echo $usr;
			$str = $str.ob_get_contents();
			ob_end_clean();

		}
		return $str;

	}

}

?>
