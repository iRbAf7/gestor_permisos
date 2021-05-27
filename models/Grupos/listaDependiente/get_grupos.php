<?php
include_once 'config.php';

if(!empty($_POST["id_asignatura"]))
{

  $sql = 'SELECT DISTINCT Grupo_idGrupo, anio_inicio
From grupo_has_asignaturas
WHERE Asignaturas_idAsignaturas ='.$_POST["id_asignatura"];

  $consulta_grupos = $link->query($sql);

  echo '<hr/>';
  echo '<h5>Grups</h5>';
  echo '<table class="table table-bordered table-hover table-compact" id="dataTableGrupos" width="100%" cellspacing="0">';
  echo '<thead>';
  echo '<th style="text-align: center;">Grup</th>';
  echo '<th style="text-align: center;">Curs</th>';
  echo '<th style="text-align: center;">Eliminar</th>';
  echo '</thead>';
  echo '<tbody>';
  
  while($grupo= $consulta_grupos->fetch_object())
  {
    echo '<tr>';
    echo '<td style="text-align: center;">'.$grupo->Grupo_idGrupo.'</td>';
    echo '<td style="text-align: center;">'.$grupo->anio_inicio.'</td>';
    ?>
    <td style="width: 10%; text-align: center">
      <a href="#" class="btn btn-danger btn-circle" id="delGrupo" onclick="eliminarGrupo(<?php echo $_POST['id_asignatura'].', '.$grupo->Grupo_idGrupo.', '.$grupo->anio_inicio;?>)">
        <i class="fas fa-trash" aria-hidden="true"></i>
      </a>
    </td>




    <?php
    echo '</tr>';
  }

  echo '</tbody>';
  echo '</table>';

  echo '<script src="js/tablas/tablaGrupos.js"></script>';
}
?>
