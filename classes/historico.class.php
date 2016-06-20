<?php
	class Historico{
		
		private $idHistorico; 
		private $idDemanda;
		private $atualizada; 
		private $estado;
		private $encaminhar; 
		private $contato;

		public function getIdHistorico(){
			return $this ->idHistorico;
		}
		public function setIdHistorico($idHistorico){
			$this ->idHistorico = $idHistorico;
		}
		public function getIdDemanda(){
			return $this ->idDemanda;
		}
		public function setIdDemanda($idDemanda){
			$this ->idDemanda = $idDemanda;
		}
		public function getAtualizada(){
			return $this ->atualizada;
		}
		public function setAtualizada($atualizada){
			$this ->atualizada = $atualizada;
		}
		public function getEstado(){
			return $this ->estado;
		}
		public function setEstado($estado){
			$this ->estado = $estado;
		}
		public function getEncaminhar(){
			return $this ->encaminhar;
		}
		public function setEncaminhar($encaminhar){
			$this ->encaminhar = $encaminhar;
		}
		public function getContato(){
			return $this ->contato;
		}
		public function setContato($contato){
			$this ->contato = $contato;
		}

	}
	
