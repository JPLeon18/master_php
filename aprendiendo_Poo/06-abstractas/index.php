<?php

abstract class ordenador{

    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }

}

class pcAsus extends ordenador{

    public $software;

    public function arrancarSoft(){
        $this->software = true;
    }

    public function encender()
    {
        $this->encendido = true;
    }

}

$ordenador = new pcAsus();

$ordenador->encender();

$ordenador->arrancarSoft();

var_dump($ordenador);