<?php
include("conexion.php");

// Recibimos los datos del formulario
$cliente = $_POST['cliente'];
$tipo    = $_POST['tipo_equipo'];
$marca   = $_POST['marca'];
$serie   = $_POST['serie'];
$falla   = $_POST['falla'];

// Preparamos el INSERT
$sql = "INSERT INTO recepcion_equipos (cliente, tipo_equipo, marca, serie, falla) 
        VALUES ('$cliente', '$tipo', '$marca', '$serie', '$falla')";

// Ejecutamos
if (mysqli_query($conexion, $sql)) {
    echo "<script>
            alert('Equipo registrado en el sistema');
            window.location.href='taller.html';
          </script>";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>