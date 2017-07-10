<!DOCTYPE html>
<?php 
	session_start();
	if (!isset($_SESSION["user"]) ){
		header("Location: LoginApp.php");
	}else{
    	$aux = unserialize($_SESSION['nivel']);
    }
    if ($aux != "aluno") {
    	header("Location: LoginApp.php");
    }
 ?>
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
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  TCC  <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="SubmeterTCC.php"> Submeter </a></li>
								<li><a href=""> Editar Ultimo </a></li>
							</ul>
						</li>

						<li ><a href="Sair.php"> Sair</a></li>
					</ul>

				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</header>

	<div class="container" class="corpo">
		<div class="col-sm-2"></div>

		<div class="col-sm-8" >
		    <br>
		    <br>
		    <br>
		    <br>
			<h3> Removendo perfil Web TCC. </h3>
			<br>

			<div class="panel panel-primary">
				<div class="panel-heading">Remover - Confirmar dados </div>
				<div class="panel-body">



					<form id="frmInscricao" method="post" action="../Controler/Aluno/DeletAluno.php">


						<div class="form-group">
							<label>Matricula:</label>
							<input name="matricula" type="text" class="form-control"  placeholder="Digite sua Matricula..." >
						</div>	
						<div class="form-group">
							<label>Senha:</label>
							<input name="senha" type="password" class="form-control"  placeholder="Digite sua Senha..." >
						</div>

						<button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>	
					</form>

				</div>
				</div> 

		</div>

	</div>

	<div class="col-sm-2" ></div>

</div>


</body>
</html>