<?php 

session_start();
 
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAvaliacao.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAvaliacao.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassProf.php';



    //falta fazer todas as validações de erros, tamanho q so pode ser de no maximo 2mb, e toddo o resto.

    $_UP['pasta'] = 'C:\WebServer\Apache2.2\htdocs\Grupo2\uploads\ ';
    $name = $_FILES['files']['name'];
    move_uploaded_file($_FILES['files']['tmp_name'], $_UP['pasta'].$name);
      
   
    ini_set('display_errors', 1);
    $professor = unserialize($_SESSION['user']);
    $nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$parecer= $_POST['parecer'];
	$nota = $_POST['nota'];
	$arquivo = $_UP['pasta'].$name;


	
	
	$conection = new getConection();

	$mysql = $conection->getMysql();

	$daoAvaliacao = new daoAvaliacao($conection->getMysql());
	$idAval = $daoAvaliacao->selectProfessores($professor->getSiape());
	$codAluno = $daoAvaliacao->selectAluno($matricula);

	$avaliacao = new Avaliacao( $nota, $parecer, $arquivo, $idAval, $codAluno);
	$daoAvaliacao->insertAvaliacao($avaliacao);

	
	

	header("Location: ../../View/AdicionarAvaliacao.php");
	exit();

?>