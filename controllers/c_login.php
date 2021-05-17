<?php
require_once("models/conexionBD.php");
require_once("models/Profesores/consultarProfesor.php");
require_once("models/consultarCargoUser.php");
require_once("models/consultarAsigsUser.php");

if(isset($_POST['submit'])){
    $niu = $_POST['niu'];
    $res = consultarProfesor(conexionBD(), $niu);
    if(!empty($res)){
        $_SESSION['niu'] = $res[0]['niu'];
        $_SESSION['nombre'] = $res[0]['nombre'];
        $message = "Hola ".$res[0]['nombre']." ".$res[0]['apellido'];
        echo "<div class='alert alert-danger' role='alert'>" .$message . "</div>";
        $cargo= consultarCargoUser(conexionBD(),$res[0]['niu']);

        if ($cargo){
            echo "<div class='alert alert-danger' role='alert'> Càrrecs: <br>" ;
            echo "<li>".$cargo[0]['descripcion']."</li></div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'> No te cap càrrec. <div>" ;
        }

        $asigs = consultarAsigsUser(conexionBD(),$niu);
        if ($asigs){
            echo "<div class='alert alert-danger' role='alert'> Assignatures: <br>" ;
            foreach ($asigs as $asig){
                echo "<li>".$asig['nombre']."</li>";
            }echo "</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'> No dóna cap asignatura. </div>" ;
        }

        $message = "Serà dirigit a l'aplicació en pocs segons.";
        echo "<div class='alert alert-danger' role='alert'>" .$message . "</div>";
        header("Refresh:2; url=/daniel_gestor_permisos_v2/index.php?action=portada");
    }else{
        $message = "El niu no es troba a la base de dades. Serà redirigit en pocs segons.";
        echo "<div class='alert alert-danger' role='alert'>" .$message . "</div>";
        header("Refresh:5; url=/daniel_gestor_permisos_v2/index.php?action=login");
    }
}else{
    include("views/login.php");
}