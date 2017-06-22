<?php

class DaoLogin{
		
	private global $mysqli;

	function __construct($mysqli){
		$this->$mysqli = $mysqli;
	}

	public function selectLogin($aluno){
	
		$query = "SELECT * FROM aluno;";
		$result =  $mysqli->query($query,MYSQLI_STORE_RESULT);
		
		while (list($codAluno, $matricula, $Nome, $Senha, $LinkLattes, $Curso) = $result->fetch_row()) {
   				$aluno = new Aluno($codAluno, $matricula, $Nome, $Senha, $LinkLattes, $Curso)
		}
	
	}

}
?>