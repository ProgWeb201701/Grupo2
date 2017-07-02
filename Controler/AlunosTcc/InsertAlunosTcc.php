<?php 
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTcc.php';
	
ini_set('display_errors', 1);
	$codigo = $_POST['codigo'];
	$matricula = $_POST['matricula'];
	$siape = $_POST['siape'];
	

	$conection = new getConection();
	
	$daoT = new DaoTcc($conection->getMysql());

	$idOri = $daoT->consultaOri($siape);

	$idAluno = $daoT->consultaAluno($matricula);
	print_r($idAluno);

	$idTurma = $daoT->consultaTurma($codigo);

	$daoT->insertTcc($idAluno, $idOri, $idTurma);	

?>