<!DOCTYPE html>
<html>
<head>
	<title> Cadastro Web TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>

<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8" ></div>


				<h3> Cadastro  Aplicação Web TCC. </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading">Cadastro - Informações Pessoais</div>
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


						
						 <button type="submit" class="btn btn-primary" style="float: right"  >Enviar</button>
				</form>
			
              </div>
             </div> 








<div class="col-sm-2" ></div>
</div>

</body>
</html>