<?php
include_once("../Modelo/conexionDb.php");
include_once("../Modelo/Tienda/modeloTienda.php");
include_once("../Modelo/Tienda/registroTienda.php");
$modelo = new Tienda();
$registro= new funcionesTienda();

if (isset($_POST["registrarTienda"])) {
    $llego= false;
    $modelo->setnombreTienda($_POST['nombreTienda']);
    $modelo->setfechaTienda($_POST['fecha']);
    // $llego= $registro->registrarTienda($modelo);

    // if ($llego) {
    //     ?>
    //     <script>
    //     alert("registro exitoso")
    //     </script>
    //     <?php
    // } else {
    //     ?>
    //     <script>
    //         alert("error")
    //     </script>
    //     <?php
    // }
    
}

