<!-- documento pendiente -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>

<?php
// Incluir el archivo de conexión
require_once ('php/conexion.php');

// Paso 2: Recuperación del nombre de usuario
$nombreUsuario = "NombreUsuario";

// Paso 3: Consulta de la base de datos
$query = "SELECT * FROM usuarios WHERE nombreUsuario = '$nombreUsuario'";
$result = $conexion->query($query);

// Paso 4: Comprobación del resultado
if ($result->num_rows > 0) {
    // El nombre de usuario existe en la base de datos

    // Paso 5: Mostrar el mensaje de bienvenida
    echo "¡Bienvenido, " . $nombreUsuario . "!";
} else {
    // El nombre de usuario no existe en la base de datos
    echo "El nombre de usuario no se encuentra en la base de datos.";
}

// Cerrar la conexión a la base de datos (opcional, dependiendo de tu implementación)
$conexion->close();
?>





    <header>
        <nav>
            <div class="logo">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="assets/logo_principal.png" alt="LogoPrincipal" id="logo-principal">
                        </div>
                        <div class="col">
                            <h2 style="color: black;">{$nombreUsuario}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#trabajo">Top trabajadores</a></li>
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="#">¡Quiero trabajar!</a></li>
            </ul>
            <button class="btn" id="boton"><a href="register/register.html">Salir de mi cuenta</a></button>
        </nav>

    </header>


    
    
    <div class="container" id="contenedor-mostrar-precio">
        <div class="row">
                <div class="container mt-4">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p>Mostrar el precio total</p>
                            </div>
                            <div class="divider"> 
                            </div>
                            <div>
                                <p class="text-muted small">Incluidas todas las tarifas, sin contar los impuestos</p>
                            </div>
                            <div>
                                <label class="toggle-switch">
                                    <input type="checkbox" id="toggleSwitch" />
                                    <span class="toggle-switch-label"></span>
                                    <span class="success-icon">&#10003;</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="mt-lg-5 mb-4" id="categorias">CATEGORÍAS</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="mt-lg-5 mb-4" id="trabajo">TOP TRABAJADORES</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <img src="assets/hombre_principal.png" class="card-img-top small-image" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Mecánico, Puebla, México 4.5 ★</h5>
                        <p class="card-text">a 2.67km de distancia</p>
                    </div>
                </div>
            </div>
            <!-- Las otras tarjetas -->
        </div>
    </div>
    <script>
        const toggleSwitch = document.getElementById('toggleSwitch');
        let isActive = false;

        toggleSwitch.addEventListener('click', function() {
            console.log("Entró")
            isActive = !isActive;
            toggleSwitch.checked = isActive;
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>