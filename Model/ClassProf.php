<?php
Class Aluno
{

 private $Nome;
 private $Siepe;
 private $Email;
 private $Instituicao;
 private $AreaAtua;
 private $Curriculo;
 private $Formacao;


function __cosntruct($nome, $Siepe, $email, $AreaAtua, $instituicao, $Curriculo, $Formacao){

	$this->Nome = $nome;
	$this->Siepe = $Siepe;
	$this->Email = $email;
	$this->AreaAtua = $AreaAtua;
	$this->Instituicao = $instituicao;
	$this->Curriculo = $Curriculo;
	$this->Formacao = $Formacao;
}



public function setNome($nome){
	$this->Nome = $nome; 
}
public function setSiepe($Siepe){

	$this->Siepe = $Siepe;
}
public function setEmail($email){
	$this->Email = $email;

}
public function setAreaAtua($AreaAtua){
    $this->AreaAtua = $AreaAtua;

}
public function setInstituicao($instituicao){
	$this->Instituicao = $instituicao;
}

public function setCurriculo($curriculo){
	$this->Curriculo = $curriculo;
}
public function setFormacao($formacao){
	$this->Formacao = $formacao;
}

public function getNome(){
	return $this->Nome;
}

public function getSiepe(){
	return $this->Siepe;
}

public function getEmail(){
	return $this->Email;
}

public function getAreaAtua(){
	return $this->AreaAtua;
}

public function getInstituicao(){
	return $this->Instituicao;
}
public function getCurriculo(){
	return $this->Curriculo;
}

public function getFormacao(){
	return $this->Formacao;
}


}
?>