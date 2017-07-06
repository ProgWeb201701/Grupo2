	<?php 
		session_start();

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

			if($aluno->getMatricula() == $login && $aluno->getSenha() == $senha){
				$_SESSION['user'] = serialize($aluno);
				header("Location: ../View/menuAluno.php");
				exit();
			}
		
	    }else if($tipologin =='orientador'){

			$prof = $daoLogin->selectLoginProfessor($login, $senha);
			//print_r($prof);
			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){
					$_SESSION['user'] = serialize($prof);
					header("Location: ../View/MenuOrientador.php");
					exit();
			}
			
	    }
	} else if($tipologin =='avaliador'){

			$prof = $daoLogin->selectLoginProfessor($login, $senha);
			if($prof->getSiape() != ""){
				if($prof->getSiape() == $login && $prof->getSenha() == $senha){
					$_SESSION['user'] = serialize($prof);
					header("Location: ../View/MenuAvaliador.php");
					exit();
				
			
		    }
		}
	} else if($tipologin =='coordenador'){

		$prof = $daoLogin->selectLoginProfessor($login, $senha);


		if($prof->getSiape() != ""){
			if($prof->getSiape() == $login && $prof->getSenha() == $senha){
				$_SESSION['user'] = serialize($prof);				
				header("Location: ../View/MenuCoordenador.php");
				exit();
	    	}
		}
	}else{
		echo "Dados Inválidos";
	}

		
	?>

