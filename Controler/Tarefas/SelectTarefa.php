<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

/**
* 
*/
public class selectTarefa{
    public $conection;
    public $mysql;
    public $daoTarefa;

  function __construct(){
    $this->conection = new getConection();
    $this->mysql = $conection->getMysql();
    $this->daoTarefa = new DaoTarefa($mysql);
  }

  public function tarefas(){
    return $this->daoTarefa->selectTarefas();
  }
}


?>