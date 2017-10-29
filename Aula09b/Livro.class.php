<?php

/**
* $ (name) [ TIPO ]
* Descricao
* @copyright (c) year, Marlon Raphael MR SOLUCOES
*/

require_once('Publicacao.php');
require_once('Pessoa.class.php');

class Livro implements Publicacao{
    private $Titulo;
    private $Autor;
    private $totPaginas;
    private $pagAtual;
    private $Aberto;
    private $Leitor;

    /**
     * Livro constructor.
     * @param $Titulo
     * @param $Autor
     * @param $totPaginas
     * @param $pagAtual
     * @param $Aberto
     * @param $Leitor
     */
    public function __construct($Titulo, $Autor, $totPaginas, $pagAtual, $Aberto, $Leitor)
    {
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->Aberto = $Aberto;
        $this->Leitor = $Leitor;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    /**
     * @param mixed $Titulo
     */
    public function setTitulo($Titulo)
    {
        $this->Titulo = $Titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->Autor;
    }

    /**
     * @param mixed $Autor
     */
    public function setAutor($Autor)
    {
        $this->Autor = $Autor;
    }

    /**
     * @return mixed
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @param mixed $totPaginas
     */
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @return mixed
     */
    public function getAberto()
    {
        return $this->Aberto;
    }

    /**
     * @param mixed $Aberto
     */
    public function setAberto($Aberto)
    {
        $this->Aberto = $Aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->Leitor;
    }

    /**
     * @param mixed $Leitor
     */
    public function setLeitor($Leitor)
    {
        $this->Leitor = $Leitor;
    }

    public function abrir()
    {
        // TODO: Implement abrir() method.
        $this->setAberto(true);
    }

    public function fechar()
    {
        // TODO: Implement fechar() method.
        $this->setAberto(false);
    }

    public function folhear()
    {
        // TODO: Implement folhear() method.
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function avancarPag()
    {
        // TODO: Implement avancarPag() method.
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPag()
    {
        // TODO: Implement voltarPag() method.
        $this->setPagAtual($this->getPagAtual() - 1);
    }

    public function Detalhes(){
        echo "<br><strong>Título:</strong> {$this->getTitulo()}";
        echo "<br><strong>Autor:</strong> {$this->getAutor()}";
        echo "<br><strong>Número de páginas:</strong> {$this->getTotPaginas()}";
    }

}