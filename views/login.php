<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Trabajo de fin de grado - 2020/21">
    <meta name="author" content="Daniel Montesinos Santos">


    <title>Panell d'administració</title>

    <!-- CSS personalizado para la plantilla-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Funciones personalizadas -->
    <script src="js/funciones.js"></script>



</head>
<div class="prod">
    <div id="contenedor">
        <br>
        <div class="contentForm">
            <form name="form-login" method="post" autocomplete="on" action="?action=login" onsubmit="">
                <div id="contentDiv"><br><br>
                    <div><label for="user"> NIU:</label></div>
                    <div class="input"><input type="text" placeholder="&#128477" size="25" id="user" name="niu"></div>
                    <br><br>
                    <div class="input"> <input type="submit" name="submit" value="log in" ></div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "views/pieDePagina.html";
?>

