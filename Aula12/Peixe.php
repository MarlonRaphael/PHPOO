<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 00:20
 */
require_once('Animal.php');

class Peixe extends Animal{
    private $corEscama;

    public function Locomover()
    {
        // TODO: Implement Locomover() method.
        echo "<br>Nadando";
    }

    public function Alimentar()
    {
        // TODO: Implement Alimentar() method.
        echo "<br>Comendo substâncias";
    }

    public function EmitirSom()
    {
        // TODO: Implement EmitirSom() method.
        echo "<br>Peixe não faz som";
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
    public function soltarBolha(){
        echo "<br>Soltou uma bolha";
    }
}