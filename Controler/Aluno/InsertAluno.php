<?php 
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$email = $_POST['email'];
	$curso = $_POST['curso'];
	$instituicao = $_POST['instituicao'];

	$aluno = new Aluno($nome, $matricula, $email, $curso, $instituicao);

	$mysql = new getConection();

	$daoAluno = new DaoALuno($mysql->getMysqli());

	$daoAluno->insertAluno($aluno);
}

?>