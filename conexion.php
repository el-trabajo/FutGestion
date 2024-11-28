<?php
// Parámetros de conexión
$host = 'localhost';       // Nombre del servidor
$user = 'root';            // Nombre de usuario de la base de datos
$password = '';            // Contraseña (por defecto es vacía en XAMPP)
$dbname = 'programa_deportivos'; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($host, $user, $password, $dbname);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
