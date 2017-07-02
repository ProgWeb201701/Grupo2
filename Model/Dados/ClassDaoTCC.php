<?php
	
	/**
	* 
	*/

	class DaoTCC{
		
		private $mysqli;

		public function __construct($my){
			$this->mysqli = $my;
		}

		public function insertTCC($TCC, $codAlu, $idTur){
			$query = "INSERT INTO monografia SET idTurma=?, titulo=?, CodAluno=?, orientador=?, palavrasChaves=?, Resumo=?, abstract=?, arquivo=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('isisssss', $idTurma, $titulo, $CodAluno, $orientador, $palavrasChaves, $Resumo, $abstract, $arquivo);
			$idTurma = $idTur;
			$titulo = $TCC->getTitulo();
			$CodAluno = $codAlu;
			$orientador = $TCC->getOrientador();
			$palavrasChaves = $TCC->getPalavraChave();
			$Resumo = $TCC->getResumo();
			$abstract = $TCC->getAbstract();
			$arquivo = $TCC->getArquivo();

			// echo "<br><br>";
  	// 		print_r($TCC);
  	// 		echo "<br><br>";
  	// 		exit();

			$stmt->execute();
			$stmt->close();
		}

		// public function updateTarefa($tarefa, $id){
		// 	$query = "UPDATE tarefa SET nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?, 
		// 	arquivo=? WHERE codTarefa=?";
		// 	$stmt = $this->mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('ssssssi', $nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo, $codTarefa);
		// 	$nome = $tarefa->getNome();
		// 	$descricao = $tarefa->getDescricao();
		// 	$dinicio = $tarefa->getDinicio(); 
		// 	$dfim = $tarefa->getDfim();
		// 	$destinatario = $tarefa->getDestinatario(); 
		// 	$arquivo = $tarefa->getArquivo();
		// 	$codTarefa = $id;
		// 	// echo "<br>";
		// 	// echo "<br>";
		// 	// print_r($query);
		// 	// echo "<br>";
		// 	// echo "<br>";
		// 	// exit();
		// 	$stmt->execute();
		// 	$stmt->close();
		// }

		// public function deleteTarefa($id){
		// 	$query = "DELETE FROM tarefa WHERE codTarefa=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('i', $idProf);

		// 	$idProf = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }
		

		
	}

?>