<?php
	
	/**
	* 
	*/
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassProf.php';
	class DaoTarefa{
		
		private $mysqli;

		public function __construct($my){
			$this->mysqli = $my;
		}

		public function insertTarefa($tarefa, $user){
			$id = $this->selectProfessores($user->getSiape(), $user->getSenha());
			$query = "INSERT INTO tarefa SET codTarefa=NULL, nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?,			arquivo=?, idAval=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssssssi', $nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo, $avaliador);
			$nome = $tarefa->getNome();
			$descricao = $tarefa->getDescricao();
			$dinicio = $tarefa->getDinicio(); 
			$dfim = $tarefa->getDfim();
			$destinatario = $tarefa->getDestinatario(); 
			$arquivo = $tarefa->getArquivo();
			$avaliador = $id;


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

		public function selectProfessores($login, $senha){

		$query = "SELECT * FROM professor where siape= $login and Senha = $senha";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
		
		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$id = $result['idAval'];

		}

		return $id; 
	}
		public function selectTarefas($siapeAval){
			$query = "SELECT * FROM tarefa INNER JOIN professor ON tarefa.idAval = professor.idAval WHERE professor.siape = $siapeAval order by dinicio";
			$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
			$num_rows = $result->num_rows;

			$tarefas = array();
			while ($row = $result->fetch_assoc()) {
				$tarefa = new Tarefa($row['nome'], $row['descricao'], $row['dinicio'], $row['dfim'], $row['destinatario'], $row['arquivo']);
				array_push($tarefas,$tarefa);

			}
			// echo "<br><br>";
			// print_r(count($tarefas));
			// echo "<br><br>";
			// exit();


			return $tarefas; 
		}
		public function selectTarefasAluno(){
			$query = "SELECT * FROM tarefa WHERE tarefa.destinatario='aluno' order by dinicio";
			$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
			$num_rows = $result->num_rows;

			$tarefas = array();
			while ($row = $result->fetch_assoc()) {
				$tarefa = new Tarefa($row['nome'], $row['descricao'], $row['dinicio'], $row['dfim'], $row['destinatario'], $row['arquivo']);
				array_push($tarefas,$tarefa);

			}
			// echo "<br><br>";
			// print_r(count($tarefas));
			// echo "<br><br>";
			// exit();


			return $tarefas; 
		}
	}

?>