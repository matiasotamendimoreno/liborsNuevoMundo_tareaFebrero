<?php
require_once "config.php";
if (isset($_GET['id'])) {
    $sql = "DELETE FROM libros WHERE lib_id = " . $_GET['id'];
    $query = mysqli_query($con, $sql);
    if (!$query) {
        die("Error de consulta");
    } else {
        header("Location: lista.php");
    }
}
