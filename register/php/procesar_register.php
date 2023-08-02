<?php
// Incluimos el archivo de conexión
require_once "conexion.php";

// Obtenemos los datos del formulario

//tabla usuarios
$nombre_usuario = $_POST["nombre_usuario"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$edad = $_POST["edad"];

//tabla cuentas
$my_password = $_POST["my_password"];
$my_password = hash('sha512', $my_password);
$correo_electronico = $_POST["correo_electronico"];

//tabla contactos
$telefono = $_POST["telefono"];

//tabla countries
$name_country = $_POST["name_country"];

//tabla addresses
$calle = $_POST["calle"];
$numero_interior = $_POST["numero_interior"];
$numero_exterior = $_POST["numero_exterior"];

//tabla estado o provincia
$estado_o_provincia = $_POST["estado_o_provincia"];

//tabla codigo postal
$numero_codigo_postal = $_POST["numero_codigo_postal"];




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Iniciar una transacción para asegurar la consistencia
$conexion->begin_transaction();

    try {

        // Insertar los datos en la tabla "cuentas"
        $insertar_cuenta = "INSERT INTO cuentas (correo_electronico, my_password) VALUES ('$correo_electronico', '$my_password')";
        $conexion->query($insertar_cuenta);

        // Obtener el id_cuenta recién generado
        $id_cuenta = $conexion->insert_id;

        //Insertar los datos en la tabla "countries"
        $insertar_country = "INSERT INTO countries (name_country) 
                            VALUES ('$name_country')";
        $conexion->query($insertar_country);

        // Obtener el id_country recién generado
        $id_country = $conexion->insert_id;

        //Insertar los datos en la tabla "addresses"
        $insertar_address = "INSERT INTO addresses (calle, numero_interior, numero_exterior, country_id) 
                                VALUES ('$calle', '$numero_interior', '$numero_exterior', $id_country)";
        $conexion->query($insertar_address);

        // Obtener el id_address recién generado
        $id_address = $conexion->insert_id;

        // Insertar los datos en la tabla "usuarios"
        $insertar_usuario = "INSERT INTO usuarios (nombre_usuario, apellido_paterno, apellido_materno, edad, cuenta_id, address_id) 
                            VALUES ('$nombre_usuario', '$apellido_paterno', '$apellido_materno', $edad, $id_cuenta, $id_address)";
        $conexion->query($insertar_usuario);

        // Obtener el id_usuario recién generado
        $id_usuario = $conexion->insert_id;

        //insertar los datos en la tabla "contactos"
        $insertar_contactos = "INSERT INTO contactos (telefono, usuario_id) 
                            VALUES ('$telefono', $id_usuario)";
        $conexion->query($insertar_contactos);

        // Insertar los datos en la tabla "estado_o_provincia"
        $insertar_estado_o_provincia = "INSERT INTO estado_o_provincia (name_estado_o_provincia, country_id) 
                            VALUES ('$estado_o_provincia', $id_country)";
        $conexion->query($insertar_estado_o_provincia);

        // Obtener el id_estado_o_provincia recién generado
        $id_estado_o_provincia = $conexion->insert_id;

        // Insertar los datos en la tabla "codigo_postal"
        $insertar_numero_codigo_postal = "INSERT INTO codigo_postal (numero_codigo_postal, estado_o_provincia_id)
                             VALUES ($numero_codigo_postal, $id_estado_o_provincia)";
        $conexion->query($insertar_numero_codigo_postal);



        // Si todo se insertó correctamente, confirmamos la transacción
        $conexion->commit();
        echo "Datos insertados correctamente.";
    } catch (Exception $e) {
        // Si hay algún error en las inserciones, revertimos la transacción
        $conexion->rollback();
        echo "Error al insertar los datos: " . $e->getMessage();
    }

?>


