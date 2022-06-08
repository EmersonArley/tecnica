<?php


class funcionesTienda{
    
    public function registrarTienda($tienda){
        $llego = false;
        $db = Db::Conectar();
        $anadir = $db->prepare('INSERT INTO tienda VALUES(Null, :Nombre, :Fecha)');
        $anadir->bindValue('Nombre', $tienda->getnombreTienda());
        $anadir->bindValue('Fecha', $tienda->getfechaTienda());
        try {
            $anadir->execute();
            $llego = true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $llego;

    }

  


}




