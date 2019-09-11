<?php


class Coche
{
    public $color;
    public $modelo;
    public $marca;
    public $cilindraje;
    public $velocidad;

    public function __construct($color, $modelo, $marca, $cilindraje, $velocidad)
    {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cilindraje = $cilindraje;
        $this->velocidad = $velocidad;
    }

    public function setColor($color){
        if (!empty($color)){
            $this->color = $color;
        }
    }

    public function getColor(){
        return $this->color;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getCilindraje(){
        return $this->cilindraje;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}

