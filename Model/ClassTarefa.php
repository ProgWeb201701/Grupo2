<?php

Class Tarefa{

 private $nome;
 private $descricao;
 private $dinicio;
 private $dfim;
 private $destinatario;
 private $arquivo;



function __construct($nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo){

	$this->nome = $nome;
	$this->descricao = $descricao;
	$this->dinicio = $dinicio;
	$this->dfim = $dfim;
	$this->destinatario = $destinatario;
	$this->arquivo = $arquivo;
}



public function setNome($nome){
	$this->nome = $nome; 
}
public function setDescricao($descricao){
	$this->descricao = $descricao; 
}
public function setDinicio($dinicio){
	$this->dinicio = $dinicio; 
}
public function setDfim($dfim){
	$this->dfim = $dfim; 
}
public function setDestinatario($destinatario){
	$this->destinatario = $destinatario; 
}
public function setArquivo($lattes){
	$this->arquivo = $arquivo; 
}


public function getNome(){
	return $this->nome;
}
public function getDescricao(){
	return $this->descricao;
}
public function getDinicio(){
	return $this->dinicio;
}
public function getDfim(){
	return $this->dfim;
}
public function getDestinatario(){
	return $this->destinatario;
}
public function getArquivo(){
	return $this->arquivo;
}

}
?>