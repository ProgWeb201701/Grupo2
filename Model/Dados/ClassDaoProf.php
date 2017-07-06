<?php


class DaoProf{

	protected $mysqli;

	public function __construct($mysqli){
		$this->mysqli = $mysqli;
	}





	public function insertProf($prof){
		
		

<<<<<<< Updated upstream
			$query = "INSERT INTO professor SET idAval=NULL, nome=?, siape=?, email=?, instituicao=?, area=?,			linkLattes=?, senha=?, formacao=?, codFunc=?";
			$stmt = $this->mysqli->prepare($query);
			
=======
		$query = "INSERT INTO professor SET idAval=NULL, nome=?, siape=?, email=?, instituicao=?, area=?,			linkLattes=?, senha=?, formacao=?, codFunc=?";
		$stmt = $this->mysqli->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param('ssssssssi', $nomeProf, $siape, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $senhaProf, $formacaoProf, $codFunc);
>>>>>>> Stashed changes



		$nomeProf = $prof->getNome();
		$siape = $prof->getSiape();
		$emailProf = $prof->getEmail();
		$instituicaoProf = $prof->getInstituicao();
		$areaAtuaProf = $prof->getAreaAtua();
		$curriculoProf = $prof->getCurriculo();
		$senhaProf = $prof->getSenha();
		$formacaoProf = $prof->getFormacao();
			$codFunc = 2; /// obter de algum lugar o codfunc

<<<<<<< Updated upstream
			$stmt->bind_param("ssssssssi", $nomeProf, $siape, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $senhaProf, $formacaoProf, $codFunc);
=======

>>>>>>> Stashed changes

			$stmt->execute();
			$stmt->close();
		}



		public function updateProf($prof){


			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare("UPDATE professor SET nome=?, email=?, instituicao=?, area=?, linklattes=?,   formacao=?, codFunc =? WHERE siape=? and senha=?");
			$stmt->bind_param('ssssssiss', $nome, $email, $instituicao, $area, $linkLattes, $formacao, $codFunc, $siape, $senha);

			$nome = $prof->getNome();
			$siape= $prof->getSiape();
			$email = $prof->getEmail();
			$instituicao = $prof->getInstituicao();
			$area = $prof->getAreaAtua();
			$linkLattes = $prof->getCurriculo();
			$senha = $prof->getSenha();
			$formacao = $prof->getFormacao();
			$codfunc = 2;

			// echo ("<pre>");
			// print_r($senha);
			// echo ("<pre>");
			// exit();





			
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