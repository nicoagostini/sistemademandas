<?php

abstract class Controle{
	
	abstract protected function selecionarUm($obj);
	abstract protected function selecionarTodos($obj);
	abstract protected function inserir($obj);
	abstract protected function alterar($obj);
	abstract protected function deletar($obj);
	abstract protected function listarEncaminhar($obj);
	abstract protected function listarResp($obj);
	abstract protected function timeNow();
	abstract protected function alterarAtendida($obj, $id);
	abstract protected function selecionarClassificado($obj);
	
	public function controleAcao($acao, $obj = false, $id = false){
		switch($acao){
			case "inserir":
				return $this->inserir($obj);
				break;
			case "alterar":
				return $this->alterar($obj);
				break;
			case "deletar":
				return $this->deletar($obj);
				break;
			case "selecionarUm":
				return $this->selecionarUm($obj);
				break;
			case "selecionarTodos":
				return $this->selecionarTodos($obj);
				break;
			case "listarEncaminhar":
				return $this->listarEncaminhar($obj);
				break;
			case "listarResp":
				return $this->listarResp($obj);
				break;
			case "timeNow":
				return $this->timeNow();
				break;
			case "alterarAtendida":
				return $this->alterarAtendida($obj, $id);
				break;
			case "selecionarClassificado":
				return $this->selecionarClassificado($obj);
				break;
			default:
				return "Ação indefinida";
		}
	}
}
?>