<?php
	

	
	class DaoAluno{
		
		protected $mysqli;

	function __construct($mysql){
		$this->mysqli = $mysql;
	}

		public function insertAluno($aluno){
	

	
			
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare( "INSERT INTO aluno SET CodAluno=NULL, nome=?, matricula=?, senha=?, email=?, curso=?, instituicao=?, LinkLattes=?");

	
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

		public function updateAluno($aluno){
			$query = "UPDATE aluno SET nome=?, email=?, curso=?, instituicao=?, lattes=? WHERE matricula=? and senha=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssssss', $nomeAluno,$emailAluno, $cursoAluno, $instituicaoAluno, $lattesAluno, $codAluno, $matriculaAluno, $senhaAluno);
			$nomeAluno = $aluno.getNome();
			$matriculaAluno = $aluno->getMatricula();
			$senhaAluno = $aluno->getSenha();
			$emailAluno = $aluno->getEmail();
			$CursoAluno = $aluno->getCurso();
			$instituicaoAluno = $aluno->getInstituicao();
			$lattesAluno = $aluno->getLattes();
			
			$stmt->execute();
			$stmt->close();
		}

		public function deleteAluno($id){
			$query = "DELETE FROM aluno WHERE idAluno=?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $codAluno);

			$codAluno = $id;

			$stmt->execute();
			$stmt->close();
		}

	}

?>