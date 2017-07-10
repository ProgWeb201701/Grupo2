<?php

Class Monografia{

 private $titulo;
 private $autor;
 private $orientador;
 private $pChave;
 private $arquivo;
 



function __construct($titulo, $autor, $orientador, $resumo, $pChave, $arquivo){

	$this->titulo = $titulo;
	$this->autor = $autor;
	$this->orientador = $orientador;
	$this->resumo = $resumo;
	$this->pChave = $pChave;
	$this->arquivo = $arquivo;
}



public function setTitulo($titulo){
	$this->titulo = $titulo; 
}
public function setAutor($autor){
	$this->autor = $autor; 
}
public function setOrientador($orientador){
	$this->orientador = $orientador; 
}
public function setResumo($resumo){
	$this->resumo = $resumo; 
}
public function setPChave($pChave){
	$this->pChave = $pChave; 
}
public function setArquivo($lattes){
	$this->arquivo = $arquivo; 
}


public function getTitulo(){
	return $this->titulo;
}
public function getAutor(){
	return $this->autor;
}
public function getOrientador(){
	return $this->orientador;
}
public function getResumo(){
	return $this->resumo;
}
public function getPChave(){
	return $this->pChave;
}
public function getArquivo(){
	return $this->arquivo;
}

}
?>