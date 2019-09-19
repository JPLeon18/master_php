<?php

// Destructor y toString

class objeto{

    public $name;
    public $model;

    public function __construct()
    {
        $this->name = "Aventador";
        $this->model = 2020;
        echo "<p>creando el objeto</p>";
    }

    public function __toString()
    {
        return "El nombre de tu coche es {$this->name}, y el modelo {$this->model}"; // {} sirve tambien para interpolar  o concatenar "El nombre de tu coche es ".$this->name.", y el modelo ".$this->model

    }


    public function __destruct()
    {
        echo "<p>destruyendo el objeto</p>";
    }
}


$carro = new objeto();

echo $carro;
