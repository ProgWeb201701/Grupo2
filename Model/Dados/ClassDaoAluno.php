<?php
	
	/**
	* 
	*/
	class DaoAluno{
		
		private $mysqli;

		function __construct($mysqli){
			$this->$mysqli = $mysqli;
		}

		public function insertAluno($aluno){
			$query = "INSERT INTO aluno SET idAluno=NULL, $nomeAluno = ?, $matriculaAluno = ?, $emailAluno = ?, $cursoAluno = ?, $instituicaoAluno = ?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sisss', $nomeAluno, $matriculaAluno, $emailAluno, $CursoAluno, $instituicaoAluno);
			$nomeAluno = $aluno.getNome();
			$matriculaAluno = $aluno->getMatricula();
			$emailAluno = $aluno->getEmail();
			$CursoAluno = $aluno->getCurso();
			$instituicaoAluno = $aluno->getInstituicao();
			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}

		public function editAluno($aluno, $id){
			$query = "UPDATE aluno SET $nomeAluno = ?, $matriculaAluno = ?, $emailAluno = ?, $cursoAluno = ?, $instituicao = ? WHERE idAluno=?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('sissi', $nomeAluno, $matriculaAluno, $emailAluno, $CursoAluno, $instituicaoAluno, $idAluno);
			$nomeAluno = $aluno->getNome();
			$matriculaAluno = $aluno->getMatricula();
			$emailAluno = $aluno->getEmail();
			$CursoAluno = $aluno->getCurso();
			$instituicaoAluno = $aluno->getInstituicao();
			$idAluno = $id;

			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}

		public function deleteAluno($id){
			$query = "DELETE FROM aluno WHERE idAluno=?";
			$stmt = $mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('i', $idAluno);

			$idAluno = $id;

			$stmt->execute();
			$stmt->close();
			$mysqli->close();
		}

	}

?>