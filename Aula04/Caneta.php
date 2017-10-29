<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    /**
     * Caneta constructor.
     * @param $modelo
     * @param $cor
     * @param $ponta
     * @param $tampada
     */
    public function __construct($modelo, $cor, $ponta, $tampada)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampada = $tampada;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * @param mixed $ponta
     */
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    /**
     * @return mixed
     */
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * @param mixed $tampada
     */
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }


    //Métodos construtores da Classe

//    public function Caneta()
//    {
//        $this->cor = "Azul";
//        $this->tampar();
//    }

//    public function __construct($m, $c, $p)
//    {
//        $this->setModelo($m);
//        $this->setCor($c);
//        $this->setPonta($p);
//        $this->tampar();
//    }
//
//    //Getters and Setters
//    public function tampar(){
//        $this->tampada = true;
//    }
//    public function getModelo()
//    {
//        return $this->modelo;
//    }
//
//    public function setModelo($modelo)
//    {
//        $this->modelo = $modelo;
//    }
//
//    public function setCor($cor){
//        return $this->cor = $cor;
//    }
//
//    public function getCor()
//    {
//        return $this->cor;
//    }
//
//    public function getPonta()
//    {
//        return $this->ponta;
//    }
//
//    public function setPonta($ponta)
//    {
//        $this->ponta = $ponta;
//    }
}