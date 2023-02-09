<?php
include("./template/cabecera.php");
require_once "config.php";
$sql = "SELECT COUNT(*) AS c FROM libros";

$query = mysqli_query($con, $sql);
if (!$query) {
    echo "error de consulta";
}
$cant = mysqli_fetch_assoc($query);
if (isset($_GET['pag'])) {
    $pag = intval($_GET['pag']);
    if ($pag <= ceil(intval($cant["c"]) / 2)) {
        $in = ($pag * 2) - 2;
        $sql = "SELECT * FROM libros LIMIT $in,2";

        $query = mysqli_query($con, $sql);

        if (!$query) {
            die("Error de consulta: " . mysqli_errno($con));
        }
        $libs = mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
} else {
    $sql = "SELECT * FROM libros LIMIT 0,2";

    $query = mysqli_query($con, $sql);

    if (!$query) {
        die("Error de consulta: " . mysqli_errno($con));
    }

    $libs = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>
<div class="jumbotron">
    <h1 class="display-3">Libros</h1>
    <p class="lead">
        Aquí podrás encontrar nuestra celebre.
    </p>
    <h2>
    <a href="inicio.php">
        ↩ Volver atrás.
    </a>
</h2>
    <hr class="my-2">
</div>
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <h3>
                <a href="crear.php">Cargar nuevo título</a>
            </h3>
        </li>
    </ul>
</nav>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <?php foreach ($libs as $lib) { ?>
                <tr>
                    <div class="card-body">
                        <img class="card-img-top" src="./img/imagenNoEncontrada.png" alt="">
                        <h4 class="card-title">
                            <?php echo $lib['titulo']; ?>
                        </h4>
                        <p class="card-text">
                            ID: <?php echo $lib['lib_id']; ?>
                        </p>
                        <a class="btn btn-primary" href="error404.php" role="button">Descargar.</a>
                    </div>
                </tr>
            <?php } ?>
        </div>
    </div>
</div>
<p>
    <?php for ($i = 1; $i <= ceil(intval($cant["c"]) / 2); $i++) { ?>
        <a href="lista.php?pag=<?php echo $i; ?>"><button><?php echo $i; ?></button></a>
    <?php } ?>
</p>
<?php
include("./template/pie.php");
?>