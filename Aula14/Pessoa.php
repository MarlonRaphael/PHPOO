<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 22:59
 */
abstract class Pessoa{
    protected $Nome;
    protected $Idade;
    protected $Sexo;
    protected $Experiencia;

    /**
     * Pessoa constructor.
     * @param $Nome
     * @param $Idade
     * @param $Sexo
     * @param $Experiencia
     */
    public function __construct($Nome, $Idade, $Sexo)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Sexo = $Sexo;
        $this->Experiencia = 0;
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
    protected function ganharExp($exp){
        $this->setExperiencia($this->getExperiencia() + $exp);
    }
}