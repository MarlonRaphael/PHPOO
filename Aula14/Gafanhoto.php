<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 23:02
 */
require_once('Pessoa.php');

class Gafanhoto extends Pessoa{
    private $Login;
    private $totAssistido;

    /**
     * Gafanhoto constructor.
     * @param $Login
     * @param $totAssistido
     */
    public function __construct($Nome, $Idade, $Sexo, $Login){
        parent:: __construct($Nome, $Idade, $Sexo);
        $this->Login = $Login;
    }

//    function ganharExp($exp){
//        $this->setExperiencia($this->getExperiencia() + $exp);
//    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param mixed $Login
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;
    }

    /**
     * @return mixed
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * @param mixed $totAssistido
     */
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->Idade;
    }

    /**
     * @param mixed $Idade
     */
    public function setIdade($Idade)
    {
        $this->Idade = $Idade;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->Sexo;
    }

    /**
     * @param mixed $Sexo
     */
    public function setSexo($Sexo)
    {
        $this->Sexo = $Sexo;
    }

    /**
     * @return mixed
     */
    public function getExperiencia()
    {
        return $this->Experiencia;
    }

    /**
     * @param mixed $Experiencia
     */
    public function setExperiencia($Experiencia)
    {
        $this->Experiencia = $Experiencia;
    }
    public function viuMiasUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }
}