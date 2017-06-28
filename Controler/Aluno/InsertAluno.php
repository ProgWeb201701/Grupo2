<?php 
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$curso = $_POST['curso'];
	$instituicao = $_POST['instituicao'];
	$lattes = $_POST['lattes'];

	$aluno = new Aluno($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);

	$conection = new getConection();
	$mysql = $conection->getMysql();

	$daoAluno = new DaoALuno($mysql->getMysqli());

	$daoAluno->insertAluno($aluno);


?>