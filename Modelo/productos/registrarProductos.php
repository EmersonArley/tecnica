<?php
class funcionesProductos{
    
    public function registrarProducto($producto){
        $llego = false;
        $db = Db::Conectar();
        $anadir = $db->prepare('INSERT INTO producto VALUES(Null, :Nombre, :Descripcion, :Valor, :Tienda, :Imagen)');
        $anadir->bindValue('Nombre', $producto->getNombre());
        $anadir->bindValue('Descripcion', $producto->getDescripcion());
        $anadir->bindValue('Valor', $producto->getValor());
        $anadir->bindValue('Tienda', $producto->getTienda());
        $anadir->bindValue('Imagen', $producto->getImagen());
        try {
            $anadir->execute();
            $llego = true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $llego;

    }
}