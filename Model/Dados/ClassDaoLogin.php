<?php
include '../Model/Dados/ClassConection.php';
include '../Model/ClassAluno.php';
class DaoLogin{

	protected $mysqli;

	function __construct($mysql){
		$this->mysqli = $mysql;
	}

	public function selectLoginAluno($login, $senha){

		$query = "SELECT * FROM aluno where Matricula= $login and Senha = $senha";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
		

		
		if ($result->num_rows > 0) {

			$result = $result->fetch_array(MYSQLI_ASSOC);
			$aluno = new Aluno($result['Nome'], $result['Matricula'], $result['Senha'], $result['email'], $result['Curso'], $result['instituicao'], $result['LinkLattes']);

		}


		return $aluno;
	}

	public function selectLoginProfessor($login, $senha){

		$query = "SELECT * FROM professor where siape= $login and Senha = $senha";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
		
		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$professor = new Professor($result['Nome'], $result['siape'], $result['senha'], $result['email'], $result['instituicao'],$result['LinkLattes'], $result['areaAtua'], $result['formacao'], $result['tipo']);


		}

		return $professores; 
    }

	// public function selectLoginCoordenadorTCC(){

	// 	$query = "SELECT * FROM coordenadortcc;";
	// 	$result =  $this->mysqli->query($query,MYSQLI_STORE_RESULT);
	// 	$coordenadorestcc = array();
	// 	while (list($idCordenador, $nome, $senha) = $result->fetch_row()) {
	// 		$coordenador = new CoordenadorTCC($nome, $senha);
	// 		array_push($coordenadorestcc, $coordenador);
	// 	}
	// 	return $coordenadorestcc;
	// }

	}
	?>