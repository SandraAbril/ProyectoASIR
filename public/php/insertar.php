<?php
require_once "conexion.php";

// Validar datos POST
if (!isset($_POST['nombre']) || !isset($_POST['correo'])) {
    die("Faltan datos del formulario.");
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

try {
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");
    $stmt->execute([
        ':nombre' => $nombre,
        ':correo' => $correo
    ]);

    echo "✅ Usuario registrado correctamente.";
} catch (PDOException $e) {
    echo "❌ Error al guardar: " . $e->getMessage();
}
?>
