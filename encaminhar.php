<?php
include_once("classes/historicoControle.class.php");
include_once("classes/demandaControle.class.php");
include_once("classes/controle.class.php");
include_once("classes/bd.class.php");

$bd = new bd();
$hc = new historicoControle();
$atualizada=$hc->controleAcao("timeNow");

#recepção das variáveis necessárias
$id=$_GET['id'];
$atendida=$_GET['aten'];
$negacao = $_POST['negacao'];
$nomeEspec = $_POST['espec'];

if($atendida == 1 && $negacao == ""){
	$atendida ++;
	$encaminhar=$_POST['radios'];
	$estado="Encaminhado para ".$encaminhar.".";
	$contato = NULL;

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;

}
if($atendida == 2 && $negacao == ""){
	$atendida ++;
	$email2=$_POST['email2'];
	$encaminhar=$_GET['enc'];
	$estado="Encaminhado para ".$email2.".";
	$contato = NULL;

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}

if($atendida == 3 && $negacao ==""){
	$atendida ++;
	$encaminhar=$_GET['enc'];
	$estado = "Demanda aceita por ".$nomeEspec.".";
	$contato = $nomeEspec;

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}

if($atendida == 4 && $negacao ==""){
	$bd = new bd();
	$dc = new demandaControle();
	$hc = new historicoControle();
	$atendida ++;
	$encaminhar= $_GET['enc'];
	$estado = "Demanda Finalizada.";
	$contato = $nomeEspec;
	$finalizada = $hc->controleAcao("timeNow");

# Atualização dos dados da demanda

$bd->executa("update demanda set atendida = '".$atendida."', finalizada = '".$finalizada."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}

if($atendida >= 1 && $atendida <=2 && $negacao !=""){
	$atendida--;
	$estado = "Negado pelo motivo: ".$negacao.".";
	$contato=NULL;

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}

if($atendida == 3 && $negacao !=""){
	$atendida--;
	$estado = "Demanda negada pelo motivo: ".$negacao.".";
	$contato = $nomeEspec;

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}

if($atendida == 4 && $negacao !=""){
	$atendida-=2;
	$estado = "Demanda negada pelo motivo: ".$negacao.".";
	$contato = $nomeEspec;
	$encaminhar= $_GET['enc'];

# Atualização dos dados da demanda
$bd = new bd();
$dc = new demandaControle();
$bd->executa("update demanda set atendida = '".$atendida."'where iddemanda = '".$id."'");

# Gera uma nova ocorrência de histórico no BD para a demanda
$historico = new historico();

$historico->setIdDemanda($id);
$historico->setAtualizada($atualizada);
$historico->setEstado($estado);
$historico->setEncaminhar($encaminhar);
$historico->setContato($contato);

$hc->controleAcao("inserir", $historico);

# Redireciona para a página de listagem das demandas
header("location: lista.php");
die;
}