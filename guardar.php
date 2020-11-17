<?php include ('agendar.php'); ?>
<?php $guardarconsulta = insertar($conexion); 
if($guardarconsulta >= 1){
    echo "Se guardo la cita <a href ='javascript:history.back()'
    >Clik para regresar atras</a>";
//*header ("location: " . $_SERVER [ "HTTP_REFERER"]);
}
?>