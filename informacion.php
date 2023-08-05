<?php
if (isset($_SESSION['usuario']) && isset($_SESSION['id_usuario'])) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    // Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.

    $idUsuario = $_SESSION['id_usuario'];
    $informacion = $conexion->prepare('SELECT * FROM usuarios
     INNER JOIN cuentas ON usuarios.cuenta_id = cuentas.id_cuenta
     INNER JOIN contactos ON contactos.usuario_id = usuarios.id_usuario
      WHERE cuenta_id = :idUsuario');
    $informacion->execute(array(':idUsuario' => $idUsuario));

    $nombre = '';
    $ap = '';
    $am = '';
    $edad = '';
    $email = ''; 
    $numero = '';

    if ($fila = $informacion->fetch()) {
        $nombre = $fila['nombre_usuario'];
        $ap = $fila['apellido_paterno'];
        $am = $fila['apellido_materno'];
        $edad = $fila['edad'];
        $email = $fila['correo_electronico'];
        $numero = $fila['telefono'];


        $info = <<< EDO
        <body align="center">
    <div class="profile__cont">
        <h1 align="center">Tus datos</h1><br><br>
            <div align = "center">
        
                <table class="table-primary">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th>Correo Electrónico</th>
                        <th>Telefono Celular</th>
                    </thead>
                    <tbody>
                        <td> $nombre</td>
                        <td> $ap</td>
                        <td> $am</td>
                        <td> $edad</td>
                        <td> $email</td>
                        <td> $numero</td>
                    </tbody>
                </table>
        
            <br><br><br>
            <button type="submit" style="background-color: orange;"><a style="text-decoration: none; color: #ffff;" href="usuario.php"><br>&nbsp;&nbsp;&nbsp;&nbsp;Volver&nbsp;&nbsp;&nbsp;&nbsp;<br></a></button>
    </div>
</body>
EDO;

        echo $info;
        

    } else {
        $nombre = "Problemas";
        $ap = "Con";
        $am = "La";
        $edad = "Base";
        $email = "De";
        $numero = "Datos";
        echo "No se encontraron registros.";
        $info = <<< EDO
        <body align="center">
    <div class="profile__cont">
        <h1 align="center">Tus datos</h1><br><br>
            <div align = "center">
        
                <table class="table-primary">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th>Correo Electrónico</th>
                        <th>Telefono Celular</th>
                    </thead>
                    <tbody>
                        <td>$nombre</td>
                        <td>$ap</td>
                        <td>$am</td>
                        <td>$edad</td>
                        <td>$email</td>
                        <td>$numero</td>
                    </tbody>
                </table>
        
            <br><br><br>
            <button type="submit" style="background-color: orange;"><a style="text-decoration: none; color: #ffff;" href="usuario.php"><br>&nbsp;&nbsp;&nbsp;&nbsp;Volver&nbsp;&nbsp;&nbsp;&nbsp;<br></a></button>
    </div>
</body>
EDO;

        echo $info;
    }
    
} 



?>