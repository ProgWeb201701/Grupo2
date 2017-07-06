<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTarefa.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTarefa.php';

/**
* 
*/
  class SelectTarefa{
    public $conection;
    public $mysql;
    public $daoTarefa;

  function __construct(){
    $this->conection = new getConection();
    $this->mysql = $this->conection->getMysql();
    $this->daoTarefa = new DaoTarefa($this->mysql);
  }

  public function tarefas($siapeAval){
    return $this->daoTarefa->selectTarefas($siapeAval);
  }
  public function tarefasAluno($siapeAval){
    return $this->daoTarefa->selectTarefasAluno();
  }
}


?>