<?php
require_once "conexion.php";

// Validar solo campos obligatorios
$campos = ['nombre', 'Apellidos', 'correo', 'Contrasena', 'confirmar_contrasena'];
foreach ($campos as $campo) {
    if (!isset($_POST[$campo]) || empty($_POST[$campo])) {
        die("❌ Falta el campo obligatorio: $campo");
    }
}

// Validar que las contraseñas coincidan
if ($_POST['Contrasena'] !== $_POST['confirmar_contrasena']) {
    die("❌ Las contraseñas no coinciden");
}

// Validar que se acepta el tratamiento de datos
if (!isset($_POST['tratamiento'])) {
    die("❌ Debes aceptar el tratamiento de datos para continuar");
}

$nombre       = $_POST['nombre'];
$apellidos    = $_POST['Apellidos'];
$fechaNac     = !empty($_POST['FechaNacimiento']) ? $_POST['FechaNacimiento'] : null;
$sexo         = ($_POST['Sexo'] !== '') ? $_POST['Sexo'] : null;
$correo       = $_POST['correo'];
$contrasena   = $_POST['Contrasena'];

// Capturar preferencias de comunicación
$comunicaciones = isset($_POST['comunicaciones']) ? 1 : 0;
$tratamiento = isset($_POST['tratamiento']) ? 1 : 0;
$transferencia = isset($_POST['transferencia']) ? 1 : 0;
$sms = isset($_POST['sms']) ? 1 : 0;

// Cifrar contraseña
$hash = password_hash($contrasena, PASSWORD_DEFAULT);

try {
    $stmt = $conexion->prepare("INSERT INTO usuarios 
        (nombre, apellidos, fecha_nacimiento, sexo, correo, contrasena, 
         comunicaciones_comerciales, tratamiento_datos, transferencia_datos, comunicaciones_sms)
        VALUES (:nombre, :apellidos, :fecha, :sexo, :correo, :contrasena, 
                :comunicaciones, :tratamiento, :transferencia, :sms)");

    $stmt->execute([
        ':nombre'         => $nombre,
        ':apellidos'      => $apellidos,
        ':fecha'          => $fechaNac,
        ':sexo'           => $sexo,
        ':correo'         => $correo,
        ':contrasena'     => $hash,
        ':comunicaciones' => $comunicaciones,
        ':tratamiento'    => $tratamiento,
        ':transferencia'  => $transferencia,
        ':sms'            => $sms
    ]);

    echo "<div style='text-align: center; font-family: Arial, sans-serif; margin-top: 50px;'>
            <h2 style='color: green;'>✅ ¡Registro exitoso!</h2>
            <p>Tu cuenta ha sido creada correctamente.</p>
            <a href='../index.html' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007BFF; color: white; text-decoration: none; border-radius: 5px;'>Volver al inicio</a>
          </div>";
} catch (PDOException $e) {
    echo "<div style='text-align: center; font-family: Arial, sans-serif; margin-top: 50px;'>
            <h2 style='color: red;'>❌ Error en el registro</h2>
            <p>Hubo un problema al crear tu cuenta. Por favor, intenta de nuevo.</p>
            <a href='../html/Formulario.html' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007BFF; color: white; text-decoration: none; border-radius: 5px;'>Intentar de nuevo</a>
          </div>";
    error_log("Error en registro: " . $e->getMessage());
}
?>
