<?php
	
	
	class DaoProf{
		
		protected $mysqli;

		public function __construct($mysqli){
			$this->mysqli = $mysqli;
		}





		public function insertProf($prof){
		
		

			$query = "INSERT INTO professor SET idAval=NULL, nome=?, siape=?, email=?, instituicao=?, area=?,			linkLattes=?, senha=?, formacao=?, codFunc=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ssssssssi', $nomeProf, $siapeprof, $emailProf, $instituicaoProf, $areaAtuaProf, $curriculoProf, $senhaProf, $formacaoProf, $codFunc);

			$nomeProf = $prof->getNome();
			$siapProf = $prof->getSiape();
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



		public function editProf($prof, $id){
			$query = "UPDATE professor SET nome=?, siape=?, email=?, instituicao=?, areaAtua=?, curriculo=?, senha=?,  formacao=? WHERE idAval=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssssssi', $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha,  $formacao, $idAval);
			$nome = $aluno->getNome();
			$siap = $prof->getSiepe();
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