<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/

class Lutador {
    private $Nome;
    private $Nacionalidade;
    private $Idade;
    private $Altura;
    private $Peso;
    private $Categoria;
    private $Vitorias;
    private $Derrotas;
    private $Empates;

//     * @param $Categoria

    /**
     * Lutador constructor.
     * @param $Nome
     * @param $Nacionalidade
     * @param $Idade
     * @param $Altura
     * @param $Peso
     * @param $Vitorias
     * @param $Derrotas
     * @param $Empates
     */
    public function __construct($Nome, $Nacionalidade, $Idade, $Altura, $Peso, $Vitorias, $Derrotas, $Empates)
    {
        $this->Nome = $Nome;
        $this->Nacionalidade = $Nacionalidade;
        $this->Idade = $Idade;
        $this->Altura = $Altura;
        $this->setPeso($Peso);
//        $this->Categoria = $this->getCategoria();
        $this->Vitorias = $Vitorias;
        $this->Derrotas = $Derrotas;
        $this->Empates = $Empates;
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
    public function getNacionalidade()
    {
        return $this->Nacionalidade;
    }

    /**
     * @param mixed $Nacionalidade
     */
    public function setNacionalidade($Nacionalidade)
    {
        $this->Nacionalidade = $Nacionalidade;
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
    public function getAltura()
    {
        return $this->Altura;
    }

    /**
     * @param mixed $Altura
     */
    public function setAltura($Altura)
    {
        $this->Altura = $Altura;
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
        $this->setCategoria();
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->Categoria;
    }

    /**
     * @param mixed $Categoria
     */
    private function setCategoria()
    {
        if($this->Peso < 52.2){
            $this->Categoria = "Inválido";
        }elseif($this->Peso <= 70.3){
            $this->Categoria = "Leve";
        }elseif($this->Peso <= 83.9){
            $this->Categoria = "Médio";
        }elseif($this->Peso <= 120.2){
            $this->Categoria = "Pesado";
        }else{
            $this->Categoria = "Inválido";
        }
    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->Vitorias;
    }

    /**
     * @param mixed $Vitorias
     */
    public function setVitorias($Vitorias)
    {
        $this->Vitorias = $Vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->Derrotas;
    }

    /**
     * @param mixed $Derrotas
     */
    public function setDerrotas($Derrotas)
    {
        $this->Derrotas = $Derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->Empates;
    }

    /**
     * @param mixed $Empates
     */
    public function setEmpates($Empates)
    {
        $this->Empates = $Empates;
    }
    public function Apresentar(){
        echo "============== {$this->getNome()} ==============<br>";
        echo "<strong>Origem: </strong>{$this->getNacionalidade()}<br>";
        echo "<strong>Idade: </strong>{$this->getIdade()}<br>";
        echo "<strong>Altura: </strong>{$this->getAltura()}<br>";
        echo "<strong>Pesando: </strong>{$this->getPeso()}<br>";
        echo "<strong>Ganhou: </strong>{$this->getVitorias()}<br>";
        echo "<strong>Perdeu: </strong>{$this->getDerrotas()}<br>";
        echo "<strong>Empatou: </strong>{$this->getEmpates()}<br>";
    }
    public function Status(){
        echo "<strong>Nome: </strong>{$this->getNome()}";
        echo "<strong>É um peso: </strong>{$this->getCategoria()}";
        echo "{$this->getVitorias()} <strong>vitórias </strong>";
        echo "{$this->getDerrotas()} <strong>derrotas </strong>";
        echo "{$this->getEmpates()} <strong>empates </strong>";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->getDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->setEmpates($this->getEmpates() + 1));
    }
}