<?php
	
	/**
	* 
	*/

	class DaoTcc{
 

 
  protected $mysqli;
 

 
  public function __construct($mysqli){
 
    $this->mysqli = $mysqli;
 
  }
 

 
  public function insertTcc($idAluno, $idOri, $idTurma){
 
    $query = "INSERT INTO tcc SET idTcc =NULL, idAluno = ?, idOri=?, idTurma =?";
 

 
    $stmt = $this->mysqli->stmt_init();
 
    $stmt->prepare($query);
 
    $stmt->bind_param('iii', $idAluno, $idOri, $idTurma);
 

 

 
    $stmt->execute();
 

 

 
    $stmt->close();
 
  }

  public function consultaOri($siape){
 

 
  $query = "SELECT * FROM professor where siape= '$siape'";
 
  $result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
 
    if ($result->num_rows > 0) {
 

 
        $result = $result->fetch_array(MYSQLI_ASSOC);
 
        $idOri = $result['idAval']; 
 		return $idOri;
    }
 
    
 	return null;

 
  
 
}
 
 public function consultaAluno($matricula){
 

 
  $query = "SELECT * FROM aluno where Matricula= '$matricula'";
 
  $result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
 

 
    if ($result->num_rows > 0) {
 

 
        $result = $result->fetch_array(MYSQLI_ASSOC);
 

 
        $idAluno = $result['CodAluno']; 
 
        } 

  return $idAluno;
  
}
 
 
public function consultaTurma($codigo){
 $query = "SELECT * FROM turma where codigoturma= '$codigo'";
 
  $result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
 

 
    if ($result->num_rows > 0) {
 
      $result = $result->fetch_array(MYSQLI_ASSOC);
 
        $idTurma = $result['idTurma']; 
 
        }
  return $idTurma;
 

 
}
 





		// public function updateTarefa($tarefa, $id){
		// 	$query = "UPDATE tarefa SET nome=?, descricao=?, dinicio=?, dfim=?, destinatario=?, 
		// 	arquivo=? WHERE codTarefa=?";
		// 	$stmt = $this->mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('ssssssi', $nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo, $codTarefa);
		// 	$nome = $tarefa->getNome();
		// 	$descricao = $tarefa->getDescricao();
		// 	$dinicio = $tarefa->getDinicio(); 
		// 	$dfim = $tarefa->getDfim();
		// 	$destinatario = $tarefa->getDestinatario(); 
		// 	$arquivo = $tarefa->getArquivo();
		// 	$codTarefa = $id;
		// 	// echo "<br>";
		// 	// echo "<br>";
		// 	// print_r($query);
		// 	// echo "<br>";
		// 	// echo "<br>";
		// 	// exit();
		// 	$stmt->execute();
		// 	$stmt->close();
		// }

		// public function deleteTarefa($id){
		// 	$query = "DELETE FROM tarefa WHERE codTarefa=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('i', $idProf);

		// 	$idProf = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }
		

		
	}

?>