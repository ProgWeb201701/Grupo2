<!DOCTYPE html>
<html>
<head>
	<title> Menu Aluno Web TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Web Tcc</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Perfil <span class="caret"></span></a>
							<ul class="dropdown-menu">
							    <li><a href="Alterar senha.php">Alterar Senha</a></li>
								<li><a href="EditarPerfilAluno.php">Editar</a></li>
								<li><a href="">Remover</a></li>
								</ul>
						</li>
						<li><a href="Apresentação.html">Avaliações</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  TCC  <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="SubmeterTCC.php"> Submeter </a></li>
								<li><a href=""> Editar Ultimo </a></li>
								<li><a href=""> Remover </a></li>
								</ul>
						</li>
						<li><a href="">Cronograma</a></li>
						<li><a href="">Ajuda</a></li>
						
					<li ><a href=""> Sair</a></li>
					</ul>

				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</header>

<div class="container" class="corpo">
<div class="col-sm-2"></div>

<div class="col-sm-8" >
<br />
<br />
<br />
	
<h3>Tarefas </h3>
				<br />

				<?php
				include_once '../Controler/Tarefas/SelectTarefa.php';
				include_once '../Model/Dados/ClassDaoTarefa.php';

				$selectTa = new SelectTarefa();
				$tar = $selectTa->tarefasAluno();
				// echo "___<br><br>";
				// print_r(count($tar));
				// echo "<br><br>___";
				// echo "___<br><br>";
				// print_r($tar[0]->getNome());
				// echo "<br><br>___";
				// exit();
				foreach ($tar as $value) {
					
				
					echo '<div class="panel panel-primary">';
					echo '<div class="panel-heading"> Tarefa </div>';
					echo '<div class="panel-body">';



						echo '<form id="frmInscricao" method="post" action="">';


							echo '<div class="form-group">';
								echo '<label>Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
								echo '<label>'.$value->getNome().'</label>';
							echo '</div>';	

							echo '<div class="form-group">';
								echo '<label> Descrição:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
								echo '<label>'.$value->getDescricao().'</label>';
							echo '</div>';


							echo '<div class="form-group">';
								echo '<label>Data de inicio:&nbsp;&nbsp;</label>';	
								echo '<label>'.$value->getDinicio().'</label>';					
							echo '</div>';	

							echo '<div class="form-group">';
								echo '<label>Data final:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
								echo '<label>'.$value->getDfim().'</label>';						
							echo '</div>';


							

						echo '</form>';

					echo '</div>';
				echo '</div>';
				
				}
			 ?>

<div class="col-sm-2" ></div>

</div>


</body>
</html>