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

//tabla documentacion
$numero_curp = $_POST["numero_curp"];
$numero_cartilla_militar = $_POST["numero_cartilla_militar"];
$numero_pasaporte = $_POST["numero_pasaporte"];
$nombre_tipo_residencia = $_POST["nombre_tipo_residencia"];
$doc_extranjero = $_POST["doc_extranjero"];
$licencia_manejo = $_POST["licencia_manejo"];
$nombre_tipo_licencia= $_POST["nombre_tipo_licencia"];
$numero_licencia = $_POST["numero_licencia"];

//tabla educacion
$nombre_universidad = $_POST["nombre_universidad"];
$titulo_obtenido = $_POST["titulo_obtenido"];
$year_graduation = $_POST["year_graduation"];
$year_graduation = $_POST["year_graduation"];
$proyectos_destacados= $_POST["proyectos_destacados"];








?>
