<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($numConta, $tipo, $dono, $saldo, $status)
    {
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    //Getters and Setters
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    //Métodos
    public function abrirConta(){

    }
    public function fecharConta(){

    }
    public function depositar(){
        if($this->status == true){

        }else{

        }
    }
    public function sacar($valor){
        if($this->saldo >= $valor){

        }else{

        }
    }
    public function pagarMensal(){

    }
}