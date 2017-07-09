<?php 

session_start();
 
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAvaliacao.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAvaliacoo.php';
 
    ini_set('display_errors', 1);
    $professor= unserialize($_POST['user']);
    $nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$parecer= $_POST['parecer'];
	$nota = $_POST['nota'];
	$arquivo = $_POST['arquivo'];


	//buscar aluno
	
	
	
	$conection = new getConection();

	$mysql = $conection->getMysql();

	$daoAvaliacao = new daoAvaliacao($conection->getMysql());
	$idAval = $daoAvaliacao->selectProfessor($professor->getSiape(), $professor->getSenha());
	$codAluno = $daoAvaliacao->selectAluno($matricula);

	$avaliacao = new Avaliacao( $nota, $parecer, $arquivo, $idAval, $codAluno);
	$daoAluno->insertAvaliacao($aluno);

	

	header("Location: ../../View/....");
	exit();

?>