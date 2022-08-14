
<?php


if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["titulo"])and!empty($_POST["descripcion"])){
        

        $titulo = $_POST["titulo"]; 
        $fecha = date("Y-m-d");
        $descripcion = $_POST["descripcion"];
        $id_user = $_SESSION["id"];

        $sql=$conexion->query("INSERT INTO `tareas` (`id`, `titulo`, `fecha`, `descripcion`,`id_user`) VALUES (NULL, '$titulo', '$fecha', '$descripcion','$id_user');");

            if($sql==1){
                echo'<div class="alert alert-success">tarea registrada con Exito</div>';
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

