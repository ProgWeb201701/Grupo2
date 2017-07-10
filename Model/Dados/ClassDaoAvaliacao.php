<?php

	include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAvaliacao.php';
	class DaoAvaliacao{
		
		private $mysqli;

		public function __construct($my){
			$this->mysqli = $my;
		}

		public function insertAvaliacao($avaliacao){

			$query = "INSERT INTO Nota SET codAvaliacao=NULL, nota=?, parecer=?, arquivo=?, idAval=?, codAluno = ?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssii', $nota, $parecer, $arquivo, $idAval, $codAluno);
			$nota = $avaliacao->getNota(); 
			$parecer = $avaliacao->getParecer();
			$arquivo = $avaliacao->getArquivo(); 
			$idAval = $avaliacao->getIdAval();
			$codAluno = $avaliacao->getCodAluno();



			$stmt->execute();
			$stmt->close();
		}

		public function updateTarefa($tarefa, $id){
			$query = "UPDATE tarefa SET nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?, 
			arquivo=? WHERE codTarefa=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssssssi', $nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo, $codTarefa);
			$nome = $tarefa->getNome();
			$descricao = $tarefa->getDescricao();
			$dinicio = $tarefa->getDinicio(); 
			$dfim = $tarefa->getDfim();
			$destinatario = $tarefa->getDestinatario(); 
			$arquivo = $tarefa->getArquivo();
			$codTarefa = $id;
			// echo "<br>";
			// echo "<br>";
			// print_r($query);
			// echo "<br>";
			// echo "<br>";
			// exit();
			$stmt->execute();
			$stmt->close();
		}

		public function deleteTarefa($id){
			$query = "DELETE FROM tarefa WHERE codTarefa=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $idProf);

			$idProf = $id;

			$stmt->execute();
			$stmt->close();
		}
		
		public function selectAvaliacaoAluno($idAluno){

			$query = "SELECT * FROM nota where codAluno = '$idAluno'";
			$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
			$avaliacoes = array();
			while ($row = $result->fetch_assoc()) {
				$ava = new Avaliacao($row['Nota'], $row['Parecer'], $row['Arquivo'], $row['idAval'], $row['codAluno']);
				array_push($avaliacoes, $ava);

			}

			return $avaliacoes; 
		}

		public function selectAvaliacaoProfessor($idProf){

			$query = "SELECT * FROM nota where idAval = '$idProf'";
			$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
			$avaliacoes = array();
			while ($row = $result->fetch_assoc()) {
				$ava = new Avaliacao($row['Nota'], $row['Parecer'], $row['Arquivo'], $row['idAval'], $row['codAluno']);
				array_push($avaliacoes, $ava);

			}

			return $avaliacoes; 
		}

		public function selectProfessores($siape){

		$query = "SELECT * FROM professor where siape= $siape";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$id = $result['idAval'];

		}

		return $id; 
	}



		public function selectAluno($matricula){

			$query = "SELECT * FROM aluno where matricula = $matricula";
			$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);


			if($result->num_rows > 0){
				$result = $result->fetch_array(MYSQLI_ASSOC);
				$codAluno = $result['CodAluno'];

			}


			return $codAluno; 

		}
		
	}

?>