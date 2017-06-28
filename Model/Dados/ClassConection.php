<?php 


	class getConection{
		
		private $mysqli;

		private $local = "localhost";
		private $user = "ProgWeb";
		private $pass = "123";
		private $dataBase = "pw";

		function __construct(){
			global $local, $user, $pass, $dataBase;
			$this->$mysqli = new mysqli($local, $user, $pass, $dataBase);
			
		}

		public function getMysql(){
			return $this->$mysqli;
		}
	}
?>