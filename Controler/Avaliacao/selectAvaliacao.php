<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAvaliacao.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoAvaliacao.php';

/**
* 
*/
  class SelectAvaliacao{

    
    
    public $conection;
    public $mysql;
    public $daoAvaliacao;
    public $obj;
  function __construct(){
    $this->conection = new getConection();
    $this->mysql = $this->conection->getMysql();
    $this->daoAvaliacao = new DaoAvaliacao($this->mysql);
   
    $this->obj = unserialize($_SESSION['user']);
  }

  public function selectAvaProf(){

    // echo "<br>";
    // print_r($this->obj);
    // echo "<br>";
    // exit();
    $idProf = $this->daoAvaliacao->selectProfessores($this->obj->getSiape());
    return $this->daoAvaliacao->selectAvaliacaoProfessor($idProf);
  }

  // public function selectAvaliacaoAluno($this->obj->getMatricula()){
  //   return $this->daoAvaliacao->selectAvaliacaoAluno();
  // }

  public function cordCord(){
    return $this->daoAvaliacao->selectAvaliacaoAll();
  }
}


?>