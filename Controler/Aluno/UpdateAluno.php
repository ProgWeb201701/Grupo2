<?php  
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAluno.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAluno.php';
    

	$login = $_section["login"];
	$senha = $_section["senha"];
	$conection = new getConection();

	$mysql = $conection->getMysql();

	$daoAluno = new DaoALuno($conection->getMysql());

	$aluno = new Aluno();

	$aluno = $daoAluno->selectLoginAluno($login, $senha);

	header("Location: ../View/EditarPerfilAluno.php");
	exit();

					

?>