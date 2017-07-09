<?php

class DaoProf{

	protected $mysqli;

	public function __construct($mysql){
		$this->mysqli = $mysql;
	}





	public function insertProf($prof){
		$query = "INSERT INTO professor SET nome=?, siape=?, email=?, instituicao=?, area=?,			linkLattes=?, senha=?, formacao=?, codFunc=?";
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param("ssssssssi", $nomeProf, $siape, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $senhaProf, $formacaoProf, $codFunc);		


		$nomeProf = $prof->getNome();
		$siape = $prof->getSiape();
		$emailProf = $prof->getEmail();
		$instituicaoProf = $prof->getInstituicao();
		$areaAtuaProf = $prof->getAreaAtua();
		$curriculoProf = $prof->getCurriculo();
		$senhaProf = $prof->getSenha();
		$formacaoProf = $prof->getFormacao();
		$codFunc = 2; /// obter de algum lugar o codfunc

			
			$stmt->execute();
			$stmt->close();




		}



		public function updateProf($prof){


			$query = "UPDATE  professor SET nome=?, email=?, instituicao=?, area=?, linkLattes=?, formacao=?, codfunc = ? WHERE siape = ?";
			$stmt = $this->mysqli->prepare($query);
			$stmt->bind_param('ssssssis', $nomeProf, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf,  $formacaoProf, $codfunc, $siape);

			$nomeProf = $prof->getNome();			
			$emailProf = $prof->getEmail();
			$instituicaoProf = $prof->getInstituicao();
			$areaAtuaProf = $prof->getAreaAtua();
			$curriculoProf = $prof->getCurriculo();			
			$formacaoProf = $prof->getFormacao();
			$siape = $prof->getSiape();
			$codfunc = 2;



				
			
			
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
