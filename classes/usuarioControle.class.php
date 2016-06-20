<?php
	include_once("usuario.class.php");
	include_once("bd.class.php");
	include_once("controle.class.php");

	class usuarioControle extends controle{
	protected function selecionarUm($obj){return false;}
	protected function listarEncaminhar($obj){return false;}
	protected function selecionarTodos($obj){return false;}
	protected function listarResp($obj){return false;}
	protected function inserir($obj){return false;}
	protected function alterarAtendida($obj, $id){return false;}
	protected function alterar($obj){return false;}
	protected function deletar($obj){return false;}
	protected function selecionarClassificado($obj){return false;}
	protected function timeNow(){return false;}

	public function verificar($usuario){
			$banco = new bd();
			/*

			Que tal passar um filtro no email e senha do usuário? 
			É suuuuper tranquilo! Procurem pelas funções de validação do próprio PHP...
			Vou deixar uma como exemplo:

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailError = "E-mail inválido"; 
			  return false
			}
			
			*/
			$resultado = $banco->consulta("select * from usuario where email = '".$usuario->getEmail()."' and senha = '".$usuario->getSenha()."'");
			if(count($resultado) > 0){
				if($resultado[0][2] === $usuario->getEmail() && $resultado[0][3] === $usuario->getSenha());
					return $resultado;

			}
				else{
					return false;
			}
		}
}