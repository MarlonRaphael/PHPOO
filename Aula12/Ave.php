<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 00:28
 */
require_once('Animal.php');

class Ave extends Animal{
    private $corPena;

    public function Locomover()
    {
        // TODO: Implement Locomover() method.
        echo "<br>Voando";
    }

    public function Alimentar()
    {
        // TODO: Implement Alimentar() method.
        echo "<br>Comando frutas";
    }

    public function EmitirSom()
    {
        // TODO: Implement EmitirSom() method.
        echo "<br>Som de ave";
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
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * @param mixed $corPena
     */
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }
    public function fazerNinho(){
        echo "<br>Construiu um ninho";
    }
}