<?php
include("./template/cabecera.php");
require_once "config.php";
if (isset($_POST['nombre'])) {
    $sql = "INSERT INTO usuarios(nombre,correo,clave) VALUES('" . $_POST['nombre'] . "','" . $_POST['correo'] . "','" . $_POST['clave'] . "')";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        die("Error de consulta");
    }
    header("Location: lista.php");
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
                        Registrarse
                    </h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ejemplo: PiñónFijo_">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">EMail</label>
                            <input type="email" name="correo" required class="form-control" placeholder="Ejemplo: pussydestroyerultramarine2012@hotmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="clave" required required class="form-control" placeholder="Ejemplo: tumbalacasamami">
                        </div>
                        <br>
                        <button type="submit" value="Registrarse" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<?php
include("./template/pie.php");
?>