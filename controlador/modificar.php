<?php



if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["titulo"])and!empty($_POST["descripcion"])){
        
        $id = $_POST["id_p"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
       // $fecha = $_POST["fecha"];
       

        $sql=$conexion->query("UPDATE `tareas` SET `titulo` = '$titulo', `descripcion` = '$descripcion' WHERE `tareas`.`id` = '$id'");

            if($sql==1){
                echo'<div class="alert alert-success">Persona registrada con Exito</div>';
                header("location:../vistas/principal.php");

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