<?php 
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$siape = $_POST['siape'];
	$email = $_POST['email'];
	$areaAtua = $_POST['area'];
	$instituicao = $_POST['instituicao'];
	$curriculo = $_POST['lattes'];
	$formacao = $_POST['formacao'];

	$professor = new Professor($nome, $siape, $email, $areaAtua, $instituicao, $curriculo, $formacao);

	$mysql = new getConection();

	$daoProf = new DaoProf($mysql->getMysqli());

	$daoProf->insertProf($professor);
}

?>