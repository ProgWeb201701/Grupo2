<?php


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
        }
		

	return $idOri;
}


public function consultaAluno($matricula){

	$query = "SELECT * FROM aluno where Matricula= '$matricula'";
	$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);

    if ($result->num_rows > 0) {

        $result = $result->fetch_array(MYSQLI_ASSOC);

        $idAluno = $result['CodAluno']; 
        }
		
print_r($idAluno);

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







		// public function editTarefa($tarefa, $id){
		// 	$query = "UPDATE professor SET $nome=?, $siape=?, $email=?, $instituicao=?, $areaAtua=?, $curriculo=?, $senha=?,  $formacao=? WHERE idProf=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('sssssssi', $nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha,  $formacao, $idAval);
		// 	$nome = $aluno->getNome();
		// 	$siap = $prof->getsiep();
		// 	$email = $prof->getEmail();
		// 	$instituicao = $prof->getInstituicao();
		// 	$areaAtua = $prof->getAreaAtua();
		// 	$curriculo = $prof->getCurriculo();
		// 	$senha = $prof->getSenha();
		// 	$formacaoProf = $prof->getFormacao();
		// 	$idAval = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }

		// public function deleteTarefa($id){
		// 	$query = "DELETE FROM professor WHERE idProf=?";
		// 	$stmt = $this->$mysqli->stmt_init();
		// 	$stmt->prepare($query);
		// 	$stmt->bind_param('i', $idProf);

		// 	$idProf = $id;

		// 	$stmt->execute();
		// 	$stmt->close();
		// }
}

?>