<?php

    // Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.
    $idUsuario = $_SESSION['id_usuario'];

    $consulta_imagen = $conexion->prepare('SELECT imagen FROM usuarios WHERE cuenta_id = :idUsuario');
    $consulta_imagen->execute(array(':idUsuario' => $idUsuario));

    // Procesar el resultado de la consulta
    if ($fila = $consulta_imagen->fetch()) {
        $imagenUsuario = $fila['imagen'];

        // Mostrar la imagen del usuario
        echo '<img src="data:image/jpeg;base64,' . base64_encode($imagenUsuario) . '" alt="Imagen de usuario">';
    } else {
        echo "No se encontró una imagen para el usuario con ID: $idUsuario.";
    }
?>
