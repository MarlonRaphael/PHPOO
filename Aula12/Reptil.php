<?php

/**
 * Created by PhpStorm.
 * User: Marlo
 * Date: 29/10/2017
 * Time: 00:17
 */
require_once('Animal.php');

class Reptil extends Animal{
    private $corEscama;

    public function Locomover()
    {
        // TODO: Implement Locomover() method.
    }

    public function Alimentar()
    {
        // TODO: Implement Alimentar() method.
    }

    public function EmitirSom()
    {
        // TODO: Implement EmitirSom() method.
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->Peso;
    }

    /**
     * @param mixed $Peso
     */
    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
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
    public function getMembros()
    {
        return $this->Membros;
    }

    /**
     * @param mixed $Membros
     */
    public function setMembros($Membros)
    {
        $this->Membros = $Membros;
    }

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }
}