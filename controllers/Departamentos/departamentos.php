<?php
include_once "models/conexionBD.php";
include_once "models/Departamentos/consultarDepartamentos.php";

$lista = consultarDepartamentos(conexionBD());

include_once "views/Departamentos/menuDepartamentos.php";
?>
