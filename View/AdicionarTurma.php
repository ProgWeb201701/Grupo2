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
	<title> Adicionar Turma Web TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Estilo.css">
	<script src="../js/jquery.min.js"></script>
	<script language="JavaScript" src="../js/jquery.validate.js" type="text/javascript"></script> 

    <script type="text/javascript">

		$(document).ready(function(){
	     	var campos_max = 100;   //max de 100 campos
        var x = 1; // campos iniciais
        $('#campo').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < campos_max) {
                	$('#adicionar').append(' <div> \ <br> \ <div class= "form-group">\ <label>Nome do Aluno:</label>\ <input  type="text" class="form-control" name="nome" placeholder="Digite o nome do aluno..." >\  </div>\ <div class= "form-group">\ <label>Matricula:</label>\
										<input type="text" class="form-control"   name="matricula" placeholder="Digite a matricula do aluno..." >\  </div>\ <div class= "form-group">\ <label>Orientador:</label>\
										<input type="text" class="form-control"   name="orientador" placeholder="Digite o noeme do orientador..." >\  </div>\<br>\
                		<input   type="button" class="btn btn-warning " value = "Remover Aluno" id= "remover_campo">  \ <br> <br>\
                	 </div>');
                	x++;
                }
            });

        
        $('#adicionar').on("click","#remover_campo",function(e) {
        	e.preventDefault();
        	$(this).parent('div').remove();
        	x--;
        });

    });
</script>



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
								<li><a href="AdicionarTurma.php"> Adicionar Turma</a></li>
								<li><a href="AdicionarAlunos.php"> Adicionar Alunos </a></li>
								<li><a href="EditarTurma.php"> Editar Turma</a></li>
								<li><a href="RemoverTurma.php"> Remover Turma </a></li>
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
						
						
					<li ><a href=""> Sair</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

<div class="container">
<div class="col-sm-2"></div>

<div class="col-sm-8" >
<br>
<br>
<br>

	
<h3> Turmas - Adicionar Turma. </h3>
				<br />

				<div class="panel panel-primary">
                    <div class="panel-heading"> Nova Turma </div>
                    <div class="panel-body">



				<form id="frmInscricao" method="post" action="../Controler/Turma/InsertTurma.php">
					
					
						<div class="form-group">
						<label>Codígo da Turma:</label>
						<input name="codigo" type="text" class="form-control"  placeholder="Digite o codígo da turma..." >
						</div>	
						<div class="form-group">
						<label> Curso: </label>
						<input  name="curso"  type="text" class="form-control"  placeholder="Digite o nome do curso..." > </input> 
						</div>	

						<div class="form-group">
						<label>Semestre: </label>						
						<input type="text" name="semestre" class="form-control" placeholder="20xx/01 ou 20xx/02"> </input>
						</div>

						<div class="form-group">
						<label>Siape Coordenador: </label>						
						<input type="text" name="siape" class="form-control" placeholder="Digite o siape do professor coordenador..."> </input>
						</div>	
						


						
						<!-- <label> Adicionar Alunos: </label>

						<br>
						<br>
                           <div id="adicionar"> 
									<div class="form-group">
										<label>Nome do aluno:</label>
										<input  type="text" class="form-control" name="nome" placeholder="Digite o nome do aluno..." >
									</div> 
									<div class="form-group">
										<label> Matricula:</label>
										<input type="text" class="form-control" name="matricula"  placeholder="Digite a matricula do aluno...">
									</div>	

									<div class="form-group">
										<label> Orientador:</label>
										<input type="text" class="form-control" name="orientador"  placeholder="Digite o nome do Prof. Orientador...">
									</div>	

									




								</div>	<br> -->
						<div>

						<!-- <input type="button" class="btn btn-info " id="campo" value="Adicionar Aluno">
 -->
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