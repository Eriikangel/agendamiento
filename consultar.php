<?php
$conexion = mysqli_connect ("localhost", "root", "", "agendamiento");
$nombre = $_POST['nombre'];
$sql = "select * from agendamiento where nombre='"  . $nombre  .  "'";
$resultado = mysqli_query($conexion, $sql) or die ('Error en la insertacion de datos');
while ($consulta=mysqli_fetch_array($resultado)
{
    echo("hora:" . $consulta['hora']);
}
echo("<br><br><a href='index.html'> Regresar a Agendar Cita</a>   ")
?>