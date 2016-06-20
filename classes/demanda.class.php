<?php

class Demanda{
    
    private $idDemanda;
    private $nome;
    private $empresa;
    private $telefone;
    private $email;
    private $descricao;
    private $envio;
    private $finalizada;
    private $atendida;
    private $especialista;
    
    function getIdDemanda() {
        return $this->idDemanda;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEnvio() {
        return $this->envio;
    }

    function getFinalizada() {
        return $this->finalizada;
    }

    function getAtendida() {
        return $this->atendida;
    }

    function getEspecialista() {
        return $this->especialista;
    }

    function setIdDemanda($idDemanda) {
        $this->idDemanda = $idDemanda;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEnvio($envio) {
        $this->envio = $envio;
    }

    function setFinalizada($finalizada) {
        $this->finalizada = $finalizada;
    }

    function setAtendida($atendida) {
        $this->atendida = $atendida;
    }

    function setEspecialista($especialista) {
        $this->especialista = $especialista;
    }


}