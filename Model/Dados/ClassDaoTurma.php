<?php
	

	class DaoTurma{
		
		private global $mysqli;

		public function __construct($mysqli){
			$this->$mysqli = $mysqli;
		}

		public function insertTurma($semestre, $curso, $idCordenador){
			$query = "INSERT INTO turma SET idTurma =NULL, semestre=?, curso =?, idCordenador =?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssi', $semestre, $curso, $idCordenador);
			

			$stmt->execute();

			
			$stmt->close();
		}


		public function consultaOrientador($siape){

		$query = "SELECT * FROM professor where siape= $siape";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
		

		
		if ($result->num_rows > 0) {

			$result = $result->fetch_array(MYSQLI_ASSOC);
			
		}


    	return $result['idAval'];
	    }


		public function insertTcc($nome, $matricula, $orientador){


			$query = "INSERT INTO tcc SET idTurma =NULL, nome=?, matricula =?, orientador =?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssi', $nome, $matricula, $orientador);
			

			$stmt->execute();
			$stmt->close();

		}



		// public function editTarefa($tarefa, $id){
		// 	$query = "UPDATE professor SET $nome=?, $siape=?, $email=?, $instituicao=?, $areaAtua=?, $curriculo=?, $senha=?,  $formacao=? WHERE idProf=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('sssssssi', $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha,  $formacao, $idAval);
		// 	$nome = $aluno->getNome();
		// 	$siap = $prof->getsiep();
		// 	$email = $prof->getEmail();
		// 	$instituicao = $prof->getInstituicao();
		// 	$areaAtua = $prof->getAreaAtua();
		// 	$curriculo = $prof->getCurriculo();
		// 	$senha = $prof->getSenha();
		// 	$formacaoProf = $prof->getFormacao();
		// 	$idAval = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }

		// public function deleteTarefa($id){
		// 	$query = "DELETE FROM professor WHERE idProf=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('i', $idProf);

		// 	$idProf = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }
	}

?>