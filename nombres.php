<?php
// Verifica si existe una sesión activa y si el ID del usuario está disponible en $_SESSION.
if (isset($_SESSION['usuario']) && isset($_SESSION['id_usuario'])) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas', 'root', '75628491d');
        
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    // Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.
    $idUsuario = $_SESSION['id_usuario'];
    $consulta_nombre = $conexion->prepare('SELECT nombre_usuario FROM usuarios WHERE cuenta_id = :idUsuario');
    $consulta_nombre->execute(array(':idUsuario' => $idUsuario));

    // Procesar el resultado de la consulta
    if ($fila = $consulta_nombre->fetch()) {
        $nombreUsuario = $fila['nombre_usuario'];
        // Imprimir nombre usuario
        echo $nombreUsuario;
    }
}
?>
