<?php

//include"../modelo/conexion.php";

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM `tareas` WHERE `tareas`.`id` = '$id'");
    if($sql==1){
        echo'<div class="alert alert-success">Tarea Eliminada con Exito</div>';
    }else{
        
        echo'<div class="alert alert-danger">Error al Eliminar</div>';
    }
}


?>