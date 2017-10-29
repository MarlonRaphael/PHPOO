<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 27/10/2017
 * Time: 22:29
 */
require_once('Aluno.php');

class Tecnico extends Aluno{
    private $registroProfissional;

    /**
     * @return mixed
     */
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    /**
     * @param mixed $registroProfissional
     */
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }
    public function Praticar(){

    }
}