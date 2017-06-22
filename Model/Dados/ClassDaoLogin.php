<?php

class DaoLogin{
		
	private global $mysqli;

	function __construct($mysqli){
		$this->$mysqli = $mysqli;
	}

	public function selectLoginAluno(){
	
		$query = "SELECT * FROM aluno;";
		$result =  $mysqli->query($query,MYSQLI_STORE_RESULT);
		$alunos = array();
		while (list($codAluno, $nome, $matricula, $senha, $email, $curso, $instituicao, $lattes) = $result->fetch_row()) {
   				$aluno = new Aluno($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);
   				array_push($alunos, $aluno);
		}
		return $alunos;
	}

	public function selectLoginProfessor(){
	
		$query = "SELECT * FROM professor;";
		$result =  $mysqli->query($query,MYSQLI_TORE_RESULT);
		$professores = array();
		while (list($codProf, $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha, $formacao) = $result->fetch_row()) {
   				$prof = new Professor($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);
   				array_push($professores, $prof);
		}
		return $alunos;
	}

}
?>