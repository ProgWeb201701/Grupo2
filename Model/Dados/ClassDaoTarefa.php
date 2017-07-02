<?php
	
	/**
	* 
	*/
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

	class DaoTarefa{
		
		private $mysqli;

		public function __construct($my){
			$this->mysqli = $my;
		}

		public function insertTarefa($tarefa){
			$query = "INSERT INTO tarefa SET codTarefa=NULL, nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?,			arquivo=?, idAvaliador=NULL, codAluno=NULL, codNota=NULL";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			// , $idAvaliador, $codAluno, $codNota
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

		public function updateTarefa($tarefa, $id){
			$query = "UPDATE tarefa SET $nome=null, $descricao=?, $dinicio=?, $dfim=?, $destinatario=?, 
			$arquivo=? WHERE codTarefa=?";
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

		
	}

?>