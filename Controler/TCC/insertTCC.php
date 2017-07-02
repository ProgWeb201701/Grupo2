<?php 
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassTCC.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassDaoTCC.php';

ini_set('display_errors', 1);
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $orientador = $_POST['orientador'];
  $palavraChave= $_POST['palavrachave'];
  $resumo = $_POST['resumo'];
  $abstract = $_POST['abstract'];
  // $arquivo = $_POST['Arquivo'];
  $arquivo = "alguma coisa";


  $TCC = new TCC($titulo, $orientador, $palavraChave, $resumo, $abstract, $arquivo);

  // echo "<br><br>";
  // print_r($TCC);
  // echo "<br><br>";
  // exit();

  $conection = new getConection();
  $mysql = $conection->getMysql();
  $daoTCC = new DaoTCC($mysql);
  $idTurma = 1;

    // echo "<br><br>";
    // print_r($autor);
    // echo "<br><br>";
    // exit();

  $codAluno = $daoTCC->consultaAluno($autor);
  if($codAluno != null){
    $daoTCC->insertTCC($TCC, $codAluno, $idTurma);

    
    header("Location: ../../View/MenuAluno.php");
    exit();
}else{
  echo "error";
}

?>