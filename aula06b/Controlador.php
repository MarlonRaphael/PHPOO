<?php

/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 15/10/2017
 * Time: 15:16
 */
interface Controlador{
    public function ligar();

    /**
     * @return mixed
     */
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function plause();
}