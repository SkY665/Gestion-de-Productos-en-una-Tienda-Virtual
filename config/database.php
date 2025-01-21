<?php
// Definición de los parámetros para la conexión a la base de datos
$host = 'localhost';
$dbname = 'tienda_virtual';
$username = 'root';
$password = '';

try {
    // Creación de una instancia de PDO para la conexión a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configuración de la forma en que PDO maneja los errores, estableciéndolo en el modo de excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores en la conexión, mostrando un mensaje y terminando el script
    die("Error en la conexión: " . $e->getMessage());
}
?>
