<?php


class funcionesTienda{
    
    public function registrarTienda($tienda){
        $llego = false;
        $db = Db::Conectar();
        $añadir = $db->prepare('INSERT INTO tienda VALUES(Null, :Nombre, :Fecha-apertura)');
        $añadir->bindValue('Nombre', $tienda->getnombreTienda());
        $añadir->bindValue('Fecha-apertura', $tienda->getfechaTienda());
        try {
            $añadir->execute();
            $llego = true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $llego;

    }

}




