<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 26/10/2017
 * Time: 22:09
 */
require_once('Pessoa.php');

class Aluno extends Pessoa{
    private $Matricula;
    private $Curso;

//    /**
//     * Aluno constructor.
//     * @param $Matricula
//     * @param $Curso
//     */
//    public function __construct($Matricula, $Curso)
//    {
//        $this->Matricula = $Matricula;
//        $this->Curso = $Curso;
//    }

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
    public function cancelarMatr(){
        echo "<p>Matrícula cancelada!</p>";
    }
}