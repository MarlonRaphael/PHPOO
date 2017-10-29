<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 27/10/2017
 * Time: 22:26
 */
require_once('Pessoa.php');

class Professor extends Pessoa{
    private $Especialidade;
    private $Salario;

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
    public function receberAumento($valor)
    {
        $this->setSalario($this->getSalario() + $valor);
        echo "<p>Novo salário <strong>R$ ".number_format($this->getSalario(),2,',','.')."</strong></p>";
    }
}