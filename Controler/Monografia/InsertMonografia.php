<?php 

 
	session_start();
	if (!isset($_SESSION["user"]) ){
		header("Location: LoginApp.php");
	}else{
    	$aux = unserialize($_SESSION['nivel']);
    }
    if ($aux != "aluno") {
    	header("Location: LoginApp.php");
    }

include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassMonografia.php';
include_once  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoMonografia.php';

ini_set('display_errors', 1);

$_UP['pasta'] = 'C:\WebServer\Apache2.2\htdocs\Grupo2\uploads\ ';
$name = $_FILES['files']['name'];
move_uploaded_file($_FILES['files']['tmp_name'], $_UP['pasta'].$name);




$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$orientador = $_POST['siape'];
$pchave = $_POST['pchave'];
$resumo = $_POST['resumo'];
$arquivo = $_UP['pasta'].$name;



$monografia = new Monografia($titulo, $autor, $orientador, $pchave, $resumo, $arquivo);


$conection = new getConection();

$mysql = $conection->getMysql();

$daoMon = new DaoMonografia($conection->getMysql());

$daoMon->insertMonografia($monografia);



header("Location: ../../View/menuAluno.php");
exit();

?>