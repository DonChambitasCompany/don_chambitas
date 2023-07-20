<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
