<?php

$conexion = mysqli_connect ("localhost", "root", "", "agendamiento")
or die (mysql_error ($mysqli));

//insertar($conexion);

function insertar ($conexion){
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $nombre = $_POST['nombre'];
    $apellido =$_POST['apellido'];

    
    /*$cita = "SELECT FROM agendar";
    $result = mysqli_query ($conexion, $cita);
    $row = mysqli_fetch_assoc($result);
    echo $row['total'];*/

    //if ($row['total'] <=2) {
        $consulta = "INSERT INTO agendar(fecha, hora, nombre, apellido) 
        VALUES ('$fecha','$hora','$nombre','$apellido')";
        mysqli_query ($conexion, $consulta);
        mysqli_close ($conexion);
    
    if(@mysqli_insert_id){

        return 1;
    }else{

        return 0;
    }
   // } else {
    //    echo "No hay disponibilidad";
    //}
}

function Agendamiento($conexion){
    $cita = "SELECT * FROM agendar";
    $result = mysqli_query ($conexion, $cita);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close ($conexion); 
    return $row;
}
function editar($conexion){

}
?>