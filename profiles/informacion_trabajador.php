<?php 
session_start();
if (!isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: ../register/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Datos de Usuarios</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
    <link rel="stylesheet" href="../banco/styles.css" type="text/css">

</head>   
<?php require '../informacion_trabajador.php'; ?>
</html>
