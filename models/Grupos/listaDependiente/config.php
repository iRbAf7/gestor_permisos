<?php

$var_servidor_bd="localhost";
$var_nombre_bd="v2_permisos_encuestas";
$var_usuario_bd="root";
$var_password_bd="12345";


$link = mysqli_connect($var_servidor_bd, $var_usuario_bd, $var_password_bd, $var_nombre_bd);

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$link->query("SET NAMES 'utf8'");
?>
