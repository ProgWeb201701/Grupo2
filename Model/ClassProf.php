<?php
Class Professor
{

 private $nome;
 private $siape;
 private $email;
 private $instituicao;
 private $areaAtua;
 private $curriculo;
 private $senha
 private $formacao;


function __cosntruct($nome, $siape, $email, $instituicao, $areaAtua, $curriculo, $senha, $formacao){

	$this->nome = $nome;
	$this->siape = $siape;
	$this->email = $email;
	$this->instituicao = $instituicao;
	$this->areaAtua = $areaAtua;
	$this->curriculo = $curriculo;
	$this->senha = $senha;
	$this->formacao = $formacao;
}



public function setNome($nome){
	$this->nome = $nome; 
}
public function setSiape($siape){

	$this->siape = $siape;
}
public function setEmail($email){
	$this->email = $email;

}
public function setAreaAtua($areaAtua){
    $this->areaAtua = $areaAtua;

}
public function setInstituicao($instituicao){
	$this->instituicao = $instituicao;
}

public function setCurriculo($curriculo){
	$this->curriculo = $curriculo;
}
public function setFormacao($formacao){
	$this->formacao = $formacao;
}

public function setSenha($senha){
	$this->senha = $senha;
}

public function getNome(){
	return $this->nome;
}

public function getSiape(){
	return $this->Siape;
}

public function getEmail(){
	return $this->email;
}

public function getAreaAtua(){
	return $this->areaAtua;
}

public function getInstituicao(){
	return $this->instituicao;
}
public function getCurriculo(){
	return $this->curriculo;
}

public function getFormacao(){
	return $this->formacao;
}

public function getSenha(){
	return $this->senha;
}

}
?>