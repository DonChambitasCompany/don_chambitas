<?php
// Incluimos el archivo de conexión
require_once "conexion.php";

// Obtenemos los datos del formulario

//tabla solicitar empleo
$fecha = $_POST["fecha"];
$sueldo_deseado = $_POST["sueldo_deseado"];

//tabla usuarios
$nombre_usuario = $_POST["nombre_usuario"];
// $edad = $_POST["edad"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$rol = 'trabajador'; // Especificamos el valor 'trabajador' para el campo rol

// Ruta temporal de la imagen subida
$imagen_tmp = $_FILES["imagen"]["tmp_name"];

// Lee el contenido de la imagen en bytes
$imagen_contenido = addslashes(file_get_contents($imagen_tmp));


//tabla cuentas
$my_password = $_POST["my_password"];
$my_password = ("$my_password");
$correo_electronico = $_POST["correo_electronico"];

//pendiente
//tabla contactos
// $telefono = $_POST["telefono"];

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

//tabla documentacion
$numero_curp = $_POST["numero_curp"];
$numero_cartilla_militar = $_POST["numero_cartilla_militar"];
$numero_pasaporte = $_POST["numero_pasaporte"];
$nombre_tipo_residencia = $_POST["nombre_tipo_residencia"];
//////////////////////////////////////////////////////
$doc_extranjero = $_FILES["doc_extranjero"];
$temp_extranjero = $_FILES['doc_extranjero']['tmp_name'];
$original_name_doc_extranjero = $_FILES['doc_extranjero']['name'];

$licencia_manejo = $_POST["licencia_manejo"];
$nombre_tipo_licencia = $_POST["nombre_tipo_licencia"];
$numero_licencia = $_POST["numero_licencia"];

//tabla educacion
$nombre_universidad = $_POST["nombre_universidad"];
///////////////////////////////////////////////////
$titulo_obtenido = $_FILES["titulo_obtenido"];
$temp_titulo_obtenido = $_FILES['titulo_obtenido']['tmp_name'];
$original_name_titulo_obtenido = $_FILES['titulo_obtenido']['name'];

$year_graduation = $_POST["year_graduation"];
$proyectos_destacados= $_POST["proyectos_destacados"];

//tabla profesiones
$name_profesion = $_POST["name_profesion"];



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Iniciar una transacción para asegurar la consistencia
$conexion->begin_transaction();

    try {

        // Tablas 1to1
        // Insertar los datos en la tabla "cuentas"
        $insertar_cuenta = "INSERT INTO cuentas (correo_electronico, my_password) VALUES ('$correo_electronico', '$my_password')";
        $conexion->query($insertar_cuenta);

        // Obtener el id_cuenta recién generado
        $id_cuenta = $conexion->insert_id;

        // echo $insertar_cuenta;

        //Insertar los datos en la tabla "countries"
        $insertar_country = "INSERT INTO countries (name_country) 
                            VALUES ('$name_country')";
        $conexion->query($insertar_country);

        // Obtener el id_country recién generado
        $id_country = $conexion->insert_id;

        // echo $insertar_country;

        //Insertar los datos en la tabla "addresses"
        $insertar_address = "INSERT INTO addresses (calle, numero_interior, numero_exterior, country_id) 
                                VALUES ('$calle', '$numero_interior', '$numero_exterior', $id_country)";
        $conexion->query($insertar_address);

        // Obtener el id_address recién generado
        $id_address = $conexion->insert_id;
        

        //Insertar los datos en la tabla datos_educacion
        $insertar_datos_educacion = "INSERT INTO datos_educacion (nombre_universidad, titulo_obtenido, year_graduation, proyectos_destacados) 
        VALUES ('$nombre_universidad', '$original_name_titulo_obtenido', '$year_graduation', '$proyectos_destacados')";
        $conexion->query($insertar_datos_educacion);

        // Obtener el id_datos_educacion
        $id_datos_educacion = $conexion->insert_id;

        // echo $insertar_datos_educacion;

        
        //Insertar los datos en la tabla usuarios
        $insertar_usuarios = "INSERT INTO usuarios (nombre_usuario, apellido_paterno, apellido_materno, edad, imagen, rol, cuenta_id, address_id) 
        VALUES ('$nombre_usuario', '$apellido_paterno', '$apellido_materno', Null, '$imagen_contenido', '$rol', $id_cuenta, $id_address)";
        $conexion->query($insertar_usuarios);

        // Obtener el id_usuario recién generado
        $id_usuario = $conexion->insert_id;

        // echo $id_usuario;
        // echo $insertar_usuarios;

        // Insertar los datos en la tabla "documentacion_trabajador"
        $insertar_documentacion_trabajador = "INSERT INTO documentacion_trabajador (numero_curp, numero_cartilla_militar, 
                                                numero_pasaporte, doc_extranjero, licencia_manejo, numero_licencia, tipo_residencia_id, tipo_licencia_id)
                                                VALUES ('$numero_curp', '$numero_cartilla_militar', '$numero_pasaporte', 
                                                '$original_name_doc_extranjero', '$licencia_manejo', '$numero_licencia', $nombre_tipo_residencia, $nombre_tipo_licencia)";
        $conexion->query($insertar_documentacion_trabajador);

        // Obtener el id_documentacion_trabajador recién generado
        $id_documentacion_trabajador = $conexion->insert_id;

        // echo $insertar_documentacion_trabajador;

        //Insertar los datos en la tabla trabajadores
        $insertar_trabajador = "INSERT INTO trabajadores (usuario_id, profesion_id, datos_educacion_id, documentacion_trabajador_id)
        VALUES ($id_usuario, $name_profesion, $id_datos_educacion, $id_documentacion_trabajador)";
        $conexion->query($insertar_trabajador);

        // echo $insertar_trabajador;


        // Insertar los datos en la tabla "estado_o_provincia"
        $insertar_estado_o_provincia = "INSERT INTO estado_o_provincia (name_estado_o_provincia, country_id) 
                            VALUES ('$estado_o_provincia', $id_country)";
        $conexion->query($insertar_estado_o_provincia);

        // Obtener el id_estado_o_provincia recién generado
        $id_estado_o_provincia = $conexion->insert_id;

        // echo $insertar_estado_o_provincia;


        // Insertar los datos en la tabla "codigo_postal"
        $insertar_numero_codigo_postal = "INSERT INTO codigo_postal (numero_codigo_postal, estado_o_provincia_id)
                             VALUES ($numero_codigo_postal, $id_estado_o_provincia)";
        $conexion->query($insertar_numero_codigo_postal);

        // echo $insertar_numero_codigo_postal;



        // Si todo se insertó correctamente, confirmamos la transacción
        $conexion->commit();
        echo "Datos insertados correctamente.";
    } catch (Exception $e) {
        // Si hay algún error en las inserciones, revertimos la transacción
        $conexion->rollback();
        echo "Error al insertar los datos: " . $e->getMessage();
    }


?>
