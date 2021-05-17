<?php
include_once "models/conexionBD.php";
include_once "models/Cargos/consultarCargos.php";
include_once "models/Cargos/consultarProfesoresCargo.php";
include_once "models/Profesores/consultarProfesor.php";
include_once "models/Ambitos/consultarAmbito.php";
include_once "models/Ambitos/consultarIdEnAmbito.php";


$lista = consultarCargos(conexionBD());

include_once "views/Cargos/menuCargos.php";

