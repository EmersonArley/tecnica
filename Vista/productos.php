<?php
  require_once("../Modelo/conexionDb.php");
  require_once("../Modelo/Tienda/registroTienda.php");
  $tienda = new funcionesTienda();
  $listaTiendas=$tienda -> consultar();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body><div class="row justify-content-end"><a href="Tienda.php" class="btn btn-primary col-2 m-3">Tienda</a></div>
<div class="container-fluid col-5 bg-white p-4">
<h3 class="text-center">Registrar productos</h3>
<hr>

  <form action="../Controlador/ControllerProductos.php" Method="POST" name="RegistroProductos" id="registoTienda">
   
    <div class="form-group">
      <label class="">Nombre</label>
      <input type="text" class="form-control " id="nombreProducto" name="nombreProducto" placeholder="Nombre">
    </div>

    <div class="form-group">
      <label class="">Descripción</label>
      <input type="text" class="form-control " id="descripcion" name="descripcion" placeholder="Descripcion">
    </div>

    <div class="form-group">
      <label class="">Valor</label>
      <input type="number" class="form-control " id="valor" name="valor" placeholder="Valor">
    </div>

    <div class="form-group">
      <label class="">Tienda</label>
    <select class="form-control" name="tienda" id="tienda">
    <?php
        foreach ($listaTiendas as $item ) {
          ?>
          <option value="<?php echo $item["ID"] ?>"><?php echo $item["Nombre"] ?></option>
          <?php
        }

?>

    </select>
    </div>
    <div class="form-group">
      <label class="">Imagen</label>
      <input type="file" class="form-control " id="imagen" name="imagen" placeholder="Imagen">
    </div>


    <div class="container" >
      <div class="row justify-content-end">
          <br>
        <a href="" id="cancelar" class="btn btn-light">Cancelar</a>&nbsp; &nbsp;
        <button type="submit" id="registrarProducto" name="registrarProducto" class="btn btn-success">Registrar</button>
      </div>
    </div>
  </form>
</div>
    
</body>
    <link rel="stylesheet" href="estilos/estilos.css">
</html>