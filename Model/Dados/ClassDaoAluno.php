<?php
	

	
	class DaoAluno{
		
		protected $mysqli;

	function __construct($mysql){
		$this->mysqli = $mysql;
	}

		public function insertAluno($aluno){
	

	
			
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare( "INSERT INTO aluno SET CodAluno=NULL, nome=?, matricula=?, senha=?, email=?, curso=?, instituicao=?, LinkLattes=?");

			// echo "<pre>";
   //      print_r($stmt);
	  //   echo "</pre>";
	  //   exit();
			$stmt->bind_param('sssssss', $nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);

			$nome = $aluno->getNome();
			$matricula = $aluno->getMatricula();
			$senha = $aluno->getSenha();
			$email = $aluno->getEmail();
			$curso = $aluno->getCurso();
			$instituicao = $aluno->getInstituicao();
			$lattesAluno = $aluno->getLattes();

		



			$stmt->execute();
			$stmt->close();
		}

		public function editAluno($aluno, $id){
			$query = "UPDATE aluno SET $nome=?, $matricula=?, $senha=?, $email=?, $curso=?, $instituicao=?, $lattes=? WHERE idAluno=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssssssi', $nomeAluno, $matriculaAluno, $senhaAluno, $emailAluno, $cursoAluno, $instituicaoAluno, $lattesAluno, $codAluno);
			$nomeAluno = $aluno.getNome();
			$matriculaAluno = $aluno->getMatricula();
			$senhaAluno = $aluno->getSenha();
			$emailAluno = $aluno->getEmail();
			$CursoAluno = $aluno->getCurso();
			$instituicaoAluno = $aluno->getInstituicao();
			$lattesAluno = $aluno->getLattes();
			$codAluno = $id;

			$stmt->execute();
			$stmt->close();
		}

		public function deleteAluno($id){
			$query = "DELETE FROM aluno WHERE idAluno=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $codAluno);

			$codAluno = $id;

			$stmt->execute();
			$stmt->close();
		}

	}

?>