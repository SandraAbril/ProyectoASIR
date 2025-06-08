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
    echo "<p>✅ Conexión exitosa a la base de datos</p>";
} catch (PDOException $e) {
    echo "<p>❌ Error de conexión: " . $e->getMessage() . "</p>";
}
?>
