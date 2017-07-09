<?php
Class Avaliacao
{

 private $nota;
 private $parecer;
 private $arquivo;
 private $idAval;
 private $codAluno;

function __construct($nota, $parecer, $arquivo, $idAval, $codAluno){

	$this->nota = $nota;
	$this->parecer = $parecer;
	$this->arquivo = $arquivo;
	$this->idAval = $idAval;
	$this->codAluno = $codAluno;
	

}



public function setNota($nota){
	$this->nota = $nota;
}
public function setParecer($parecer){
    $this->parecer = $parecer;

}
public function setArquvo($arquivo){
	$this->arquivo = $arquivo;
}
 
public function setIdAval($idAval){

$this->idAval=$idAval;

} 
public function setCodAluno($codAluno){

	$this->codAluno = $codAluno;
}





public function getNota(){
	return $this->nota;
}

public function getParecer(){
	return $this->parecer;
}

public function getArquivo(){
	return $this->arquivo;
}

public function getIdAval(){
	return $this->idAval;

}

public function getCodAluno(){

	return $this->codAluno;
}


}
?>