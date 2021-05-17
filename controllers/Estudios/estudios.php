<?php
include_once "models/conexionBD.php";
include_once "models/Estudios/consultarEstudios.php";

$lista = consultarEstudios(conexionBD());

include_once "views/Estudios/menuEstudios.php";
?>
