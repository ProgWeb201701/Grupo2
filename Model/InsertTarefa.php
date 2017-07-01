<?php 
	
ini_set('display_errors', 1);
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$dinicio = $_POST['dinicio'];
	$dfim = $_POST['dfim'];
	$destinatario = $_POST['destinatario'];
	$arquivo = $_POST['arquivotarefa'];


	$tarefa = new tarefa($nome, $descricao, $dinicio, $dfim, $destinatario, $arquivo);

	$conection = new getConection();
	$mysql = $conection->getMysql();
	$daoTarefa = new DaoTarefa($mysql->getMysqli());

	$daoProf->insertTarefa($tarefa);
}

?>