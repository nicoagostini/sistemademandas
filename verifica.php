<?php
	include_once("classes/usuarioControle.class.php");
	$userControle = new usuarioControle();
	$user = new usuario();
	$user->setEmail($_POST['email']);
	$user->setSenha($_POST['senha']);
	$log = $user;
	$resp = $userControle->verificar($log);
	if($resp[0][4] == "admin" || $resp[0][4] == "pesquisa" || $resp[0][4] == "ensino" || $resp[0][4] == "extensao"){
		$user->setIdUsuario($resp[0][0]);
		$user->setNome($resp[0][1]);
		$user->setEmail($resp[0][2]);
		$user->setSenha($resp[0][3]);
		$user->setClasse($resp[0][4]);
		$d = serialize($user);
		session_start();
        $_SESSION['id'] = "logado";
        $_SESSION['user'] = $d;
		header("location:lista.php");
	}
	if($resp == false){
		header('location: index.php?erro=1');
	}
?>