<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

ini_set('display_errors', 1);
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $dinicio = $_POST['dinicio'];
  $dfim = $_POST['dfim'];
  $destinatario = $_POST['destinatario'];
  // $arquivo = $_POST['arquivotarefa'];
  $arquivo = "alguma coisa";


  $tarefa = new Tarefa($nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo);

  $conection = new getConection();
  $mysql = $conection->getMysql();
  $daoTarefa = new DaoTarefa($mysql);

  $daoTarefa->insertTarefa($tarefa);

  header("Location: ../../View/MenuAvaliador.php");
  exit();


?>