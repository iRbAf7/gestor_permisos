<?php
include_once "models/conexionBD.php";
include_once "models/Profesores/consultarProfesores.php";

$lista = consultarProfesores(conexionBD());

include_once "views/Profesores/menuProfesores.php";
?>
