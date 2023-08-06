<?php session_start();
if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: profiles/trabajador.php');//si es así va pal index
}

// se crean variables
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $correo = filter_var(strtolower($_POST['correo']),FILTER_SANITIZE_STRING);
    $password = $_POST['password']; 
    $password = hash('sha512', $password);
    $rol = "trabajador";
    try{
        $conexion = new PDO('mysql:host=65.99.225.55;dbname=agenc158_don_chambitas','agenc158_ivan','chambitas2023'); //conexión
    }  
    catch (PDOException $e){
        echo "Error:" .$e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM cuentas INNER JOIN usuarios ON cuentas.id_cuenta = usuarios.cuenta_id WHERE correo_electronico = :correo AND my_password = :pass AND rol = :rol'); //verificar si existe la cuenta con contraseña ingresada
    $statement ->execute(array(':correo' => $correo,':pass' => $password , ':rol' => $rol));

    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['usuario'] = $correo;
        $_SESSION['id_usuario'] = $resultado['id_cuenta']; // Guardar el ID del usuario en una variable de sesión
        header('Location: profiles/trabajador.php');
        exit;
    }
    else if($correo == 'admin' and $password =='don_chambitas'){
        header('Location: views/administrador.php');
        exit;
    }
    else{
        header('Location: register/login_trabajador.php');
        $errores .= '<li>Datos incorrectos</li>';
    }
}
?>