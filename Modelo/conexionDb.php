<?php 

class Db{
    static function conectar()
    {
        $dsn = 'mysql:dbname=test2;host=localhost';
        $usuario = 'root';
        $contraseña = '';
        try {
            $mbd = new PDO($dsn, $usuario, $contraseña);
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $mbd;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } 
}
$res= Db::conectar();
 echo var_dump($res);
