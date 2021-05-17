<?php
include_once "models/conexionBD.php";

include_once 'models/Grupos/listaDependiente/config.php';
include_once "models/Grupos/inicializarGrupos.php";
include_once "models/Grupos/consultarGruposAsignatura.php";
include_once "views/Grupos/menuGrupos.php";
?>

<script>
  $(document).ready(function(){
    obtenerEstudios(-1);
    obtenerAsignaturas(-1);
  });
</script>
