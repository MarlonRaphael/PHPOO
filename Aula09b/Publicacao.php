<?php
/**
 * Created by PhpStorm.
 * User: Marlo
 * Date: 24/10/2017
 * Time: 22:35
 */

interface Publicacao{
    public function abrir();
    public function fechar();
    public function folhear();
    public function avancarPag();
    public function voltarPag();
}