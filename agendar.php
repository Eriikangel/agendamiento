<?php

$conexion = mysqli_connect ("localhost", "root", "", "agendamiento")
or die (mysql_error ($mysqli));

insertar($conexion);

function insertar ($conexion){
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $nombre = $_POST['nombre'];
    $apellido =$_POST['apellido'];
    
    $cita = "SELECT FROM agendar";
    mysqli_query ($conexion, $cita);
    
    echo $cita;

    if ($cita <=2) {
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