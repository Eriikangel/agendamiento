<?php include ('agendar.php'); ?>
<?php $guardarconsulta = Agendamiento($conexion); ?>
<!DOCTYPE html>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="#" />
    <link rel="icon" type="image/jpg" href="C:\xampp/htdocs/Agendamiento/imagenes/cvale.jpg" <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <title>Agendar cita</title>
</head>

<body>
    <div class="container">
        <header class="header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#"></a>
                </div>
                <div class="col-4 text-center">
                    <a class="header-logo" href="#">C.VALE</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <a class="btn btn-sm busqueda" href="#">Buscar</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-blanco" href="#">INICIO</a>
                <a class="p-2 text-blanco" href="#">ENTRAR</a>
                <a class="p-2 text-blanco" href="#">CATEGORIA</a>
                <a class="p-2 text-blanco" href="#">CARRITO</a>
                <a class="p-2 text-blanco" href="#">AGENDAR CITA</a>
                <a class="p-2 text-blanco" href="#">DISEÑAR</a>
                <a class="p-2 text-blanco" href="#">CONTACTO</a>
            </nav>
        </div>

        <section class="form-register">
            <h4>Lista de Citas</h4>
            <table class="table table-light">
                <tbody>
                <?php foreach($guardarconsulta AS $fila) { ?>
                    <tr>
                        <td><?php echo $fila["nombre"]; ?> </td>
                        <td><?php echo $fila["apellido"]; ?> </td>
                        <td><?php echo $fila["fecha"]; ?> </td>
                        <td><?php echo $fila["hora"]; ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
                
        </section>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>