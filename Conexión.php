<?php
$host = "localhost"; // Cambia por la dirección de tu servidor de MySQL
$usuario = ""; // Cambia por tu usuario de MySQL
$clave = ""; // Cambia por tu contraseña de MySQL
$base_datos = "Curriculum"; // Cambia por el nombre de tu base de datos

// Crear la conexión
$conexion = new mysqli($host, $usuario, $clave, $base_datos);

// Verificar si la conexión es exitosa
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}
?>
