<?php 
include 'register/process_register_php/conexion.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Don Chambitas</title>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
<br>
<br>
<br>
        <div class="container" id="TITTLE">
            <div class="row">
                    <div class="container mt-4">
                    <div class="col-md-6 mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
        <!--CATEGORÍAS DE TRABAJOS-->
        <div class="container">
            <h2 class="mt-lg-5 mb-4" id="categorias">¿QUÉ TIPO DE SERVICIO LE GUSTARÍA SOLICITAR?</h2>
            <div class="row">
               
                <div class="col-md-3 mb-4">
                    <div class="card d-flex flex-column align-items-center pulso">
                        <a href="./categorias/albañil.php"> <img src="assets/Albañil.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                        <div class="card-body">
                            <h5 class="card-title">ALBAÑILERÍA</h5>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-3 mb-4">
                    <div class="card d-flex flex-column align-items-center pulso">
                        <a href="./categorias/herreria.php"><img src="assets/herreria.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                        <div class="card-body">
                            <h5 class="card-title">HERRERIA EN GENERAL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-flex flex-column align-items-center pulso">
                        <a href="./categorias/mecanico.php"> <img src="assets/mecanico.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                        <div class="card-body">
                            <h5 class="card-title">MECÁNICO AUTOMOTRIZ</h5>
     
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-flex flex-column align-items-center pulso">
                        <a href="./categorias/plomeria.php"><img src="assets/plomeria.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                        <div class="card-body">
                            <h5 class="card-title">PLOMERÍA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-flex flex-column align-items-center pulso">
                       <a href="./categorias/electricista.php"> <img src="assets/electricista.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                        <div class="card-body">
                            <h5 class="card-title">ELECTRICISTA</h5>
                        </div>
                    </div>
                </div>
                
        </div>
        <?php
    // Consulta para obtener los datos de la tabla
    $sql = "SELECT * FROM usuarios
        where rol_id = 2;
    ";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $count = 0; // Contador para controlar las columnas
        while ($row = $result->fetch_assoc()) {
            if ($count % 4 === 0) {
                // Cada 4 registros, inicia una nueva fila
                echo '<div class="container"><div class="row">';
            }
            ?>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <h2><?php echo $row['nombre_usuario']; ?></h2>
                        <p><?php echo $row['imagen']; ?></p>
                        <div class="container">
                            <button class="btn m-4">Solicitar servicio</button>
                            <br>
                        </div>
                    </div>
                </div>
            <?php
            $count++;
            if ($count % 4 === 0) {
                // Cada 4 registros, cierra la fila
                echo '</div></div>';
            }
        }
        // Si el último grupo de registros no llenó una fila completa, cierra la fila
        if ($count % 4 !== 0) {
            echo '</div></div>';
        }
    } else {
        echo "No se encontraron datos en la tabla.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
   
    <!--MODAL DE TRABAJADOR-->

    <!-- Button trigger modal -->  

  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">TRABAJADOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="container">
                    <div class="image">
                      <img src="https://st.depositphotos.com/1518767/3618/i/950/depositphotos_36183013-stock-photo-smiling-plumber-holding-wrench-sitting.jpg" alt="Imagen" width="100%" height="180px">
                    </div>
                    <div class="info">
                      <div class="info-item">
                        <span class="name"><strong> Gabriel Ramírez Arroyo</strong></span>
                      </div>
                      <div class="info-item">
                        <span class="specialty"><em>Fontanero especializado</em></span>
                      </div>
                      <div class="info-item">
                        <span class="price">$99.99</span>
                      </div>
                    </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Pedir Servicio</button>
        </div>
      </div>
    </div>
  </div>


    <!-- INICIA EL FOOTER -->

    <footer class="bg-light text-center text-lg-start w-100"><!--Arreglar width-->
        <div class="container p-4 pb-0">
          <form action="">
            <div class="row">
              <div class="col-auto mb-4 mb-md-0">
                <p class="pt-2">
                  <strong>¿Necesitas información?</strong>
                </p>
              </div>
              <div class="col-md-5 col-12 mb-4 mb-md-0">
                <div class="form-outline mb-4">
                  <input type="email" id="form5Example25" class="form-control" placeholder="Correo Electrónico" />
                </div>
              </div>
              <div class="col-auto mb-4 mb-md-0">
                <button type="submit" class="btn btn-primary mb-4">
                  Enviar
                </button>
              </div>
            </div>
          </form>
        </div>
  
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2023 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/"><strong>Don Chambitas</strong></a>
        </div>
      </footer>
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
