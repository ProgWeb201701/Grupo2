<?php 
	include '../Model/Dados/ClassConection.php';
	ini_set('display_errors', 1);
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$conection = new getConection();
	$mysql = $conection->getMysql();
	$daoLogin = new DaoLogin($mysql->getMysqli());

	$alunos = $daoLogin->selectLoginAluno();
	foreach ($alunos as $alu) {
		if($alu->getMatricula() == $login && $alu->getSenha() == $senha){
			header("Location: ../View/menuAluno.php");
			exit();
		}
	}


	$professores = $daoLogin->selectLoginProfessor();
	foreach ($professores as $prof) {
		if($prof->getSiape() == $login && $prof->getSenha() == $senha){
			header("Location: ../View/");
			exit();
		}
	}
	$cordenador = $daoLogin->selectLoginCoordenadorTCC();
	foreach ($cordenador as $coord) {
		if($coord->getSiape() == $login && $coord->getSenha() == $senha){
			header("Location: ../View/menuCoordenador.php");
			exit();
		}
	}
?>

