<?php 
	/**
	* 
	*/
	/*class getConection{
		
		private $mysqli;

		function __construct($local, $user, $pass, $dataBase){
			$this->$mysqli = new mysqli($local, $user, $pass, $dataBase)
			
		}

		public function getMysqli(){
			return $this->$mysqli;
		}
	}*/

	class getConection{
		
		private $mysqli;

		private global $local = "localhost";
		private global $user = "ProgWeb";
		private global $pass = "123";
		private global $dataBase = "pw";

		function __construct(){
			$this->$mysqli = new mysqli($local, $user, $pass, $dataBase)
			
		}

		public function getMysql(){
			return $this->$mysqli;
		}
	}
?>