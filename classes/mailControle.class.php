<?php
	include_once("mail.class.php");
	include_once("controle.class.php");

	class mailControle extends controle{
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

	public function enviarEmail($destinatario, $assunto, $mensagem, $headers = ''){

		/*

		SETANDO OS HEADERS:
		Vejam o que colocar nos headers nesse link: http://wiki.locaweb.com/pt-br/Como_enviar_e-mails_com_a_fun%C3%A7%C3%A3o_mail()_do_PHP

		Pesquisem se o hostinger hospeda em windows ou linux, e daí pra cada um tem headers diferentes!

		*/
		$headersPadrao = "MIME-Version: 1.1\n";
		$headersPadrao .= "Content-type: text/plain; charset=iso-8859-1\n";
		$headersPadrao .= "From: buffon.sara98@gmail.com\n"; // remetente
		$headersPadrao .= "Return-Path: buffon.sara98@gmail.com\n"; // return-path

		mail($destinatario, $assunto, $mensagem, $headersPadrao.$headers);
	}
}