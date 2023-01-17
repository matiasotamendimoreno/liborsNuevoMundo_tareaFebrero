<!doctype html>
<html lang="es">

<head>
    <title>Inicio de administración.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    $url = "http://" . $_SERVER['HTTP_HOST'] . "/tareaDbFebrero ";
    ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <nav class="nav navbr-nav">
            <a class="nav-link active" href="#">Administrador de sitio web</a>
            <a class="nav-link" href="<?php echo $url; ?> /admin/inicio.php">Inicio</a>
            <a class="nav-link" href="<?php echo $url; ?> /admin/seccion/products.php">Libros</a>
            <a class="nav-link" href="<?php echo $url; ?> /admin/seccion/close.php">Cerrar</a>
            <a class="nav-link" href="<?php echo $url ?>">Ver sitio web</a>
        </nav>
    </nav>
    <div class="container">
        <div class="row">