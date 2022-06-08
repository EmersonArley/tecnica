<?php

class Productos{
    private $sku;
    private $nombre;
    private $descripcion;
    private $tienda;
    private $valor;
    private $imagen;

    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    
    public function getSku()
    {
        return $this->sku;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setTienda($tienda)
    {
        $this->tienda = $tienda;
    }
    
    public function getTienda()
    {
        return $this->tienda;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor()
    {
        return $this->valor;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    
    public function getImagen()
    {
        return $this->imagen;
    }



}

