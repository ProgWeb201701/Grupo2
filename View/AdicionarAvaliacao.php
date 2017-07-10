<!DOCTYPE html>
<?php 
	session_start();
	if (!isset($_SESSION["user"]) ){
		header("Location: LoginApp.php");
	}else{
    	$aux = unserialize($_SESSION['nivel']);
    }
    if ($aux != "avaliador"&& $aux != "orientador") {
    	header("Location: LoginApp.php");
    }
 ?>
<html>
<head>
	<title> Avaliação  Web TCC</title>
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
								<li><a href="EditarPerfilProfessor.php">Editar</a></li>
								<li><a href="">Remover</a></li>

								</ul>
						</li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Avaliações  <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href=""> Adicionar </a></li>
								<li><a href=""> Editar Ultimo </a></li>
								<li><a href=""> Remover </a></li>
								</ul>
						</li>
				
											
						
					<li ><a href=""> Sair</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" >
			<h3> Cadastro  Aplicação Web TCC. </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading">Cadastro - Informações Pessoais</div>
                    <div class="panel-body">



				<form id="frmInscricao" enctype="multipart/form-data" method="post" action="../Controler/Avaliacao/InsertAvaliacao.php">
					
					
						<div class="form-group">
						<label>Nome Do Aluno:</label>
						<input name="nome" type="text" class="form-control"  placeholder="Digite seu Nome..." >
						</div>	
						<div class="form-group">
						<label>Matricula:</label>
						<input name="matricula" type="text" class="form-control"  placeholder="Digite o Siape..." >
						</div>	
						
						<div class="form-group">
						<label>Nota:</label>
						<input type="text" class="form-control" name="nota"  placeholder="Digite uma Nota... ">
						</div>
                        
                        <div class="form-group">
						<label> Parecer:</label>
						<textarea type="text" class="form-control"  rows ="7" name="parecer"  placeholder="Digite o parecer... "> </textarea>
						</div>

						<div class="form-group">

						<div>
						<label> Arquivo: </label>
						<input type="file" name="files" />
						</div>


						
						 <button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>
				</form>



		</div>			
		<div class="col-sm-2" ></div>
		</div>


</body>
</html>