<?php 


	class getConection{
		
		//protected $mysqli;

		protected $local = "127.0.0.1";
		protected $user = "ProgWeb";
		protected $pass = "123";
		protected $dataBase = "pw";

	//public function __construct(){
		//	$this->mysqli = new mysqli($this->local, $this->user, $this->pass, $this->dataBase);		
		//}

	public function getMysql(){
			return new mysqli($this->local, $this->user, $this->pass, $this->dataBase);
		}
	}
?>