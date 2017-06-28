<?php
Class CoordenadorTCC
{

 private $nome;
 private $senha


function __cosntruct($nome, $senha){

	$this->nome = $nome;
	$this->senha = $senha;
}



public function setNome($nome){
	$this->nome = $nome; 
}

public function setSenha($senha){
	$this->senha = $senha;
}

public function getNome(){
	return $this->nome;
}

public function getSenha(){
	return $this->senha;
}

}
?>