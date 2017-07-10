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
	<title> Subimição TCC Web TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Estilo.css">
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
								<li><a href="">Alterar Senha</a></li>
								<li><a href="EditarPerfilAluno.php">Editar</a></li>	
								<li><a href="">Remover</a></li>					
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
	<div>
		<div class="col-sm-2">

		</div>
		<div  class="col-sm-8">
		<br>
        <br>
        <br>

	
<h3> Tcc - Submeter para avalição. </h3>


			<div class="panel panel-primary">
				<div class="panel-heading"> Submeter Tcc </div>
				<div class="panel-body">

					
						<form method="post" action="../Controler/Monografia/insertMonografia.php">
							
								<div class="form-group">
									<label>Titulo </label>
									<input   type="text" name="titulo"   class="form-control" placeholder="Titulo"> 
								</div>
							
								<div class="form-group">
									<label >Autor </label>
									<input type="text" name="autor"  class="form-control" placeholder="Autor">
									
								</div>
								<div class="form-group">
									<label >Orientador</label>
									<input type="text" name="orientador"  class="form-control" placeholder="Orientador">
									
								</div>
								<div class="form-group">
									<label >Palavra Chaves</label>
									<input type="text" name="palavrachave"  class="form-control" placeholder="Palavra Chave">
									
								</div>
								<div class="form-group" >
									<label >Resumo</label>
									<textarea  name="resumo"  class="form-control"  row = "6" placeholder="Resumo"></textarea>
								</div>
								<div class="form-group">
									<label >Abstract </label>
									<textarea  name="abstract"  class="form-control"  row = "6" placeholder="Abastract"></textarea>
									
								</div>
								<div class="inline" >
									<input type="file" name="Arquivo" class="col-sm-9"> <input type="reset" class="btn btn-warning"  value="Remover Arquivo" style="float: right" class="button" class="col-sm-3">
								</div> </br> </br> </br> </br>


								<div >

									<button type="submit" class="btn btn-primary"   style="float: right"  class="button">Submeter </button>
								</div>

							
						</form>

					
				</div>
			</div>
		</div>
		<div class="col-sm-2">

		</div>
	</div>	

	<div class="footer">

	</div> 



</body>
</html>