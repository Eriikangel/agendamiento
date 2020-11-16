<?php

$conexion = mysqli_connect ("localhost", "root", "", "agendamiento")
or die (mysql_error ($mysqli));

insertar($conexion);

function insertar ($conexion){
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $nombre = $_POST['nombre'];
    $apellido =$_POST['apellido'];
    
    $cita = "SELECT count(*) AS 'total', 'fecha' FROM agendar where 'fecha' = '2020-11-17'";
    $result = mysqli_query ($conexion, $cita);
    $row = mysqli_fetch_assoc($result);
    echo $row['total'];

    if ($row['total'] <=2) {
        $consulta = "INSERT INTO agendar(fecha, hora, nombre, apellido) 
        VALUES ('$fecha','$hora','$nombre','$apellido')";
        mysqli_query ($conexion, $consulta);
        mysqli_close ($conexion);   
    } else {
        echo "No hay disponibilidad";
    } 

}

function Agendamiento($conexion){
    $consulta  = "SELECT * FROM agenda";
    $resultado = mysqli_query($conexion, $consulta);
}

?>