<?php 
$conexion = mysqli_connect ("localhost", "root", "", "agendamiento");
$fecha = $_POST['fecha'];
$sql = "delete from agendar where fecha ='" . $fecha . "'";
$resultado = mysqli_query($conexion, $sql) or die ('Error al eliminar cita');
echo("Cita Eliminada");
echo("<br><br><a href='index.html> Regresar a Agendar Cita </a>");
?>