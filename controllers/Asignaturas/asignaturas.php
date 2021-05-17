<?php
include_once "models/conexionBD.php";
include_once "models/Asignaturas/consultarAsignaturas.php";

$lista = consultarAsignaturas(conexionBD());

include_once "views/Asignaturas/menuAsignaturas.php";
?>
