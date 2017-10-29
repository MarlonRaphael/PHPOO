<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 00:10
 */
abstract class Animal{
    protected $Peso;
    protected $Idade;
    protected $Membros;

    public abstract function Locomover();
    public abstract function Alimentar();
    public abstract function EmitirSom();
}