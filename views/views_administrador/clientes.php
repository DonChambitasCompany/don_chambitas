<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="administrador.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Clientes / Administrador</title>
</head>

<body>
    <div class="container-fluid bg-primary" style="height: 150px">
        <div class="row">
            <div class="col-2">
                <button class="btn text-light" data-bs-toggle="offcanvas" data-bs-target="#intro"><i class="fa-solid fa-bars m-4 fa-2xl"></i></button>
            </div>
            <div class="col-10 text-light">
                <p style="font-size: 50px" class="fw-bold text-light">Dashboard</p>
                <p class="">Brinda el control y gestión total.</p>
            </div>
        </div>

    </div>

    <div class="offcanvas offcanvas-start" id="intro">

<div class="offcanvas-header bg-primary">
    <div class="container text-center text-light fw-bold">
        <div class="offcanvas-title">
            <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" height="170" width="170" class="rounded-circle ">
            <p>@Administrador</p>
        </div>
    </div>
</div>
<br>
<br>

<div class="offcanvas-body  d-flex flex-column">
    <div class="flex-grow1 ">
        <ul class=" border-primary">
            <li class="list-group mb-3 fw-bold fs-3"><a href="../administrador.php" class="text-decoration-none text-black">Dashboard</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="trabajadores.php" class="text-decoration-none text-black">Trabajadores</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="clientes.php" class="text-decoration-none text-black">Clientes</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="servicios.php" class="text-decoration-none text-black">Servicios</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="aceptar_denegar.php" class="text-decoration-none text-black">Aceptar / Denegar Trabajadores</a></li>
        </ul>
    </div>
</div>



<div class="offcanvas-footer">
    <div class="container text-center space-between">
        <div class="offcanvas-title">
            <button class="btn mb-3" data-bs-dismiss="offcanvas">Cerrar sesión</button>
        </div>
    </div>
</div>
</div>

    <div class="container text-center">
        <br>
        <br>

        <h1>Clientes registrados</h1>
        <br>
        <br>
        <div class="table-responsive" style="overflow-x: hidden;">
            <table class="table table-primary table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Pedro</td>
                        <td>Páramo</td>
                        <td>Reyes</td>
                        <td>222 156 48 90</td>
                        <td>pedro@gmail.com</td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Ernesto</td>
                        <td>Gómez</td>
                        <td>Bolaños</td>
                        <td>222 156 48 90</td>
                        <td>pedro@gmail.com</td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>




</body>

</html>