<?php
$host = 'db';
$dbname = 'proyecto';
$user = 'usuario';
$pass = 'usuario123';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $conexion = new PDO($dsn, $user, $pass, $opciones);
    // Conexión exitosa - no mostrar información sensible en producción
} catch (PDOException $e) {
    // En producción, registrar en log en lugar de mostrar al usuario
    error_log("Error de conexión DB: " . $e->getMessage());
    die("<p>❌ Error de conexión a la base de datos</p>");
}
?>
