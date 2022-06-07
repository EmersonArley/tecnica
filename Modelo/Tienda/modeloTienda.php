<?php
class Tienda
{
    private $nombre;
    private $fecha;

    public function setnombreTienda($nombre)
{
    $this->nombre = $nombre;
}

public function getnombreTienda()
{
    return $this->nombre;
}

public function setfechaTienda($fecha)
{
    $this->fecha = $fecha;
}

public function getfechaTienda()
{
    return $this->fecha;
}

}

