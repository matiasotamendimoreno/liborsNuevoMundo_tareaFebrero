<?php
require_once "config.php";
if (isset($_POST['titulo'])) {
    $sql = "INSERT INTO libros(titulo) VALUES('" . $_POST['titulo'] . "')";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        die("Error de consulta");
    }
    header("Location: lista.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrapSolar.min.css">
    <title>Crear</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <h3>
                    <a class="nav-link" href="lista.php">↩</a>
                </h3>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        Título del libro: <input type="text" name="titulo">
                        <br>
                        <input type="submit" class="btn btn-primary" role="button">
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>