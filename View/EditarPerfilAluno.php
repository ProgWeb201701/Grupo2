<?php
  session_start();
  include_once 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\Dados\ClassConection.php';
  include 'C:\WebServer\Apache2.2\htdocs\Grupo2\Model\ClassAluno.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title> Editar Perfila Aluno Web TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Estilo.css">
</head>
<?php

			ini_set('display_errors', 1);
			$conection = new getConection();
            $mysql = $conection->getMysql();
            $aluno = $_SESSION['user'];
			// echo("<pre>");
   //          echo(unserialize($_SESSION['user'])->getNome());
			// echo("</pre>");
			// exit();


			$nome = unserialize($_SESSION['user'])->getNome();
			$email = unserialize($_SESSION['user'])->getEmail();
			$curso = unserialize($_SESSION['user'])->getCurso();
			$instituicao = unserialize($_SESSION['user'])->getInstituicao(); 
			$Lattes = unserialize($_SESSION['user'])->getLattes();

			// print_r($aluno);
			exit();

			
			
			?>



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
								<li><a href="EditarPerfilAluno.php" class="nav-link active">Editar</a></li>
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

	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" >







			




			<h3> Perfil Aluno </h3>
			<br>

			<div class="panel panel-primary">
				<div class="panel-heading"> Informações Pessoais</div>
				<div class="panel-body">



					<form id="frmInscricao" method="post" action="">


						<div class="form-group">
							<label>Nome:</label>
							<input name="nome" type="text" class="form-control" value="<?php echo($nome)?>" >
						</div>	
						<div class="form-group">
							<label>Email:</label>
							<input type="email" class="form-control" name="email"  value="<?php echo($email)?>">
						</div>	

						<div class="form-group">
							<label>Lattes:</label>
							<input type="text" class="form-control" name="Lattes"  value="<?php echo($Lattes)?>">
						</div>	

						<div class="form-group">
							<label >Curso:</label>
							<input type="text" class="form-control" name="curso"  value="<?php echo($curso)?>">
						</div>	

						<div class="form-group">
							<label>Instituição:</label>
							<input type="text" class="form-control" name="Instituicao" value="<?php echo($instituicao)?>"> <br />
						</div>	

						<div> <button type="submit" class="btn btn-info" style="float: left;"  >Editar</button>
							<button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>


						</div>
						
					</form>

				</div>
			</div> </div>

			<div class="col-sm-2" ></div>
		</div>

	</body>
	</html>