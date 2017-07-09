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
			
			
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare("UPDATE aluno SET nome=?, email=?, curso=?, instituicao=?, linklattes=? WHERE matricula=? and senha=?");
			$stmt->bind_param('sssssss', $nome,$email, $curso, $instituicao, $lattes, $matricula, $senha);
			
			$nome = $aluno->getNome();
			$matricula = $aluno->getMatricula();
			$senha = $aluno->getSenha();
			$email = $aluno->getEmail();
			$curso = $aluno->getCurso();
			$instituicao = $aluno->getInstituicao();
			$lattes = $aluno->getLattes();
			
			
			$stmt->execute();
			$stmt->close();
		}

		public function deleteAluno($aluno){
			$query = "DELETE FROM aluno WHERE matricula=? and senha= ?";
			$stmt = $this->mysqli->stmt_init();
			$stmt->prepare($query);
			$stmt->bind_param('ss', $matriculaAluno, $senhaAluno);

			$matriculaAluno = $aluno->getMatricula();
			$senha = $aluno->getSenha();

			$stmt->execute();
			$stmt->close();
		}

	}

?>