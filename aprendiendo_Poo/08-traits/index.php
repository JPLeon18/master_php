<?php

trait Utilidades{


    public function mostrarNombre(){
        echo "<p>El nombre es ".$this->nombre."</p>";
    }
}



class coche{
    public $nombre;
    public $modelo;

    use Utilidades;
}



class juego{
    public $nombre;
    public $plataforma;

    use Utilidades;
}




class persona{
    public $nombre;
    public $edad;

    use Utilidades;
}

$coche = new coche();

$juego = new juego();

$persona = new persona();

$coche->nombre = "aventador";

$juego->nombre = "GTA";

$persona->nombre = "juan";

$coche->mostrarNombre();
$persona->mostrarNombre();
$juego->mostrarNombre();