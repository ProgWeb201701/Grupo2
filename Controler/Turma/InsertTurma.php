<?php 
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTurma.php';
	
ini_set('display_errors', 1);
	$codigo = $_POST['codigo'];
	$curso = $_POST['curso'];
	$semestre = $_POST['semestre'];
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$orientador = $_POST['orientador'];

	$conection = new getConection();
	
	$daoTur = new DaoTurma($conection->getMysql());

	$daoTur->insertTurna($semestre, $curso, 1);


	$codori = $daoTur->consultaOrientador($orientador);

	$daoTur->insertTurna($nome, $matricula, $codori);



?>