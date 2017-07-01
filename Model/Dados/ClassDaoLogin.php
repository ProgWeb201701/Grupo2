<?php
include '../Model/Dados/ClassConection.php';
include '../Model/ClassAluno.php';
class DaoLogin{
		
	protected $mysqli;

	function __construct($mysql){
		$this->mysqli = $mysql;
	}

	public function selectLoginAluno(){
	
		$query = "SELECT * FROM aluno;";
		$result =  $this->mysqli->query($query,MYSQLI_STORE_RESULT);
		$alunos = array();
		while (list($codAluno, $nome, $matricula, $senha, $email, $curso, $instituicao, $lattes) = $result->fetch_row()) {
   				$aluno = new Aluno($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);
   				array_push($alunos, $aluno);
		}
		return $alunos;
	}

	public function selectLoginProfessor(){
	
		$query = "SELECT * FROM professor;";
		$result =  $this->mysqli->query($query,MYSQLI_TORE_RESULT);
		$professores = array();
		while (list($codProf, $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha, $formacao) = $result->fetch_row()) {
   				$prof = new Professor($nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha, $formacao);
   				array_push($professores, $prof);
		}
		return $professores;
	}


	public function selectLoginCoordenadorTCC(){
	
		$query = "SELECT * FROM coordenadortcc;";
		$result =  $this->mysqli->query($query,MYSQLI_TORE_RESULT);
		$coordenadorestcc = array();
		while (list($idCordenador, $nome, $senha) = $result->fetch_row()) {
   				$coordenador = new CoordenadorTCC($nome, $senha);
   				array_push($coordenadorestcc, $coordenador);
		}
		return $coordenadorestcc;
	}

}
?>