<?php

include "../modelo/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query("SELECT * FROM `tareas`WHERE `id` = $id");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6da46d7f52.js" crossorigin="anonymous"></script>
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="./principal.php" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
   
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"role="tab" aria-controls="nav-contact" aria-selected="false">salir</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
</div>
<!-- Alertra -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Seguro que desea cerrar sesion?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger"><a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="../controlador/logout.php" role="tab" aria-controls="nav-contact" aria-selected="false">salir</a></button>
      </div>
    </div>
  </div>
</div>


<h1 class="text-center p-3">MODIFICAR</h1>


<div class="container-fluid row">
    <!-- formulario -->
<form class="col-4 p-2 m-auto" method="POST">
    <h2 class="text-center text-secondary">Modificar Tarea</h2>
  

    <input type="hidden" class="form-control" name="id_p" value="<?= $_GET["id"] ?>">
        <?php

   include "../controlador/modificar.php";

    while($datos=$sql->fetch_object()){

    ?>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo"value="<?= $datos->titulo ?>">
  </div>
  <!--
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="text" class="form-control" name="apellidos">
  </div>
-->
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Descripcion o Contenido </label>
    <input type="text" class="form-control" name="descripcion" style="height:100px"value="<?= $datos->descripcion ?>">
    </div>
    <?php
    }
        ?>
       
  <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Modificar</button>
</form>
  </div>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="../js//app.js"></script>
  </body>
</html>