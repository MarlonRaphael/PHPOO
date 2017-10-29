<?php

class ContaBanco
{
    //Atributos    
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //M�todo construtor
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada com sucesso!<br>";
    }
    
    //Getters and Setters
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta(){
        $this->numConta = rand(1000, 3000);
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
    
    //M�todos da classe
    public function abrirConta($tipoConta){
        $this->setTipo($tipoConta);
        $this->setStatus(true);
        if($tipoConta == 'cp'){
            $this->setSaldo($this->getSaldo() + 150.00);
        }elseif($tipoConta == 'cc'){
            $this->setSaldo($this->getSaldo() + 50.00);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Erro ao tentar encerrar a conta!<br>
            Conta com dinheiro<br>
            Seu saldo:{$this->getSaldo()}";
        }elseif($this->getSaldo() < 0){
            echo "Erro ao tentar encerrar a conta!<br>
            Conta com débito<br>
            Seu saldo:{$this->getSaldo()}";
        }else{
            echo "<p>Conta de {$this->getDono()} encerrada com sucesso!</p>";
            $this->setStatus(false);
        }
    }
    public function depositar($valor){
        if ($this->getStatus()){
            if($valor > 0){
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Depósito de R$ ".number_format($valor, 2, ',', ' ')." na conta de {$this->getDono()}<p>";
            }else{
                echo "Valor para depósito inválido!";
            }
        }else{
            echo "Impossível realizar depósito!";
        }
    }
    public function sacar($valor){
        if($this->getStatus()){
            if ($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ ".number_format($valor, 2, ',', ' ')." autorizado na conta de <strong>{$this->getDono()}</strong></p>";
            }else{
                echo "<p>Saldo insuficiente!<br> <strong>Valor disponível: R$ ".number_format($this->getSaldo(), 2, ',', ' ')."</strong></p>";
            }
        }else{
            echo "Impossível sacar!";
        }
    }
    public function pagarMensal(){
        if($this->getTipo() == "cc"){
            $valor = 12;
        }elseif($this->getTipo() == "cp"){
            $valor = 20;
        }else{
            echo "Tipo de conta não existe!";
        }
        if($this->getStatus()){
            if($this->getSaldo() > $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$ ".number_format($valor, 2, ',', ' ')." debitada na conta de {$this->getDono()}</p>";
            }else{
                echo "Saldo insuficiente!";
            }
        }else{
            echo "Impossível pagar!";
        }
    }
}

