<?php
session_start();
if (!isset($_SESSION['usuario'])) { //comprobar si ya está la sesión
    header('Location: ../register/login_trabajador.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Trabajador</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="prof-trabajador.css" type="text/css">

</head>

<body>

    <main>
        <div class="container">
            <div class="image">
              <img src="https://st.depositphotos.com/1518767/3618/i/950/depositphotos_36183013-stock-photo-smiling-plumber-holding-wrench-sitting.jpg" alt="Imagen" width="170px">
            </div>
            <div class="info">
              <div class="info-item">
                <span class="name">Nombre del Producto</span>
              </div>
              <div class="info-item">
                <span class="specialty">Especialidad del Producto</span>
              </div>
              <div class="info-item">
                <span class="price">$99.99</span>
              </div>
            </div>
          </div>
    <main>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</html>
