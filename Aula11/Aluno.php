<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 27/10/2017
 * Time: 22:24
 */
require_once('Pessoa.php');

class Aluno extends Pessoa{
    private $Matricula;
    private $Curso;

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->Matricula;
    }

    /**
     * @param mixed $Matricula
     */
    public function setMatricula($Matricula)
    {
        $this->Matricula = $Matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->Curso;
    }

    /**
     * @param mixed $Curso
     */
    public function setCurso($Curso)
    {
        $this->Curso = $Curso;
    }
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno <strong>{$this->getNome()}</strong></p>";
    }
}