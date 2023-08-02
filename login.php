<?php session_start();
if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: profiles/usuario.php');//si es así va pal index
}
$errores = '';

// se crean variables
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $correo = filter_var(strtolower($_POST['correo']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas','root','75628491d');
    }  
    catch (PDOException $e){
        echo "Error:" .$e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM cuentas where correo_electronico = :correo AND my_password = :pass');
    $statement ->execute(array(':correo' => $correo,':pass' => $password ));

    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['usuario'] = $correo;
        header('Location: profiles/usuario.php');
    }
    else{
        $errores .= '<li>Datos incorrectos</li>';
    }
}

?>