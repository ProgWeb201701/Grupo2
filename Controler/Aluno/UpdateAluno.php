<?php  
session_start();
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAluno.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAluno.php';
    

    $matricula = unserialize($_SESSION['user'])->getMatricula();
    $senha = unserialize($_SESSION['user'])->getSenha();

    $curso = $_POST['curso'];
    $instituicao = $_POST['instituicao'];
    $lattes = $_POST['lattes'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];


    $aluno = new Aluno($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);

	$conection = new getConection();

	$mysql = $conection->getMysql();

	$daoAluno = new DaoALuno($conection->getMysql());

	$daoAluno->updateAluno($aluno);

	

	
	

	header("Location: ../View/EditarPerfilAluno.php");
	exit();

					

?>