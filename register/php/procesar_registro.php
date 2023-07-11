<?php
require_once('conexion.php');


// Obtener los datos del formulario
$nombreUsuario = $_POST['nombreUsuario'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$numeroCelular = $_POST['numeroCelular'];
$contrasenia = $_POST['contrasenia'];
$correoElectronico = $_POST['correoElectronico'];

// Escapar caracteres especiales para prevenir inyección de SQL
$nombreUsuario = $conexion->real_escape_string($nombreUsuario);
$apellidoPaterno = $conexion->real_escape_string($apellidoPaterno);
$apellidoMaterno = $conexion->real_escape_string($apellidoMaterno);
$numeroCelular = $conexion->real_escape_string($numeroCelular);
$contrasenia = $conexion->real_escape_string($contrasenia);
$correoElectronico = $conexion->real_escape_string($correoElectronico);

// Insertar los datos en la tabla usuarios
$query = "INSERT INTO usuarios (nombreUsuario, apellidoPaterno, apellidoMaterno, numeroCelular, contrasenia, correoElectronico)
          VALUES ('$nombreUsuario', '$apellidoPaterno', '$apellidoMaterno', '$numeroCelular', '$contrasenia', '$correoElectronico')";

if ($conexion->query($query) === TRUE) {
    header("Location: ../homepage.php");
} else {
    echo "Error al insertar los datos: " . $conexion->error;
}

// Cerrar la conexión
// $conexion->close();
?>
