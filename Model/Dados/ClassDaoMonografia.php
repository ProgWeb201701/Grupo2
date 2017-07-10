<?php

include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAluno.php';

if (!isset($_SESSION["user"]) ){
	header("Location: LoginApp.php");
}else{
	$aux = unserialize($_SESSION['nivel']);
}
if ($aux != "aluno") {
	header("Location: LoginApp.php");
}

include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoMonografia.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassMonografia.php';



class DaoMonografia{

	private $mysqli;

	public function __construct($my){
		$this->mysqli = $my;
	}

	public function insertMonografia($monografia){

		
		$id = $this->selectProfessores($monografia->getOrientador());
		$idAluno = $this->selectAluno($monografia->getAutor());
		$idtur = $this->selectTurma($idAluno);
		$idtc = $this->selectTcc($idAluno);


		

		$query = "INSERT INTO monografia SET CodAluno=?, idturma=?, Arquivo=?, Resumo=?, Titulo=?, autor=?, idOri=?, idtcc=?,  pChave=?";
		$stmt = $this->mysqli->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param('iisssssis', $codAluno,$idturma, $arquivo, $resumo, $titulo, $autor, $idOri, $idtcc, $pChave);


		
        $codAluno = $idAluno;
        $titulo =$monografia->getTitulo();
		$autor = $monografia->getAutor();
		$pChave = $monografia->getPChave();
		$resumo = $monografia->getResumo(); 
		$arquivo = $monografia->getArquivo();
		$idOri = $id;
		$idturma = $idtur;
		$idtcc = $idtc;




		$stmt->execute();
		$stmt->close();
	}

	public function updateMonografica($monografica, $id){
		$query = "UPDATE monografica SET nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?, 
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

	public function selectProfessores($siape){

		$query = "SELECT * FROM professor where siape= $siape";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$id = $result['idAval'];

		}

		return $id; 
	}

	public function selectAluno($nome){

		$query = "SELECT * FROM aluno where nome like '%".$nome."%'";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$id = $result['CodAluno'];

		}

		return $id; 
	}




	public function selectTurma($id){

		$query = "SELECT * FROM tcc where idAluno= $id";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$idTurma = $result['idTurma'];

		}

		return $idTurma;

	}





	public function selectTcc($id){

		$query = "SELECT * FROM tcc where idAluno= $id";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

		if($result->num_rows > 0){
			$result = $result->fetch_array(MYSQLI_ASSOC);
			$id = $result['idtcc'];

		}

		return $id; 
	}

}

?>