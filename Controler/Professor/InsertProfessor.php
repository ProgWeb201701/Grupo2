<?php 
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$siape = $_POST['siape'];
	$email = $_POST['email'];
	$areaAtua = $_POST['area'];
	$instituicao = $_POST['instituicao'];
	$curriculo = $_POST['lattes'];
	$senha = $_POST['senha'];
	$formacao = $_POST['formacao'];

	$professor = new Professor($nome, $siape, $email, $areaAtua, $instituicao, $curriculo, $senha, $formacao);

	$conection = new getConection();
	$mysql = $conection->getMysql();
	$daoProf = new DaoProf($mysql->getMysqli());

	$daoProf->insertProf($professor);
}

?>