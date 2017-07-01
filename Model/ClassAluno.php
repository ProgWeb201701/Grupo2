<?php
Class Aluno
{

 private $nome;
 private $matricula;
 private $senha;
 private $email;
 private $curso;
 private $instituicao;
 private $lattes;



function __cosntruct($nome, $matricula, $senha, $email, $curso, $instituicao, $lattes){

	$this->nome = $nome;
	$this->matricula = $matricula;
	$this->senha = $senha;
	$this->email = $email;
	$this->curso = $curso;
	$this->instituicao = $instituicao;
	$this->lattes = $lattes;
}



public function setNome($nome){
	$this->nome = $nome; 
}
public function setMatricula($matricula){

	$this->matricula = $matricula;
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
public function setSenha($senha){
	$this->senha = $senha;
}
public function setLattes($lattes){
	$this->lattes = $lattes;
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

public function getCurso(){
	return $this->Curso;
}

public function getInstituicao(){
	return $this->Instituicao;
}

public function getSenha(){
	return $this->senha;
}

public function getLattes(){
	return $this->lattes;
}

}
?>