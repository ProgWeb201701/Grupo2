<?php
Class Professor
{

 private $nome;
 private $matricula;
 private $titulo;
 private $nota;
 private $parecer;
 private $arquivo;

function __construct($nome, $matricula, $titulo, $nota, $parecer, $arquivo){

	$this->nome = $nome;
	$this->matricula = $matricula;
	$this->titulo = $titulo;
	$this->nota = $nota;
	$this->parecer = $parecer;
	$this->arquivo = $arquivo;
	



public function setNome($nome){
	$this->nome = $nome; 
}
public function setMatricula($matricula){

	$this->matricula = $matricula;
}
public function setTitulo($titulo){
	$this->titulo = $titulo;

}
public function setParecer($parecer){
    $this->parecer = $parecer;

}
public function setNota($nota){
	$this->nota = $nota;
}
public function setArquvo($arquivo){
	$this->arquivo = $arquivo;
}


public function getNome(){
	return $this->nome;
}

public function getMatricula(){
	return $this->matricula;
}

public function getTitulo(){
	return $this->titulo;
}

public function getParecer(){
	return $this->parecer;
}

public function getNota(){
	return $this->nota;
}public function getArquivo(){
	return $this->arquivo;
}



}
?>