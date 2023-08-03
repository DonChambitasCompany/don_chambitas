<?php 
if (isset($_SESSION['usuario']) && isset($_SESSION['id_usuario'])) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas', 'root', '75628491d');
        
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

    foreach($informacion as $fila){
        $nombre = $fila['nombre_usuario']. '<br>';
        $ap = $fila['apellido_paterno']. '<br>';
        $am = $fila['apellido_materno']. '<br>';
        $edad = $fila['edad'].'<br>';
        $email = $fila['correo_electronico']. '<br>';
        $numero = $fila['telefono']. '<br>';

    }
}
?>