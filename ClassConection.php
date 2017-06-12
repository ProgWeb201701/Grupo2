<?php 
	/**
	* 
	*/
	class getConection{
		
		private $mysqli;

		function __construct($local, $user, $pass, $dataBase){
			$this->$mysqli = new mysqli($local, $user, $pass, $dataBase)
			
		}

		public function getMysqli(){
			return $this->$mysqli;
		}
	}
?>