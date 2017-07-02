<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

ini_set('display_errors', 1);
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $dinicio = $_POST['dinicio'];
  $dfim = $_POST['dfim'];
  // $destinatario = $_POST['destinatario'];
  // $arquivo = $_POST['arquivotarefa'];
  $destinatario = "alguma outra coisa";
  $arquivo = "alguma coisa";
  $id = 0;

  $tarefa = new Tarefa($nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo);

  $conection = new getConection();
  $mysql = $conection->getMysql();
  $daoTarefa = new DaoTarefa($mysql);
  // echo "<br>";
  // print_r($tarefa);
  // echo "<br>";
  // exit();
  $daoTarefa->updateTarefa($tarefa, $id);

  header("Location: ../../View/MenuAvaliador.php");
  exit();


?>