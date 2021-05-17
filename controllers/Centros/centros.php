<?php
include_once "models/conexionBD.php";
include_once "models/Centros/consultarCentros.php";

$lista = consultarCentros(conexionBD());

include_once "views/Centros/menuCentros.php";
?>
