<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 27/10/2017
 * Time: 22:22
 */
abstract class Pessoa{
    private $Nome;
    private $Idade;
    private $Sexo;

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
    public final function fazerAniversario(){
        $this->setIdade($this->getIdade() + 1);
    }
}