<?php session_start();
if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: profiles/usuario.php');//si es así va pal index
}
$errores = '';

// se crean variables
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $correo = filter_var(strtolower($_POST['correo']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    // $password = hash('sha512', $password);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas','root',''); //conexión
    }  
    catch (PDOException $e){
        echo "Error:" .$e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM cuentas where correo_electronico = :correo AND my_password = :pass'); //verificar si existe la cuenta con contraseña ingresada
    $statement ->execute(array(':correo' => $correo,':pass' => $password ));

    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['usuario'] = $correo;
        $_SESSION['id_usuario'] = $resultado['id_cuenta']; // Guardar el ID del usuario en una variable de sesión
        header('Location: profiles/usuario.php');
        exit;
    }
    else if($correo == 'admin' and $password =='don_chambitas'){
        header('Location: views/administrador.php');
        exit;
    }
    else{
        header('Location: register/login.php');
        $errores .= '<li>Datos incorrectos</li>';
    }
}
?>