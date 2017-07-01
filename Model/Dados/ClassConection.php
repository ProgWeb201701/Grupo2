<?php 


	class getConection{
		
		private $mysqli;

		protected $local = "127.0.0.1";
		protected $user = "ProgWeb";
		protected $pass = "123";
		protected $dataBase = "pw";

		function __construct(){
			$this->mysqli = new mysqli($this->local, $this->user, $this->pass, $this->dataBase);		
		}

		public function getMysql(){
			return $this->mysqli;
		}
	}
?>