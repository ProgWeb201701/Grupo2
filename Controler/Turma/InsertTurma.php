<?php 
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTurma.php';
	
ini_set('display_errors', 1);
	$codigoturma = $_POST['codigo'];
	$curso = $_POST['curso'];
	$semestre = $_POST['semestre'];
	$siape = $_POST['siape'];
	

	$conection = new getConection();
	
	$daoTur = new DaoTurma($conection->getMysql());

	$idcor = $daoTur->consultaCoordenador($siape);

	$daoTur->insertTurma($codigoturma, $semestre, $curso, $idcor);	

	header("Location: ../../View/menuCoordenador.php");
	exit();
?>