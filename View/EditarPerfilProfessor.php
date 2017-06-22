<!DOCTYPE html>
<html>
<head>
	<title> Editar Perfil Avalidador</title>
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
								<li><a href="">Editar</a></li>
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
<div class="col-sm-8" ></div>


				<h3> Editar Perfil </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Informações Pessoais </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="">
					
					
						<div class="form-group">
						<label>Nome:</label>
						<input name="nome" type="text" class="form-control"  placeholder="Digite seu Nome..." >
						</div>	
						<div class="form-group">
						<label>Siape:</label>
						<input name="siape" type="text" class="form-control"  placeholder="Digite o Siape..." >
						</div>	

						<div class="form-group">
						<label>Email:</label>
						<input type="email" class="form-control" name="email"  placeholder="Digite seu E-mail...">
						</div>	

						

						<div class="form-group">
						<label>Instituição:</label>
						<input type="text" class="form-control" name="Instituicao"  placeholder="Digite o Nome da Intituição...">
						</div>

						<div class="form-group">
						<label>Aréa de Atuação:</label>
						<input type="text" class="form-control" name="area"  placeholder="Digite area de Atuação..."> 
						</div>

						<div class="form-group">
						<label>Curriculo lattes:</label>
						<input type="text" class="form-control" name="lattes"  placeholder="Link do Curriculo lattes..."> 
						</div>	

						<div class="form-group">
						<label >Formação:</label> <br />
						<select>
  							<option value="Graduado"> Graduado </option>
  						    <option value="Mestre"> Mestrado </option>
                            <option value="Doutor">Doutorado </option>
                            <option value="Pós Doutorado">Pós Doutorado</option>
                        </select>
						</div>	

                        <div> 
                        	<button type="submit" class="btn btn-primary" style="float: left;"  >Editar</button>
                        	<button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>
                        </div>
						
						 
				</form>
			
              </div>
             </div> 








<div class="col-sm-2" ></div>
</div>

</body>
</html>