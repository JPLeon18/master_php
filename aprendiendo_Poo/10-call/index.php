<?php


class persona{

    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __call($name, $arguments)
    {
        $prefix_name = substr($name, 0, 3);

        if ($prefix_name == "get"){
            $nombre_metodo = substr(strtolower($name),3);

            if (!isset($this->$nombre_metodo)){
                return "El metodo no existe";
            }

            // $this->nombre;
            return $this->$nombre_metodo;
        }
    }

}


$juan = new persona("juan", 25);

echo $juan->getEdad();
echo "<br>";
echo $juan->getNombre();


