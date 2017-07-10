<?php 

session_start();
$_SESSION['user'] = serialize($aluno); 
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassMonografia.php';
include  'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAluno.php';

ini_set('display_errors', 1);

$_UP['pasta'] = 'C:\WebServer\Apache2.2\htdocs\Grupo2\uploads\ ';
$name = $_FILES['files']['name'];
move_uploaded_file($_FILES['files']['tmp_name'], $_UP['pasta'].$name);




$titulo = $_POST['nome'];
$autor = $_POST['matricula'];
$orientador = $_POST['senha'];
$pchave = $_POST['email'];
$resumo = $_POST['curso'];
$arquivo = $_UP['pasta'].$name;



$monografia = new Monografia($titulo, $autor, $orientador, $pchave, $resumo, $arquivo);


$conection = new getConection();

$mysql = $conection->getMysql();

$daoMonografia = new DaoMonografia($conection->getMysql());

$daoMonografia->insertAluno($monografia);



header("Location: ../../View/menuAluno.php");
exit();

?>