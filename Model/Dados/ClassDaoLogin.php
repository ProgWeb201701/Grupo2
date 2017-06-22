<?php

class DaoLogin{
		
	private global $mysqli;

	function __construct($mysqli){
		$this->$mysqli = $mysqli;
	}

	public function selectLogin($aluno){
	
		$query = "SELECT * FROM aluno;";
		$stmt = $mysqli->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param('ssdi', $codAluno, $matricula, $Nome, $Senha, $LinkLattes, $Curso);
		
	
	}

}
?>