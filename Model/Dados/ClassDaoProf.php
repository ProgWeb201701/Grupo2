<?php
	
	/**
	* 
	*/
	class DaoProf{
		
		private global $mysqli;

		function __construct($mysqli){
			$this->$mysqli = $mysqli;
		}

		public function insertProf($prof){
			$query = "INSERT INTO professor SET idProf=NULL, $nome=?, $siape=?, $email=?, $instituicao=?, $areaAtua=?, $curriculo=?, $senha=?,  $formacao=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssssssss', $nomeProf, $siapProf, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $senhaProf,        $formacaoProf);
			$nomeProf = $aluno->getNome();
			$siapProf = $prof->getSiap();
			$emailProf = $prof->getEmail();
			$instituicaoProf = $prof->getInstituicao();
			$areaAtuaProf = $prof->getAreaAtua();
			$curriculoProf = $prof->getCurriculo();
			$senhaProf = $prof->getSenha();
			$formacaoProf = $prof->getFormacao();

			$stmt->execute();
			$stmt->close();
		}

		public function editProf($prof, $id){
			$query = "UPDATE professor SET $nome=?, $siape=?, $email=?, $instituicao=?, $areaAtua=?, $curriculo=?, $senha=?,  $formacao=? WHERE idProf=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssssssi', $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha,  $formacao, $idAval);
			$nome = $aluno->getNome();
			$siap = $prof->getsiep();
			$email = $prof->getEmail();
			$instituicao = $prof->getInstituicao();
			$areaAtua = $prof->getAreaAtua();
			$curriculo = $prof->getCurriculo();
			$senha = $prof->getSenha();
			$formacaoProf = $prof->getFormacao();
			$idAval = $id;

			$stmt->execute();
			$stmt->close();
		}

		public function deleteProf($id){
			$query = "DELETE FROM professor WHERE idProf=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $idProf);

			$idProf = $id;

			$stmt->execute();
			$stmt->close();
		}
	}

?>