<?php
error_reporting(E_WARNING);
require_once('db/MyOkj.php');
define("DB", "pw5lab");

class Login {
	
	public $rights;
	public $username;
	public $usr;

	public function __construct($username) {

		if ($username != NULL) {
			$usr = new User("username", $username, "users");
			$this->usr = $usr;

		}
		$this->username = $username;
		$this->rights = array();
		if ($usr->usr["rights"] == NULL){
			throw new Exception("no rights");
		}
		$this->rights = explode(",", $usr->usr["rights"]);

	}
	public function getter() {
		return $this->rights;
	}
	public function setter($rights) {
		$str = "";
		foreach ($rights as $right) {
			$str.=$right.",";
		}
		$str = substr($str, 0, -1);
		$this->rights = $rights;
		$data = array("id" => $this->usr->usr["id"],"rights" => $str);
		$this->usr->update($data);

	}

	public function __call($name, $args){

		if ($name == "getPermissions") {
			switch (count($args)) 
			{
				case 0:{
					$names = array();
					foreach($this->rights as $r) {
						$usr = new User("id",$r,"articles");
						$names[$r] = $usr->usr["article"];		
					}
					return $names;
					break;	
				}
				case 1:{
					foreach ($this->rights as $r) {
						if ($r == $args[0])
							return true;
					}
					return false;
					break;
				}
			}
		}
	}

	public function __sleep(){

		return array('rights', 'username', 'usr');
	
	}
}
?>
