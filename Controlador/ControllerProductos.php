<?php
include_once("../Modelo/conexionDb.php");
include_once("../Modelo/productos/productos.php");
include_once("../Modelo/productos/registrarProductos.php");
$modelo= new Productos();
$registro= new funcionesProductos();

if (isset($_POST["registrarProducto"])) {
    $llego= false;
    $modelo->setNombre($_POST['nombreProducto']);
    $modelo->setDescripcion($_POST['descripcion']);
    $modelo->setValor($_POST['valor']);
    $modelo->setTienda($_POST['tienda']);
    $modelo->setTienda($_POST['tienda']);
    // $nombreImg = $_FILES['imagen']['name'];
    // $ruta      = $_FILES['imagen']['tmp_name'];
    // $destino="../ImgProductos/". $nombreImg;
    // if (move_uploaded_file($ruta, $destino)){
    // $modelo->setImagen("ImgProductos/". $nombreImg);
    // }
    $modelo->setImagen($_POST['imagen']);
     $llego= $registro->registrarProducto($modelo);

     if ($llego) {
         ?>
        <script>
         alert("registro exitoso")
         window.location.href = "../vista/tienda.php"
         </script>
         <?php
     } else {
       ?>
         <script>
             alert("error")
         </script>
         <?php
     }
    
}