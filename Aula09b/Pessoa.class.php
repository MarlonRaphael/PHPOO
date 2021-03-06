<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/

class Pessoa {
    private $Nome;
    private $Idade;
    private $Sexo;

    /**
     * Pessoa constructor.
     * @param $Nome
     * @param $Idade
     * @param $Sexo
     */
    public function __construct($Nome, $Idade, $Sexo)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Sexo = $Sexo;
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

    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }
}