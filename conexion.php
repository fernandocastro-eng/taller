<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "taller_sistemas";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}
?>