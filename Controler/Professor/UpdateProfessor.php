<?php 
session_start();

include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassProf.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoProf.php';
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$siape = unserialize($_SESSION['user'])->getSiape();
	$senha = unserialize($_SESSION['user'])->getSenha();
	$email = $_POST['email'];
	$areaAtua = $_POST['area'];
	$instituicao = $_POST['instituicao'];
	$lattes= $_POST['lattes'];
	$formacao = $_POST['formacao'];

	$professor = new Professor($nome, $siape, $email,  $instituicao,$areaAtua, $lattes, $senha, $formacao);



	$conection = new getConection();
	
	$daoProf = new DaoProf($conection->getMysql());

	$daoProf->updateProf($professor);


?>