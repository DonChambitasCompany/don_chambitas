<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="administrador.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Administrador</title>
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
                        <form action="../profiles/usuario.html">
                            <div class="input-row">
                                <div class="input-box">
                                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                    <input type="text" required >
                                    <label for=""> Correo</label>
                                </div>
                                <div class="input-box">
                                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                                        <input type="password" required >
                                        <label for=""> Contraseña</label>
                                    </div>
                            </div>
                            <button type="submit" class="buton" id="" onclick="validarFormularioInicioSesion()">Continuar</button>
                            <br>
                            <br>
                            
                            <a href="register.php"><button type="button" class="buton buton-black">Volver</button></a>
                        </form>
                    </div>
                    </div>
            </div>
        </div>

    </main>
</body>
</html>