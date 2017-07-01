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
	
<h3> Proximas Tarefas </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Tarefa </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="">
					
					
						<div class="form-group">
						<label>Nome:</label>
						
						</div>	

						<div class="form-group">
						<label> Descrição: </label>
						</div>
							

						<div class="form-group">
						<label>Data de inicio: </label>						
						</div>	

						<div class="form-group">
						<label>Data final:  </label>						
						</div>

						<div class="form-group">
						<label>Arquivo:  </label>
						<button type="submit" class="btn btn-primary" style="float: right"  >Baixar</button>
						
						</div>				

						

						
										

						
						 
				</form>
			
              </div>
             </div> 



<br />
<br />
<br />
	
<h3> Últimas Tarefas </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Tarefa </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="">
					
					
						<div class="form-group">
						<label>Nome:</label>
						
						</div>	

						<div class="form-group">
						<label> Descrição: </label>
						</div>
							

						<div class="form-group">
						<label>Data de inicio: </label>						
						</div>	

						<div class="form-group">
						<label>Data final:  </label>						
						</div>

						<div class="form-group">
						<label>Avaliação:  </label>						
						</div>


						<div class="form-group">
						<label>Arquivos da Avaliação:  </label>
						<button type="submit" class="btn btn-primary" style="float: right"  >Baixar</button>
						
						</div>				

						

						
										

						
						 
				</form>
			
              </div>
             </div> 


</div>

<div class="col-sm-2" ></div>

</div>


</body>
</html>