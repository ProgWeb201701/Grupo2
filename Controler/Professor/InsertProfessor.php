<?php 

include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassProf.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoProf.php';
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$siape = $_POST['siape'];
	$email = $_POST['email'];
	$areaAtua = $_POST['area'];
	$instituicao = $_POST['instituicao'];
	$curriculo = $_POST['lattes'];
	$senha = $_POST['senha'];
	$formacao = $_POST['formacao'];

	$professor = new Professor($nome, $siape, $email, $areaAtua, $instituicao, $curriculo, $senha, $formacao);

   //   echo ("<pre>");
			// print_r($professor);
			// echo ("<pre>");
			// exit();



	$conection = new getConection();
	
	$daoProf = new DaoProf($conection->getMysql());

	$daoProf->insertProf($professor);
	

	//header("Location: ../../View/menuOrientador.php");
	exit();

?>