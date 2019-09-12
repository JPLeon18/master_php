<?php


class persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $altura;

    public function __construct()
    {
        $this->altura = "Privada";
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEdad($edad){
        $this->apellido = $edad;
    }

   public function setAltura($altura){
        $this->altura = $altura;
   }

   public function getHablar(){
        return "Estoy hablando";
   }

   public function getCaminar(){
        return "Estoy caminando";
   }
}

class Informatico extends persona {

    public $lenguaje;
    public $experiencia;

    public function __construct($lenguaje, $exp, $nombre, $apellido, $edad)
    {
        parent::__construct();  // heredame el constructor de mi padre

        $this->lenguaje = $lenguaje;
        $this->experiencia = $exp;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function setLenguajes($lenguaje){
        $status = $this->lenguaje = $lenguaje;

        return $status;
    }

    public function Programar(){
        return "Soy programador";
    }

    public function Soporte(){
        return "hago soporte";
    }

    public function Ofimatica(){
        return "trabajo en word";
    }
}

class Diseñador extends persona {

    public $suite;

    public function __construct($suite, $nombre, $apellido, $edad)
    {
        parent::__construct();

        $this->suite = $suite;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function setSuite($suite){
        $status = $this->suite = $suite;

        return $status;
    }

    public function Diagramar(){
        return "Soy Diagramador";
    }

    public function Corrector(){
        return "hago corrector";
    }

    public function impresor(){
        return "trabajo en una impresion";
    }
}

