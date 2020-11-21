<?php 
$conexion = mysqli_connect ("localhost", "root", "", "agendamiento");
$nombre = $_POST['nombre'];
$sql = "delete from agendar where nombre = '$nombre'";
echo mysql_query($conexion, $sql);
?>