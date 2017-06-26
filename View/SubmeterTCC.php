<!DOCTYPE html>
<html>
<head>
	<title> Tela de Login Aplicacao Web</title>
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
						<li><a href="">Avaliações</a></li>
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
<div>
<div class="col-sm-3">
	
</div>
<div  class="col-sm-6">
	<div class="caixaP">
		<form method="post" action=" ">
		<fieldset >
		<div class = "titulo"> <h1> Submição TCC</h1>

		</div>
		<div class="form-group">
	    	<label>Titulo </label>
			<input   type="text" name="titulo"   class="form-control" placeholder="Titulo"> 
			<br>
		<div class="form-group">
		     <label >Autor </label>
		     <input type="text" name="autor"  class="form-control" placeholder="Autor">
		     <br>
		</div>
		<div class="form-group">
		     <label >Orientador</label>
		     <input type="Email" name="orientador"  class="form-control" placeholder="Orientador">
		     <br>
		</div>
		<div class="form-group">
		     <label >Palavra Chaves</label>
		     <input type="text" name="palavrachave"  class="form-control" placeholder="Palavra Chave">
		     <br>
		</div>
		<div class="form-group" >
		     <label >Resumo</label>
		     <textarea  name="resumo"  class="form-control"  row = "6" placeholder="Resumo"></textarea>
		</div>
		<div class="form-group">
		     <label >Abastract </label>
		     <textarea  name="abastract"  class="form-control"  row = "6" placeholder="Abastract"></textarea>
		     <br>
		</div>
		<div class="inline" >
			<input type="file" name="Arquivo" class="col-sm-9"> <input type="reset" class="btn btn-warning"  value="Apagar" style="float: right" class="button" class="col-sm-3">
		</div> </br> </br> </br> </br>


		<div >

               <button type="submit" class="btn btn-primary"   style="float: right"  class="button">Submeter </button>
		</div>
			
		</fieldset>	
		</form>

	</div>
</div>
	<div class="col-sm-3">
		
	</div>
</div>	

    <div class="footer">
    	
    </div> 



</body>
</html>