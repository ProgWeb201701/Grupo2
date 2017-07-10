<?php  
session_start();
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAluno.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAluno.php';
    

    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    $nome=null;
    $email=null;
    $curso=null;
    $instituicao=null;
    $lattes=null;
    


    $aluno = new Aluno($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes);
    

	$conection = new getConection();

	$mysql = $conection->getMysql();

	$daoAluno = new DaoALuno($conection->getMysql());

	$daoAluno->deleteAluno($aluno);	
	
	
	header("Location: ../../View/LoginApp.php");
	exit();

					

?>