<?php
Class Aluno
{

 private $Nome;
 private $Matricula;
 private $Email;
 private $Curso;
 private $Instituicao;


function __cosntruct($nome, $matricula, $email, $curso, $instituicao){

	$this->Nome = $nome;
	$this->Matricula = $matricula;
	$this->Email = $email;
	$this->Curso = $curso;
	$this->Instituicao = $instituicao;
}



public function setNome($nome){
	$this->Nome = $nome; 
}
public function setMatricula($matricula){

	$this->Matricula = $matricula;
}
public function setEmail($email){
	$this->Email = $email;

}
public function setCurso($curso){
    $this->Curso = $curso;

}
public function setInstituicao($instituicao){
	$this->Instituicao = $instituicao;
}

public function getNome(){
	return $this->Nome;
}

public function getMatricula(){
	return $this->matricula;
}

public function getEmail(){
	return $this->Email;
}

public function getCurso()){
	return $this->Curso;
}

public function getInstituicao(){
	return $this->Instituicao;
}


}
?>