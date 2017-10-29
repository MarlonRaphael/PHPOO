<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/
require_once('Lutador.php');
class Luta {
    private $Desafiado;
    private $Desafiante;
    private $Rounds;
    private $Aprovada;

//    /**
//     * Luta constructor.
//     * @param $Desafiado
//     * @param $Desafiante
//     * @param $Rounds
//     * @param $Aprovada
//     */
//    public function __construct($Desafiado, $Desafiante, $Rounds, $Aprovada)
//    {
//        $this->Desafiado = $Desafiado;
//        $this->Desafiante = $Desafiante;
//        $this->Rounds = $Rounds;
//        $this->Aprovada = $Aprovada;
//    }

    /**
     * @return mixed
     */
    public function getDesafiado()
    {
        return $this->Desafiado;
    }

    /**
     * @param mixed $Desafiado
     */
    public function setDesafiado($Desafiado)
    {
        $this->Desafiado = $Desafiado;
    }

    /**
     * @return mixed
     */
    public function getDesafiante()
    {
        return $this->Desafiante;
    }

    /**
     * @param mixed $Desafiante
     */
    public function setDesafiante($Desafiante)
    {
        $this->Desafiante = $Desafiante;
    }

    /**
     * @return mixed
     */
    public function getRounds()
    {
        return $this->Rounds;
    }

    /**
     * @param mixed $Rounds
     */
    public function setRounds($Rounds)
    {
        $this->Rounds = $Rounds;
    }

    /**
     * @return mixed
     */
    public function getAprovada()
    {
        return $this->Aprovada;
    }

    /**
     * @param mixed $Aprovada
     */
    public function setAprovada($Aprovada)
    {
        $this->Aprovada = $Aprovada;
    }

    public function marcarLuta($Desafiado, $Desafiante){
        if($Desafiado->getCategoria() === $Desafiante->getCategoria() && ($Desafiado != $Desafiante)){
            $this->setAprovada(true);
            $this->setDesafiado($Desafiado);
            $this->setDesafiante($Desafiante);
        }else{
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->Apresentar();
            $this->getDesafiante()->Apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0: //Empate
                    echo "<p>Empatou!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1: //Ganhou desafiado
                    echo "<p>".$this->getDesafiado()->getNome()." venceu!</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2: //Ganhou desafiante
                    echo "<p>".$this->getDesafiante()->getNome()." venceu!</p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
                default:
                    echo "Código inválido";
            }
        }else{
            echo "Luta não pode acontecer!";
        }
    }
}