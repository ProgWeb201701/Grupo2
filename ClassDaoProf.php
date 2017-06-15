<?php
	
	/**
	* 
	*/
	class DaoProf{
		
		private $mysqli;

		function __construct($mysqli){
			$this->$mysqli = $mysqli;
		}

		public function insertProf($prof){
			$query = "INSERT INTO professor SET idProf=NULL, $nomeProf = ?, $siepProf = ?, $emailProf = ?, $instituicaoProf = ?, $areaAtuaProf = ?, $curriculoProf, $formacaoProf = ?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sisssss', $nomeProf, $siepProf, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $formacaoProf);
			$nomeProf = $aluno->getNome();
			$siepProf = $prof->getsiep();
			$emailProf = $prof->getEmail();
			$instituicaoProf = $prof->getInstituicao();
			$areaAtuaProf = $prof->getAreaAtua();
			$curriculoProf = $prof->getCurriculo();
			$formacaoProf = $prof->getFormacao();

			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}

		public function editProf($prof, $id){
			$query = "UPDATE professor SET $nomeProf = ?, $siepProf = ?, $emailProf = ?, $instituicaoProf = ?, $areaAtuaProf = ?, $curriculoProf = ?, $formacaoProf = ? WHERE idProf=?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sisssssi', $nomeProf, $siepProf, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $formacaoProf, $idProf);
			$nomeProf = $aluno->getNome();
			$siepProf = $prof->getsiep();
			$emailProf = $prof->getEmail();
			$instituicaoProf = $prof->getInstituicao();
			$areaAtuaProf = $prof->getAreaAtua();
			$curriculoProf = $prof->getCurriculo();
			$formacaoProf = $prof->getFormacao();
			$idProf = $id;

			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}

		public function deleteProf($id){
			$query = "DELETE FROM professor WHERE idProf=?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $idProf);

			$idProf = $id;

			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}
	}

?>