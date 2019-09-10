<?php


class Coche{


    public $color = "red";
    public $cilindraje = 1200;
    public $modelo = 2019;
    public $marca = "chevrolet";
    public $velocidad = 100;

    public function setColor($color = null){

        if (!empty($color)){
            $this->color = $color;  // this Busca en esta clase la propiedad X
        }

    }

    public function getColor(){
        return $this->color;
    }

    public function getCilindraje(){
        return $this->cilindraje;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}


$coche = new Coche();
$coche2 = new Coche();

echo $coche->getVelocidad();

$coche->setColor("green");

echo $coche->getColor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

echo $coche->getVelocidad();


$coche2->setMarca("mazda");


var_dump($coche);
var_dump($coche2);