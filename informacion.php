<?php
if (isset($_SESSION['usuario']) && isset($_SESSION['id_usuario'])) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas', 'root', '');
        
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    // Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.
    $idUsuario = $_SESSION['id_usuario'];
    $informacion = $conexion->prepare('SELECT nombre_usuario,apellido_paterno,apellido_materno,edad,correo_electronico,telefono FROM usuarios
     INNER JOIN cuentas ON usuarios.cuenta_id = cuentas.id_cuenta
     INNER JOIN contactos ON contactos.usuario_id = usuarios.id_usuario
      WHERE cuenta_id = :idUsuario');
    $informacion->execute(array(':idUsuario' => $idUsuario));
    $informacion ->fetch();

    foreach($informacion as $fila){
        $nombre = $fila['nombre_usuario'];
        $ap = $fila['apellido_paterno'];
        $am = $fila['apellido_materno'];
        $edad = $fila['edad'];
        $email = $fila['correo_electronico'];
        $numero = $fila['telefono'];

        
    }
    echo 'chi cheñol';
}

?>