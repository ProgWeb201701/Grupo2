<?php  
  session_start();
  if (!isset($_SESSION["user"]) ){
    header("Location: LoginApp.php");
  }else{
      $aux = unserialize($_SESSION['nivel']);
    }
    if ($aux != "coordenador") {
      header("Location: LoginApp.php");
  }

include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

ini_set('display_errors', 1);

  $_UP['pasta'] = 'C:\WebServer\Apache2.2\htdocs\Grupo2\uploads\ ';
  $name = $_FILES['files']['name'];
  move_uploaded_file($_FILES['files']['tmp_name'], $_UP['pasta'].$name);
 
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $dinicio = $_POST['dinicio'];
  $dfim = $_POST['dfim'];
  $destinatario = $_POST['destinatario'];
  $arquivo = $_UP['pasta'].$name;
  
  $tarefa = new Tarefa($nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo);

  $conection = new getConection();
  $mysql = $conection->getMysql();
  $daoTarefa = new DaoTarefa($mysql);
  $usuario = $_SESSION['user'];
  $usuario = unserialize($usuario);
  $daoTarefa->insertTarefa($tarefa, $usuario);

  header("Location: ../../View/menuCoordenador.php");
  exit();


?>