<?php
	class Usuario {
		private $idUsuario;
		private $nome;
		private $email;
		private $senha;
		private $classe;

		public function getId(){
			return $this->id;
		}
		public function setIdUsuario($id){
			$this->idUsuario = $id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		public function getClasse(){
			return $this->classe;
		}
		public function setClasse($classe){
			$this->classe = $classe;
		}
	}
?>