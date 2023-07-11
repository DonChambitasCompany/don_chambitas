<?php
// Datos de conexión a la base de datos
$server = "localhost"; // Dirección del servidor de base de datos MySQL
$usuario = "root"; // Nombre de usuario de la base de datos
$contrasena = ""; // Contraseña del usuario de la base de datos
$basededatos = "donchambas"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($server, $usuario, $contrasena, $basededatos);

// Verificar si hay errores en la conexión
if ($conexion->connect_errno) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}
?>