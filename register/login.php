<?php
session_start();

if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: ../profiles/usuario.php');//si es así va pal index
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
        header('Location: ../profiles/usuario.php');
    }
    else{
        $errores .= '<li>Datos incorrectos</li>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="wrapper">
                            <h1>INICIAR SESIÓN</h1>             
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST">
                            <div class="input-row">
                                <div class="input-box">
                                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                    <input type="text" required name="correo" >
                                    <label for=""> Correo</label>
                                </div>
                                <div class="input-box">
                                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                                        <input type="password" required name="password">
                                        <label for=""> Contraseña</label>
                                    </div>
                            </div>
                            <button type="submit" class="buton" id="" onclick="login.submit()">Continuar</button>
                            <br>
                            <br>
                            
                            <a href="../index.html"><button type="button" class="buton buton-black">Volver</button></a>
                            <br><br>
                            <a href="register.html"><button type="button" class="buton buton-registro">¿Aún no tienes una cuenta?
                                <br><strong>Registrate</strong></button></a>
                            
                            <?php if (!empty($errores)):?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores;?>
                                </ul>
                            </div>
                        <?php endif;?>
                                
                        </form>
                    </div>
                    </div>
            </div>
        </div>

    </main>

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
