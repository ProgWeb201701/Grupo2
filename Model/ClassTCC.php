<?php

Class TCC{

 private $titulo;
 private $orientador;
 private $palavraChave;
 private $resumo;
 private $abstract;
 private $arquivo;



function __construct($titulo, $orientador, $palavraChave, $resumo, $abstract, $arquivo){

	$this->titulo = $titulo;
	$this->orientador = $orientador;
	$this->palavraChave = $palavraChave;
	$this->resumo = $resumo;
	$this->abstract = $abstract;
	$this->arquivo = $arquivo;
}



public function setTitulo($titulo){
	$this->titulo = $titulo; 
}
public function setOrientador($orientador){
	$this->orientador = $orientador; 
}
public function setPalavraChave($palavraChave){
	$this->palavraChave = $palavraChave; 
}
public function setResumo($resumo){
	$this->resumo = $resumo; 
}
public function setAbstract($abstract){
	$this->abstract = $abstract; 
}
public function setArquivo($lattes){
	$this->arquivo = $arquivo; 
}


public function getTitulo(){
	return $this->titulo;
}
public function getOrientador(){
	return $this->orientador;
}
public function getPalavraChave(){
	return $this->palavraChave;
}
public function getResumo(){
	return $this->resumo;
}
public function getAbstract(){
	return $this->abstract;
}
public function getArquivo(){
	return $this->arquivo;
}
}

?>