<?php
 include"./modelo/conexion.php";

 session_start();
 
if(!empty($_POST["btningresar"])){
    if(!empty($_POST["user"])and!empty($_POST["password"])){
       
        $user = $_POST["user"];
        $password = md5($_POST["password"]);
       // $fecha = $_POST["fecha"];
       

        $sql=$conexion->query("SELECT * FROM `login` WHERE `email`='$user'and `password`='$password'");

            if($datos=$sql->fetch_object()){
              $_SESSION["id"]=$datos->id;
              $_SESSION["nombre"]=$datos->Nombre;
              $_SESSION["apellido"]=$datos->apellidos;
              $_SESSION["email"]=$datos->email;
                header("location:./vistas/principal.php");

            }else{
                
                echo'<div class="alert alert-danger">Error al Ingresar</div>';
            }

    }
    else
    {
        echo'<div class="alert alert-danger">ALGUNOS DE LOS CAMPOS ESTAN VACIOS!!!</div>';
    }
    

}

?>
