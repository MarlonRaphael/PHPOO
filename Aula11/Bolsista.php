<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 27/10/2017
 * Time: 22:28
 */
require_once('Aluno.php');

class Bolsista extends Aluno{
    private $Bolsa;

    /**
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->Bolsa;
    }

    /**
     * @param mixed $Bolsa
     */
    public function setBolsa($Bolsa)
    {
        $this->Bolsa = $Bolsa;
    }
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }
    public function pagarMensalidade(){
        echo "<p><strong>{$this->getNome()}</strong> é bolsista! Então paga com desconto.</p>";
    }
}