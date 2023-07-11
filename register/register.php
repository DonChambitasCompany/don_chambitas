<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="register.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
            <div class="wrapper">
            <h1 id="textoBienvenidaRegistrate">REGÍSTRATE</h1>

            <div class="form-box login">
                <h2 id="textoBienvenida">¡TE DAMOS LA BIENVENIDA A DON CHAMBITAS!</h2>

                <!-- INICIA EL FORMULARIO PRINCIPAL -->
                <div id="formularioPrincipal">
                    <form action="php/procesar_registro.php" method="post">
                        <div class="input-row">
                            <div class="name">
                                <input type="text" placeholder="Nombre" id="nombreUsuario" name="nombreUsuario" required>
                            </div>
                            <div class="second-name">
                                <input type="text" placeholder="Apellido Paterno" id="apellidoPaterno" name="apellidoPaterno" required>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="last-name">
                                <input type="text" placeholder="Apellido Materno" id="apellidoMaterno" name="apellidoMaterno" required>
                            </div>
                            <div class="cellphone-number">
                                <input type="text" placeholder="Número celular" id="numeroCelular" required oninput="formatPhoneNumber(this)" maxlength="12" autocomplete="tel" name="numeroCelular">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="password">
                                <input type="password" id="contrasena" name="contrasenia" placeholder="Contraseña" required minlength="8">
                            </div>

                            <div class="email">
                                <input type="email" id="correoElectronico" placeholder="Correo electrónico" name="correoElectronico" required>
                            </div>
                        </div>
                        <br>
                        <div class="input-row" id="llenarCampos" style="display: none">
                            <h6 style="color: red;">*Por favor, asegúrese de llenar todos los campos.</h6>
                        </div>
                        <input type="button" class="buton" id="btnContinuar" onclick="validarFormulario()" value="Continuar">
                        <br>
                        <br>
                        <a href="login_usuario.php"><input class="buton buton-black" id="btnMostrarForm" value="Ya tengo una cuenta"></a>
                </div>
                <!-- TERMINA EL FORMULARIO PRINCIPAL -->

                <div id="formularioSecundario" style="display: none">
                    <div class="input-row">
                        <div class="name">
                            <input type="text" placeholder="Edad" id="">
                        </div>
                        <div class="second-name">
                            <input type="text" placeholder="País" id="">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="last-name">
                            <input type="text" placeholder="Estado" id="">
                        </div>
                        <div class="cellphone-number">
                            <input type="text" inputmode="numeric" pattern="[0-9]*" id="" placeholder="Número celular" oninput="formatPhoneNumber(this)" maxlength="12" autocomplete="tel">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="password">
                            <input type="password" id="" placeholder="Código Postal" minlength="8">
                        </div>

                        <div class="email">
                            <input type="email" id="" placeholder="Calle">
                        </div>

                    </div>
                    <div class="input-row">
                        <div class="email">
                            <input type="email" id="" placeholder="Número interior">
                        </div>

                        <div class="email">
                            <input type="email" id="" placeholder="Número exterior">
                        </div>

                    </div>

                    <br>
                    <div class="input-row" id="" style="display: none">
                        <h6 style="color: red;">*Por favor, asegúrese de llenar todos los campos.</h6>
                    </div>
                    <button type="submit" class="btn-black">Omitir por ahora</button>

                    <button type="" class="btn" id="" onclick="validarFormulario()">Continuar</button>

                    </form>
                </div>

                <!-- Formulario si ya cuenta con una cuenta -->
                <div id="formularioInicioSesion" style="display: none">
                    <div class="input-row">
                        <div class="email">
                            <input type="email" id="email" placeholder="Correo Electrónico">
                        </div>
                        <div class="password">
                            <input type="password" id="password" placeholder="Contraseña" minlength="8">
                        </div>
                    </div>

                    <div class="input-row">
                    </div>
                    <br>
                    <div class="input-row" id="" style="display: none">
                        <h6 style="color: red;">*Por favor, asegúrese de llenar todos los campos.</h6>
                    </div>

                    <button type="" class="btn" id="" onclick="validarFormularioInicioSesion()">Continuar</button>
                    <button type="" class="btn btn-black" id="" onclick="validarFormularioInicioSesion()">Volver</button>

                    </form>
                </div>
            </div>
        </div>
            </div>
            
        </div>

    </div>
</body>

<script>
    function showForm() {
        console.log("se presionó");
        const formularioPrincipal = document.getElementById('formularioPrincipal');
        const formularioSecundario = document.getElementById('formularioSecundario');
        const formularioInicioSesion = document.getElementById('formularioInicioSesion');
        const textoBienvenido = document.getElementById('textoBienvenido');
        const textoBienvenidaRegistrate = document.getElementById('textoBienvenidaRegistrate');

        textoBienvenidaRegistrate.textContent = "¡Inicia Sesión!"
        formularioPrincipal.style.display = "none";
        formularioSecundario.style.display = "none";
        formularioInicioSesion.style.display = "block";
    }

    function validarFormularioInicioSesion() {
    const email = document.getElementById('email');
    const password = document.getElementById('password');
        console.log("siii")
    if(
      email.trim() === "" ||
      password.trim() === ""
    ){
      resaltarCamposIncompletos([email, password]);
    }else{
      limpiarCamposIncompletos([email, password]);
    }


}

</script>
<script src="validacion.js"></script>

</html>