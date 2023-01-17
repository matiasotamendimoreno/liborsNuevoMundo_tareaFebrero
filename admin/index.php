<?php
if ($_POST) {
    header('Location:inicio.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Loguearse</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Iniciar seción - Admin.
                        </h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Usuario Administrador</label>
                                <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Nombre de usuario del administrador">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña del administrador">
                                <small id="passwordHelp" class="form-text text-muted">No le prestes a NADIE tu contraseña.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>