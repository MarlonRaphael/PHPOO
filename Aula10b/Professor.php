<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 26/10/2017
 * Time: 22:16
 */
require_once('Pessoa.php');

class Professor extends Pessoa{
    private $Especialidade;
    private $Salario;

    /**
     * Professor constructor.
     * @param $Especialidade
     * @param $Salario
     */
//    public function __construct($Especialidade, $Salario)
//    {
//        $this->Especialidade = $Especialidade;
//        $this->Salario = $Salario;
//    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->Especialidade;
    }

    /**
     * @param mixed $Especialidade
     */
    public function setEspecialidade($Especialidade)
    {
        $this->Especialidade = $Especialidade;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->Salario;
    }

    /**
     * @param mixed $Salario
     */
    public function setSalario($Salario)
    {
        $this->Salario = $Salario;
    }
    public function receberAum($valor){
        $this->setSalario($this->getSalario() + $valor);
    }
}