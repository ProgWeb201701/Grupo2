	<?php 
		session_start();

		include_once '../Model/Dados/ClassDaoLogin.php';
		ini_set('display_errors', 1);
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$conection = new getConection();
		$mysql = $conection->getMysql();
		$daoLogin = new DaoLogin($mysql);		


		

			$aluno = $daoLogin->selectLoginAluno($login, $senha);
			$prof = $daoLogin->selectLoginProfessor($login, $senha);
			$coord = $daoLogin->selectLoginCoordenador($login, $senha);

		if($aluno != null){
			if($aluno->getMatricula() == $login && $aluno->getSenha() == $senha){
				$_SESSION['user'] = serialize($aluno);
				$_SESSION['nivel'] = serialize("aluno");
				header("Location: ../View/menuAluno.php");
				exit();
			}
		
	    }else if($prof != null){

			
			//print_r($prof);
			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){
					$_SESSION['user'] = serialize($prof);
					$_SESSION['nivel'] = serialize("orientador");
					header("Location: ../View/MenuOrientador.php");
					exit();
			}
			
	    }
	} else if($prof != null){

			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){
					$_SESSION['user'] = serialize($prof);
					header("Location: ../View/MenuAvaliador.php");
					$_SESSION['nivel'] = serialize("avaliador");
					exit();
				
			
		    }
		}
	} else if($coord != null){



		if($coord->getSiape() != ""){
			if($coord->getSiape() == $login && $coord->getSenha() == $senha){
				$_SESSION['user'] = serialize($coord);	
				$_SESSION['nivel'] = serialize("coordenador");			
				header("Location: ../View/MenuCoordenador.php");
				
				exit();
	    	}
		}
	}else{
		echo "Dados Inválidos";
	}

		
	?>

