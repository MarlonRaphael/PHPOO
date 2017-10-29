<?php

/**
 * Created by PhpStorm.
 * User: Marlo
 * Date: 26/10/2017
 * Time: 22:10
 */
require_once('Pessoa.php');

class Funcionario extends Pessoa{
    private $Setor;
    private $Trabalhando;

//    /**
//     * Funcionario constructor.
//     * @param $Setor
//     * @param $Trabalhando
//     */
//    public function __construct($Setor, $Trabalhando)
//    {
//        $this->Setor = $Setor;
//        $this->Trabalhando = $Trabalhando;
//    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->Setor;
    }

    /**
     * @param mixed $Setor
     */
    public function setSetor($Setor)
    {
        $this->Setor = $Setor;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->Trabalhando;
    }

    /**
     * @param mixed $Trabalhando
     */
    public function setTrabalhando($Trabalhando)
    {
        $this->Trabalhando = $Trabalhando;
    }
    public function mudarTrabalho(){
        $this->setTrabalhando(!$this->getTrabalhando());
    }
}