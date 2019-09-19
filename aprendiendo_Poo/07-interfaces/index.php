<?php


interface odenador{
    public function encender();
    public function apagar();
    public function reiniciar();
}

class imac implements odenador {
    public $modelo;


    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {

    }

    public function apagar()
    {

    }

    public function reiniciar(){
        return "reiniciar";
    }

}

$PC = new imac();

$PC->setModelo("MacPro");

echo $PC->getModelo();

var_dump($PC);
