<?php
include("./template/cabecera.php");
require_once "config.php";
session_start();
if (isset($_POST['name']) && isset($_POST['pass'])) {
    $sql = "SELECT * FROM usuarios WHERE clave = '" . $_POST['pass'] . "' AND nombre = '" . $_POST['name'] . "'";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        die("error de consulta" . mysqli_errno($con));
    }
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['usuario']['nombre'] = $_POST['name'];
        header("Location: login.php?e=y");
    } else {
        header("Location: login.php?e=n");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-header">
                    <h2>
                        Iniciar seción.
                    </h2>
                </div>
                <div class="card-body">
                    <form method="POST" name="login">
                        <div class="form-group">
                            <label>
                                Usuario
                            </label>
                            <input type="text" name="name" required class="form-control" placeholder="Ejemplo: xX_pepitoGamer2009_Xx">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                                Contraseña
                            </label>
                            <input type="password" name="pass" required class="form-control" placeholder="Ejemplo: 123456789">
                        </div>
                        <br>
                        <button type="submit" value="enviar" class="btn btn-primary">
                            Entrar
                        </button>
                        <br>
                        <br>
                        <a href="register.php">
                            Registrarse
                        </a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
if (isset($_GET['e']) && $_GET['e'] == "y") {
    echo "<p>se ha iniciado sesion correctamente</p>";
} else if (isset($_GET['e']) && $_GET['e'] == "n") {
    echo "<p>contraseña o nombre incorrectos</p>";
} ?>
<?php
include("./template/pie.php");
?>