<?php
// Database configuration
$servername = "65.99.225.55";
$username = "agenc158_ivan";
$password = "chambitas2023";
$dbname = "agenc158_don_chambitas";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
?>
