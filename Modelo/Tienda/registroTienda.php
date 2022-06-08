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

    public function consultar(){
        $db = Db::Conectar();
        $sql= $db->query("SELECT * FROM tienda");
        $result=null;
        try {
        $sql->execute();
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        echo $ex->getMessage();

    }
    return $result;
    }

  


}




