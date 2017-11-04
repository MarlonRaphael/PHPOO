<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 30/10/2017
 * Time: 23:28
 */
require_once('Gafanhoto.php');
require_once('Video.php');

class Visualizacao{
    private $Espectador;
    private $Filme;

    /**
     * Visualizacao constructor.
     * @param $Espectador
     * @param $Filme
     */
    public function __construct($Espectador, $Filme)
    {
        $this->Espectador = $Espectador;
        $this->Filme = $Filme;
        $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
    }

    /**
     * @return mixed
     */
    public function getEspectador()
    {
        return $this->Espectador;
    }

    /**
     * @param mixed $Espectador
     */
    public function setEspectador($Espectador)
    {
        $this->Espectador = $Espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme()
    {
        return $this->Filme;
    }

    /**
     * @param mixed $Filme
     */
    public function setFilme($Filme)
    {
        $this->Filme = $Filme;
    }

    public  function Avaliar(){
        $this->getFilme()->setAvaliacao(5);
    }
    public function AvaliarNota($Nota){
        $this->getFilme()->setAvaliacao($Nota);
    }
    public function AvaliarPorc($Porc){
        $nova = 0;
        if($Porc <= 20){
            $nova = 3;
        }elseif($Porc <= 50){
            $nova = 5;
        }elseif($Porc <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->getFilme()->setAvaliacao($nova);
    }
}