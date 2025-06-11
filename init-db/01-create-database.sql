-- Script de inicialización automática para MySQL
-- Este archivo se ejecuta automáticamente cuando se crea el contenedor

-- Crear base de datos si no existe
CREATE DATABASE IF NOT EXISTS proyecto;

-- Usar la base de datos
USE proyecto;

-- Crear tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NULL,
    sexo TINYINT NULL COMMENT '0=Femenino, 1=Masculino',
    correo VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    comunicaciones_comerciales BOOLEAN DEFAULT FALSE,
    tratamiento_datos BOOLEAN DEFAULT FALSE,
    transferencia_datos BOOLEAN DEFAULT FALSE,
    comunicaciones_sms BOOLEAN DEFAULT FALSE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar usuario de prueba (opcional)
INSERT IGNORE INTO usuarios (nombre, apellidos, fecha_nacimiento, sexo, correo, contrasena) VALUES
('Admin', 'Sistema', '1990-01-01', 0, 'admin@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Mostrar confirmación
SELECT 'Base de datos y tabla usuarios creadas correctamente' AS mensaje; 