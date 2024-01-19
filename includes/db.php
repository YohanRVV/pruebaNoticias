<?php
// db.php
$host = '';
$usuario = '';
$contraseña = '';
$nombre_base_de_datos = '';

// Crear conexión
$db = new mysqli($host, $usuario, $contraseña, $nombre_base_de_datos);

// Verificar conexión
if ($db->connect_error) {
    die('Error de conexión a la base de datos: ' . $db->connect_error);
}
