<?php
class Tienda
{   private $idTienda;
    private $nombre;
    private $fecha;


    public function setidTienda($idTienda)
{
    $this->idTienda = $idTienda;
}

public function getidTienda()
{
    return $this->idTienda;
}



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

