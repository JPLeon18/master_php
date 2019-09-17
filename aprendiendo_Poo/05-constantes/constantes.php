<?php


class constantes
{
    public $nombre;
    public $apellido;
    const URL_COMPLETA = "http://localhost/";


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


}