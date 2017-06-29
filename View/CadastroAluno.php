<!DOCTYPE html>
<html>
<head>
	<title> Tela de Cadastro Aluno</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../Estilo.css">
</head>
<body>
<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8" >


				<h3> Cadastro  Aplicação Web TCC. </h3>
				<br>

				<div class="panel panel-primary">
                    <div class="panel-heading">Cadastro - Informações Pessoais</div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="../Controler/Aluno/InsertAluno.php">
					
					
						<div class="form-group">
						<label>Nome:</label>
						<input name="nome" type="text" class="form-control"  placeholder="Digite seu Nome..." >
						</div>	
						<div class="form-group">
						<label>Matricula:</label>
						<input name="matricula" type="text" class="form-control"  placeholder="Digite sua Matricula..." >
						</div>	

						<div class="form-group">
						<label>Email:</label>
						<input type="email" class="form-control" name="email"  placeholder="Digite seu E-mail...">
						</div>	

						<div class="form-group">
						<label>Senha:</label>
						<input type="password" class="form-control" name="senha"  placeholder="Digite uma Senha...">
						</div>	

						<div class="form-group">
						<label>Confirmar Senha:</label>
						<input type="password" class="form-control" name="senha2"  placeholder="Digite sua Senha novamente...">
						</div>	
						<div class="form-group">
						<label>Lattes:</label>
						<input type="text" class="form-control" name="lattes"  placeholder=" Link da plataforma Lattes ">
						</div>	

						<div class="form-group">
						<label >Curso:</label>
						<input type="text" class="form-control" name="curso"  placeholder="Digite o seu Curso...">
						</div>	

						<div class="form-group">
						<label>Instituição:</label>
						<input type="text" class="form-control" name="instituicao"  placeholder="Digite o Nome da Intituição..."> <br />
						</div>	

						
						 <button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>
				</form>
			
              </div>
             </div> 





 </div>


<div class="col-sm-2" ></div>
</div>

</body>
</html>