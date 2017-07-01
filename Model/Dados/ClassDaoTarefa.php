<?php
	
	/**
	* 
	*/
	class DaoTarefa{
		
		private global $mysqli;

		public function __construct($mysqli){
			$this->$mysqli = $mysqli;
		}

		public function insertTarefa($tarefa){
			$query = "INSERT INTO tarefa SET codTarefa=NULL, $nome=?, $descricao=?, $dinicio=?, $dfim=?, $destinatario=?, 
			$arquivo=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssssss', $nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo);
			$nome = $tarefa->getNome();
			$descricao = $tarefa->getDescricao();
			$dinicio = $tarefa->getDinicio(); 
			$dfim = $tarefa->getDfim();
			$destinatario = $tarefa->getDestinatario(); 
			$arquivo = $tarefa->getArquivo();

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