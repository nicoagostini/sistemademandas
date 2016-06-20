<?php
	class bd{
		public $conexao;
		public $id;
		public function __construct(){
			$this->conexao = new mysqli("localhost", "root", "", "sistemaif");
		}

	public function consulta($select){
		$this->conexao->query($select);
		$retorno = array();
		$dados = array();
		$result = $this->conexao->query($select);
		while($retorno = $result->fetch_array(MYSQLI_NUM)) {
			$dados[] = $retorno;
		}
		return $dados;
	}

	public function executa($sql){
		/*

		Pq só essa variável começa com maiúscula?

		*/
		$RetornoExecucao = $this->conexao->query($sql);
		$this->id = $this->conexao->insert_id;
		return $RetornoExecucao;
	}

	public function insereID($sql){
		$this->conexao->query($sql);
		return $this->conexao->insert_id;
	}

	public function __destruct(){
		$this->conexao->close();
	}
}
?>