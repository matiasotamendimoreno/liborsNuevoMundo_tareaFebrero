<?php
$con = mysqli_connect("localhost", "root", "", "lnmdb");
if (!$con) {
    die("error de conexión:" . mysqli_connect_errno());
}