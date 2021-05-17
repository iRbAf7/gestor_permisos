<?php
include_once "models/conexionBD.php";
include_once "models/Objetos/consultarObjetos.php";

$lista = consultarObjetos(conexionBD());

include_once "views/Objetos/menuObjetos.php";
?>
