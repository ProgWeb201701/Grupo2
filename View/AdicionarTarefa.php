<!DOCTYPE html>
<?php 
	session_start();
	if (!isset($_SESSION["user"]) ){
		header("Location: LoginApp.php");
	}else{
    	$aux = unserialize($_SESSION['nivel']);
    }
    if ($aux != "coordenador") {
    	header("Location: LoginApp.php");
    }
 ?>
<html>
<head>
	<title> Adicionar Tarefa Web TCC</title>
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
				
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Cronograma <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href=""> Adicionar Tarefa</a></li>
								<li><a href=""> Editar Tarefa</a></li>
								<li><a href=""> Remover Tarefa</a></li>
								</ul>
						</li>
												
					<li ><a href=""> Sair</a></li>
					</ul>

				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</header>

<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8" >
<br>
<br>
<br>


				<h3> Cronograma - Adicionar tarefa. </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Nova Tarefa </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="../Controler/Tarefas/InsertTarefa.php">
					
					
						<div class="form-group">
						<label>Nome da Tarefa:</label>
						<input name="nome" type="text" class="form-control"  placeholder="Digite um Nome..." >
						</div>	
						<div class="form-group">
						<label> Descrição:</label>
						<textarea name="descricao" rows="7" type="text" class="form-control"  placeholder="Digite a Descição..." > </textarea> 
						</div>	

						<div class="form-group">
						<label>Inicio: </label>
						<input type="datetime-local"  name="dinicio" align="left">
						</div>	

						<div class="form-group">
						<label>Fim:  </label>
						<input type="datetime-local"  name="dfim" align="left">
						</div>	
						<br>

						<div class="form-group">
						<label> Destinatario: </label>
						<select name="destinatario">
						 <option value="aluno"> </option>
						 <option value="aluno"> Aluno </option>
						 <option value="orientador"> Orientador </option>
						 <option value="avaliador"> Avaliador </option>

						</select>
						</div>
						

						<div>
						<label> Arquivo: </label>
						<input type="file" name="arquivotarefa">



						</div>
						
						<div>
					<button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>

						</div>					

						
						 
				</form>
			
              </div>
             </div> </div>




<div class="col-sm-2" ></div>
</div>

</body>
</html>