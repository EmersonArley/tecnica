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
<body>

<div class="container-fluid col-5 bg-white p-4">
<h3 class="text-center">Registrar tienda</h3>
<hr>

  <form action="../Controlador/ControllerTienda.php" Method="POST" name="registroTienda" id="registoTienda">
    <div class="form-group">
      <label class="">Nombre</label>
      <input type="text" class="form-control " id="nombreTienda" name="nombreTienda" placeholder="Nombre">
      
    </div>
    

   
    <div class="form-group">
      <label class="">Fecha de apertura</label>
      <input type="date" class="form-control " id="fecha" name="fecha" placeholder="fecha">
      <p id="message" ></p>
    </div>



    <div class="container" >
      <div class="row justify-content-end">
          <br>
        <a href="" id="cancelar" class="btn btn-light">Cancelar</a>&nbsp; &nbsp;
        <button type="submit" id="registrarTienda" name="registrarTienda" class="btn btn-success" " >Registrar</button>
      </div>
    </div>
  </form>
</div>
    
</body>
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="../Validar/validar.js"></script>
</html>