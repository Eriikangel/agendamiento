<?php 
$conexion = mysqli_connect ("localhost", "root", "", "agendamiento");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sql = "update agendar set nombre ='" . $nombre . "' where apellido ='" . $apellido . "'";
$resultado = mysqli_query($conexion, $sql) or die ('Error al modificar cita');
echo("Cita Modificado");
echo("<br><br><a href='index.html> Regresar a Agendar Cita </a>");
?>