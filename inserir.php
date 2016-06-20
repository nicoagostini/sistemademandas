<?php
include_once("classes/demandaControle.class.php");
include_once("classes/historicoControle.class.php");
include_once("classes/mailControle.class.php");

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$time= date("Y-m-d H:i:s");
$demanda = new Demanda();
$demanda->setNome($_POST['nome']);
$demanda->setEmpresa($_POST['empresa']);
$demanda->setTelefone($_POST['telefone']);
$demanda->setEmail($_POST['email']);
$demanda->setDescricao($_POST['descricao']);
$demanda->setEnvio($time);
$demanda->setAtendida(1);
$dc = new demandaControle();
$dc->controleAcao("inserir",$demanda);

$email = new mail();
$email ->setDestinatario("ju_pvp@hotmail.com");
$email ->setAssunto("SDFFADS");
$email ->setMensagem("asDDsFSDA");

$mailcontrole = new mailControle();
$mailcontrole -> enviarEmail($email);
