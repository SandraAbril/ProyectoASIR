<?php
require_once "conexion.php";

// Validar datos obligatorios
$campos = ['nombre', 'Apellidos', 'FechaNacimiento', 'Sexo', 'correo', 'Contrasena'];
foreach ($campos as $campo) {
    if (!isset($_POST[$campo]) || empty($_POST[$campo])) {
        die("❌ Falta el campo obligatorio: $campo");
    }
}

$nombre       = $_POST['nombre'];
$apellidos    = $_POST['Apellidos'];
$fechaNac     = $_POST['FechaNacimiento'];
$sexo         = $_POST['Sexo'];
$correo       = $_POST['correo'];
$contrasena   = $_POST['Contrasena'];

// Cifrar contraseña
$hash = password_hash($contrasena, PASSWORD_DEFAULT);

try {
    $stmt = $conexion->prepare("INSERT INTO usuarios 
        (nombre, Apellidos, FechaNacimiento, Sexo, correo, Contraseña)
        VALUES (:nombre, :apellidos, :fecha, :sexo, :correo, :contrasena)");

    $stmt->execute([
        ':nombre'      => $nombre,
        ':apellidos'   => $apellidos,
        ':fecha'       => $fechaNac,
        ':sexo'        => $sexo,
        ':correo'      => $correo,
        ':contrasena'  => $hash
    ]);

    echo "✅ Usuario registrado correctamente.";
} catch (PDOException $e) {
    echo "❌ Error al guardar: " . $e->getMessage();
}
?>
