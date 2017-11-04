<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 29/10/2017
 * Time: 22:56
 */
require_once('AcoesVideo.php');

class Video implements AcoesVideo{
    private $Titulo;
    private $Avaliacao;
    private $Views;
    private $Curtidas;
    private $Reproduzindo;

    /**
     * Video constructor.
     * @param $Titulo
     */
    public function __construct($Titulo)
    {
        $this->Titulo = $Titulo;
        $this->Avaliacao = 1;
        $this->Views = 0;
        $this->Curtidas = 0;
        $this->Reproduzindo = false;
    }

    public function Play()
    {
        // TODO: Implement Play() method.
        $this->setReproduzindo(true);
    }

    public function Pause()
    {
        // TODO: Implement Pause() method.
        $this->setReproduzindo(false);
    }

    public function Like()
    {
        // TODO: Implement Like() method.
        $this->setCurtidas($this->getCurtidas() + 1);
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
    public function getAvaliacao()
    {
        return $this->Avaliacao;
    }

    /**
     * @param mixed $Avaliacao
     */
    public function setAvaliacao($Avaliacao)
    {
        $media = ($this->getAvaliacao() + $Avaliacao) / $this->getViews();
        $this->Avaliacao = $media;
    }

    /**
     * @return mixed
     */
    public function getViews()
    {
        return $this->Views;
    }

    /**
     * @param mixed $Views
     */
    public function setViews($Views)
    {
        $this->Views = $Views;
    }

    /**
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->Curtidas;
    }

    /**
     * @param mixed $Curtidas
     */
    public function setCurtidas($Curtidas)
    {
        $this->Curtidas = $Curtidas;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->Reproduzindo;
    }

    /**
     * @param mixed $Reproduzindo
     */
    public function setReproduzindo($Reproduzindo)
    {
        $this->Reproduzindo = $Reproduzindo;
    }
}