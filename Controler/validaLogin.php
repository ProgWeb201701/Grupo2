	<?php 

		include_once '../Model/Dados/ClassDaoLogin.php';
		ini_set('display_errors', 1);
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$tipologin = $_POST['tipologin'];
		$conection = new getConection();
		$mysql = $conection->getMysql();
		$daoLogin = new DaoLogin($mysql);

		if($tipologin =='aluno'){

			$aluno = $daoLogin->selectLoginAluno($login, $senha);

			echo "teste";
			if($aluno->getMatricula() == $login && $aluno->getSenha() == $senha){
				echo "teste1";
				header("Location: ../View/menuAluno.php");
				exit();
			}
		
	    }else if($tipologin =='orientador'){

			$prof = $daoLogin->selectLoginProfessor($login, $senha);
			//print_r($prof);
			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){
					echo "test02";
					header("Location: ../View/MenuOrientador.php");
					exit();
			}
			
	    }
	} else if($tipologin =='avaliador'){

			$prof = $daoLogin->selectLoginProfessor($login, $senha);
			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){

					header("Location: ../View/MenuAvaliador.php");
					exit();
				
			
		    }
		}
	} else if($tipologin =='coordenador'){

		$prof = $daoLogin->selectLoginProfessor($login, $senha);
		if($prof->getSiape() != ""){
			if($prof->getSiape() == $login && $prof->getSenha() == $senha){
				
				header("Location: ../View/MenuCoordenador.php");
				exit();
	    	}
		}
	}else{
		echo "Dados Inválidos";
	}

		
	?>

