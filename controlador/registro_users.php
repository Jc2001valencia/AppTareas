
<?php
include"./modelo/conexion.php";

if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["user"])and!empty($_POST["email"])and!empty($_POST["password"])and!empty($_POST["apellido"])){
        

        $user = $_POST["user"]; 
        $apellidos = $_POST["apellido"]; 
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $sql=$conexion->query("INSERT INTO `login` (`email`, `password`, `id`, `Nombre`, `apellidos`) VALUES ('$email', '$password', NULL, '$user', '$apellidos');");

            if($sql==1){
                echo'<div class="alert alert-success">usuario registrada con Exito</div>';
               // header("location:../index.php");
            }else{
                
                echo'<div class="alert alert-danger">Error al Registrar</div>';
            }

    }
    else
    {
        echo'<div class="alert alert-danger">ALGUNOS DE LOS CAMPOS ESTAN VACIOS!!!</div>';
    }
    

}
?>




