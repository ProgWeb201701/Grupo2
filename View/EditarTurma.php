<!DOCTYPE html>
<html>
<head>
	<title> Adicionar Turma Web TCC</title>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Turmas <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="AdicionarTurma.php"> Adicionar </a></li>
								<li><a href="EditarTurma.php"> Editar </a></li>
								<li><a href="RemoverTurma.php"> Remover </a></li>
								</ul>
						</li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Cronograma <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="AdicionarTarefa.php"> Adicionar Tarefa</a></li>
								<li><a href="EditarTarefa.php"> Editar Tarefa</a></li>
								<li><a href=""> Remover Tarefa</a></li>
								</ul>
						</li>
						<li><a href="">Ajuda</a></li>
						
					<li ><a href=""> Sair</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

<div class="container">
<div class="col-sm-2"></div>

<div class="col-sm-8" >
	
<h3> Turmas - Adicionar Turma. </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Nova Turma </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="">
					
					
						<div class="form-group">
						<label>Codígo da Turma:</label>
						<input name="codigo" type="text" class="form-control"  placeholder="Digite o codígo da turma..." >
						</div>	
						<div class="form-group">
						<label> Curso: </label>
						<input  name="curso"  type="text" class="form-control"  placeholder="Digite a Descição..." > </input> 
						</div>	

						<div class="form-group">
						<label>Semestre: </label>
						<select>
						 <option value="semestre"> </option>
						 <option value="semestre"> 1º Semestre </option>
						 <option value="semestre"> 2º Semestre </option>

						</select>
						</div>	

						<div class="form-group">
						<label>Data Inico:  </label>
						<input type="datetime-local"  name="dinicio" align="left">
						</div>

						<div class="form-group">
						<label>Data Fim:  </label>
						<input type="datetime-local"  name="dfim" align="left">
						</div>				

						

						<div>
						<div> <button type="submit" class="btn btn-warning" style="float: left;"  >Editar</button>			




						 <button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>

						</div>					

						
						 
				</form>
			
              </div>
             </div> 

</div>

<div class="col-sm-2" ></div>

</div>

</body>
</html>