<?php
include("../template/cabecera.php");
?>
<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
echo $txtID . "<br>";
echo $txtNombre . "<br>";
echo $txtImagen . "<br>";
echo $accion . "<br>";
switch ($accion) {
    case "":
        echo "Presionado botón agregar";
        break;
    case "":
        echo "Presionado botón Modificar.";
        break;
    case "":
        echo "Presionado botón Cancelar.";
        break;
}
?>
<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos del libro.
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="123">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                </div>
                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Representación">
                </div>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Dark Heresy hoja de personaje.</td>
                <td>caratula.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include("../template/pie.php");
?>