<?php
	
	/**
	* 
	*/
	class DaoAluno{
		
		private  $mysqli;

		function __construct($mysql){
			$this->$mysqli = $mysql;
		}

		public function insertAluno($aluno){
			$query = "INSERT INTO aluno SET idAluno=NULL, $nome=?, $matricula=?, $senha=?, $email=?, $curso=?, $instituicao=?, $lattes=?";
			$stmt = $this->$mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sssssss', $nomeAluno, $matriculaAluno, $senhaAluno, $emailAluno, $cursoAluno, $instituicaoAluno, $lattesAluno);
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