<?php

/**
 * Created by PhpStorm.
 * User: Marlo
 * Date: 15/10/2017
 * Time: 15:16
 */
require_once('Controlador.php');
class ControleRemoto implements Controlador{
    //Atributos
    private $Volume;
    private $Ligado;
    private $Tocando;

    //Construtor
    public function __construct(){
        $this->Volume = 50;
        $this->Ligado = false;
        $this->Tocando = false;
    }

    //Getters and Setters
    /**
     * @return mixed
     */
    private function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param mixed $Volume
     */
    private function setVolume($Volume)
    {
        $this->Volume = $Volume;
    }

    /**
     * @return mixed
     */
    private function getLigado()
    {
        return $this->Ligado;
    }

    /**
     * @param mixed $Ligado
     */
    private function setLigado($Ligado)
    {
        $this->Ligado = $Ligado;
    }

    /**
     * @return mixed
     */
    private function getTocando()
    {
        return $this->Tocando;
    }

    /**
     * @param mixed $Tocando
     */
    private function setTocando($Tocando)
    {
        $this->Tocando = $Tocando;
    }

    public function ligar()
    {
        // TODO: Implement ligar() method.
        $this->setLigado(true);
    }

    public function desligar()
    {
        // TODO: Implement desligar() method.
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        // TODO: Implement abrirMenu() method.
        echo "<br>Está ligado? ".($this->getLigado() ? "Sim" : "Não");
        echo "<br>Está Tocando? ".($this->getTocando() ? "Sim" : "Não");
        echo "<br>Volume ".$this->getVolume()." ";
        for($i=0; $i<=$this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        // TODO: Implement fechaMenu() method.
        echo "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        // TODO: Implement maisVolume() method.
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
        }else{
            echo "<h5 class='alert alert-danger' role='alert'>Erro: não é possível aumentar o volume!</h5>";
        }
    }

    public function menosVolume()
    {
        // TODO: Implement menosVolume() method.
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }else{
            echo "<h5 class='alert alert-danger' role='alert'>Erro: não é possível diminuir o volume!</h5>";
        }
    }

    public function ligarMudo()
    {
        // TODO: Implement ligarMudo() method.
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        // TODO: Implement desligarMudo() method.
        if($this->Ligado() && $this->Volume() == 0){
            $this->setVolume(50);
        }
    }

    public function play()
    {
        // TODO: Implement play() method.
        if($this->getLigado() && !$this->getTocando()){
            $this->getTocando(true);
        }
    }

    public function plause()
    {
        // TODO: Implement plause() method.
        if($this->Ligado && $this->getTocando()){
            $this->Tocando(false);
        }
    }
}