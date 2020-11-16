<?php include ('index.php'); ?>
<!DOCTYPE html>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Agendar cita</title>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#">C.Vale</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#"></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Ingresa</a>
                </div>
        </header>
        </div>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">Home</a>
                <a class="p-2 text-muted" href="#">Login</a>
                <a class="p-2 text-muted" href="#">Categoria</a>
                <a class="p-2 text-muted" href="#">Carrito</a>
                <a class="p-2 text-muted" href="#">Contacto</a>
                <a class="p-2 text-muted" href="#">Agendar Cita</a>
                <a class="p-2 text-muted" href="#">Diseñar</a>
        </div>
        <section class="form-register">
            <h4>Agendar Cita</h4>
            <form action="index.php" method="post">
                <input class="controls" type="date" name="fecha" id="Fecha" placeholder="ingrese la fecha">
                <input class="controls" type="time" name="hora" id="Hora" placeholder="ingrese la hora">
                <input class="controls" type="text" name="nombres" id="Nombre" placeholder="Nombres">
                <input class="controls" type="text" name="apellido" id="Apellido" placeholder="Apellidos">
                <input class="buttons" type="submit" value="Agendar cita">
            </form>
            <table>
                <thead>
                    <th>fecha</th>
                    <th>hora</th>
                    <th>nombre</th>
                    <th>apellido</th>
                </thead>
            </table>
            <?= cargarAgendamiento($conexion); ?>
        </section>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>