<?php

session_start();
if(empty($_SESSION["id"])){
  header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6da46d7f52.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- menu -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#"  role="tab" aria-controls="nav-profile" aria-selected="false" data-target=""data-bs-toggle="modal" data-bs-target="#exampleModalPerfil">Profile</a>
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

<!-- Modal Perfil -->
<div class="modal fade" id="exampleModalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion de Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <H3 >Nombres: </H3><p><?= $_SESSION["nombre"] ?></p>
      <H3>Apellidos:</H3><p><?= $_SESSION["apellido"] ?></p>
      <h3>Correo:</h3><p><?= $_SESSION["email"] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Editar</button>
        
      </div>
    </div>
  </div>
</div>




<h1 class="text-center p-3">App Tareas</h1>


<div class="container-fluid row">
    <!-- formulario -->
<form class="col-4 p-3" method="POST">
    <h2 class="text-center text-secondary">Registar Nueva Tarea</h2>
    <?php
include "../modelo/conexion.php";
include "../controlador/registro.php";
include "../controlador/eliminar.php";
?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo">
  </div>
<!--
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="fecha">
  </div>
-->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion o Contenido </label>
    <input type="text" class="form-control" name="descripcion" style="height:100px">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Fecha</th> 
      <th scope="col">ELIMINAR Y EDITAR</th>
      
    </tr>
  </thead >
  <tbody>

  <?php
$id_user=$_SESSION["id"];

include"../modelo/conexion.php";
$sql=$conexion->query("SELECT * FROM `tareas` WHERE `id_user`='$id_user'");

while($datos=$sql->fetch_object()){

  ?>
    <tr>
      <td><?= $datos->titulo ?></td>
      <td><?= $datos->descripcion ?></td>
      <td><?= $datos->fecha?></td>
      <td>
        <a href="../vistas/modificar.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="principal.php?id=<?=$datos->id?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    <?php
}
    ?>
  </tbody>
</table>
</div>

</div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="../js//app.js"></script>
</body>
</html>