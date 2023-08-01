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

// Creamos un array para almacenar los nombres de las tablas y los valores de los parámetros
$tables = array(
    "usuarios" => array(
        "nombre" => $nombre_usuario,
        "apellido_paterno" => $apellido_paterno,
        "apellido_materno" => $apellido_materno,
        "edad" => $edad
    ),
    "cuentas" => array(
        "correo_electronico" => $correo_electronico,
        "my_password" => $my_password
    ),
    "contacto" => array(
        "telefono" => $telefono
    ),
    "countries" => array(
        "name_country" => $name_country
    ),
    "addresses" => array(
        "calle" => $calle,
        "numero_exterior" => $numero_exterior,
        "numero_interior" => $numero_interior
    ),
    "estado_o_provincia" => array(
        "name_estado_o_provincia" => $estado_o_provincia
    ),
    "codigo_postal" => array(
        "codigo_postal" => $numero_codigo_postal
    )
);

// Recorremos el array e insertamos los datos en las tablas correspondientes
foreach ($tables as $table => $values) {
    $sql = "INSERT INTO $table (";
    $values_string = "";
    foreach ($values as $key => $value) {
        $sql .= $key . ", ";
        $values_string .= "'" . $value . "', ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= ") VALUES (";
    $values_string = substr($values_string, 0, -2);
    $sql .= $values_string . ")";
    $conn->query($sql);
}

// Cerramos la conexión


?>


