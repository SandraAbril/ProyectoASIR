# 🛍️ **Clon de Primor - Proyecto ASIR**

[![Docker](https://img.shields.io/badge/Docker-Ready-blue.svg)](https://docker.com)
[![PHP](https://img.shields.io/badge/PHP-8.3-purple.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.4-orange.svg)](https://mysql.com)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow.svg)](https://javascript.com)

> **Una recreación completa y funcional de la página web de Primor desarrollada como proyecto del ciclo ASIR (Administración de Sistemas Informáticos y Redes).**

## 📋 **Descripción del Proyecto**

Este proyecto es una **réplica exacta** de la tienda online Primor, implementando tanto el diseño visual como las funcionalidades principales. Incluye una página principal moderna, sistema de registro de usuarios, base de datos funcional y una arquitectura completa con Docker.

### ✨ **Características Principales**

- 🎨 **Diseño idéntico** al sitio web oficial de Primor
- 👥 **Sistema de registro** de usuarios con validación completa
- 🗄️ **Base de datos MySQL** con estructura optimizada
- 🐳 **Contenedorización completa** con Docker y Docker Compose
- 📱 **Diseño responsivo** para móviles y tablets
- 🔒 **Seguridad avanzada** con encriptación de contraseñas
- ⚡ **Interfaz interactiva** con JavaScript moderno
- 🔧 **Panel de administración** con PHPMyAdmin

---

## 🚀 **Instalación y Configuración**

### **Prerrequisitos**
- Docker Engine 20.0+
- Docker Compose 2.0+
- Git

### **1. Clonar el Repositorio**
```bash
git clone <tu-repositorio-url>
cd ProyectoASIR
```

### **2. Configurar el Entorno**
```bash
# Asegurar permisos de archivos
chmod +x init-db/01-create-database.sql

# Verificar estructura de directorios
ls -la
```

### **3. Levantar los Servicios**
```bash
# Construir e iniciar todos los contenedores
docker-compose up -d

# Verificar que todos los servicios estén corriendo
docker-compose ps
```

### **4. Acceder a la Aplicación**
- 🌐 **Página Principal**: http://localhost:6060
- 📝 **Formulario de Registro**: http://localhost:6060/html/Formulario.html
- 🗄️ **PHPMyAdmin**: http://localhost:6061
- 🔧 **PHP Info**: http://localhost:6060/index.php

---

## 🏗️ **Estructura del Proyecto**

```
ProyectoASIR/
├── 📁 src/                     # Recursos multimedia
│   ├── Logo.jpeg               # Logo principal del sitio
│   └── FavIcon.jpeg           # Icono del navegador
├── 📁 css/                     # Estilos CSS
│   ├── style.css              # Estilos principales
│   └── flexboxgrid.min.css    # Grid system
├── 📁 js/                      # JavaScript
│   ├── script.js              # Funciones del slider
│   └── BotonPromos.js         # Menú de promociones
├── 📁 html/                    # Páginas adicionales
│   └── Formulario.html        # Formulario de registro
├── 📁 php/                     # Backend PHP
│   ├── conexion.php           # Conexión a base de datos
│   └── insertar.php           # Procesamiento de formularios
├── 📁 init-db/                 # Inicialización de BD
│   └── 01-create-database.sql # Script de creación
├── 📁 public/                  # Archivos públicos
│   ├── .gitignore             # Archivos ignorados
│   └── readme.md              # Documentación básica
├── 🐳 docker-compose.yml       # Orquestación de contenedores
├── 🐳 Dockerfile              # Imagen personalizada PHP
├── 🏠 index.html              # Página principal
├── 🔧 index.php               # Test PHP
└── 📖 readme.md               # Esta documentación
```

---

## 💻 **Tecnologías Utilizadas**

### **Frontend**
- **HTML5** - Estructura semántica moderna
- **CSS3** - Estilos avanzados con Flexbox y Grid
- **JavaScript ES6** - Interactividad y validaciones
- **Responsive Design** - Compatible con todos los dispositivos

### **Backend**
- **PHP 8.3** - Lógica del servidor y APIs
- **MySQL 8.4** - Base de datos relacional
- **Apache** - Servidor web

### **DevOps & Tools**
- **Docker** - Contenedorización
- **Docker Compose** - Orquestación multi-contenedor
- **PHPMyAdmin** - Gestión de base de datos
- **Git** - Control de versiones

---

## 🗄️ **Base de Datos**

### **Credenciales de Acceso**
```env
Host: localhost:3307
Usuario: usuario
Contraseña: usuario123
Base de datos: proyecto
```

### **Estructura de la Tabla `usuarios`**
```sql
CREATE TABLE usuarios (
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
);
```

---

## 🎯 **Funcionalidades Implementadas**

### **🏠 Página Principal**
- ✅ **Header completo** con logo real y navegación
- ✅ **Barra de búsqueda** funcional
- ✅ **Slider de tendencias** navegable con flechas
- ✅ **Menú de promociones** desplegable
- ✅ **Sección de marcas** con iconos circulares coloridos
- ✅ **Banner promocional** con gradientes y animaciones
- ✅ **Sección destacada** del perfume LIBRE de YSL
- ✅ **Diseño responsivo** para móviles

### **📝 Sistema de Registro**
- ✅ **Formulario completo** idéntico al original
- ✅ **Validación en tiempo real** de campos
- ✅ **Verificación de contraseñas** coincidentes
- ✅ **Indicador de fuerza** de contraseña (Débil/Media/Fuerte)
- ✅ **Mostrar/ocultar** contraseñas con botón
- ✅ **Campos opcionales** (fecha nacimiento, sexo)
- ✅ **Checkboxes de comunicaciones** y RGPD
- ✅ **Encriptación segura** de contraseñas (bcrypt)
- ✅ **Páginas de confirmación** con navegación

### **🔧 Funcionalidades Técnicas**
- ✅ **Conexión segura** a base de datos con PDO
- ✅ **Validaciones del servidor** PHP
- ✅ **Manejo de errores** y logging
- ✅ **Scripts de inicialización** automática de BD
- ✅ **Arquitectura modular** y escalable

---

## 🎨 **Capturas de Pantalla**

### **Página Principal**
- **Header Negro** con logo, búsqueda y navegación
- **Slider de Tendencias** con enlaces navegables  
- **Iconos Circulares** de marcas con gradientes coloridos
- **Banner Morado** gigante con "#Promos primor.eu"
- **Sección Dorada** del perfume LIBRE de YSL

### **Formulario de Registro**
- **Diseño Profesional** idéntico al original de Primor
- **Validaciones Visuales** en tiempo real
- **Campos Inteligentes** con indicadores de estado
- **Interfaz Intuitiva** con efectos hover y transiciones

---

## 🚦 **Comandos Útiles**

### **Gestión de Contenedores**
```bash
# Iniciar servicios
docker-compose up -d

# Parar servicios
docker-compose down

# Ver logs
docker-compose logs -f

# Reiniciar base de datos (perder datos)
docker-compose down && docker volume rm proyectoasir_db_data && docker-compose up -d

# Acceder al contenedor web
docker exec -it proyectoasir-web-1 bash

# Acceder a MySQL
docker exec -it proyectoasir-db-1 mysql -u usuario -pusuario123 proyecto
```

### **Base de Datos**
```bash
# Backup de la base de datos
docker exec proyectoasir-db-1 mysqldump -u usuario -pusuario123 proyecto > backup.sql

# Restaurar backup
docker exec -i proyectoasir-db-1 mysql -u usuario -pusuario123 proyecto < backup.sql

# Ver tablas
docker exec -it proyectoasir-db-1 mysql -u usuario -pusuario123 proyecto -e "SHOW TABLES;"
```

---

## 🐛 **Problemas Resueltos**

Durante el desarrollo se identificaron y corrigieron los siguientes bugs:

- ❌ **Conflictos de merge** en Git sin resolver
- ❌ **Rutas incorrectas** en Docker Compose
- ❌ **JavaScript con errores** de clases CSS incompatibles
- ❌ **Validación PHP defectuosa** para campos con valor "0"
- ❌ **Archivos duplicados** en estructura de directorios
- ❌ **Navegación rota** entre páginas
- ❌ **Formulario desconectado** de la base de datos
- ❌ **Encriptación de contraseñas** insegura

---

## 🔧 **Configuración Avanzada**

### **Variables de Entorno**
```yaml
# docker-compose.yml
environment:
  MYSQL_ROOT_PASSWORD: root
  MYSQL_DATABASE: proyecto
  MYSQL_USER: usuario
  MYSQL_PASSWORD: usuario123
```

### **Puertos Utilizados**
- **6060** - Aplicación web principal
- **6061** - PHPMyAdmin
- **3307** - MySQL (externo)

### **Volúmenes Docker**
- `proyectoasir_db_data` - Datos persistentes de MySQL
- `./init-db` - Scripts de inicialización
- `.` - Código fuente de la aplicación

---

## 🤝 **Contribución**

Este proyecto fue desarrollado como parte del **Proyecto ASIR** con los siguientes objetivos de aprendizaje:

- Administración de sistemas con Docker
- Desarrollo web full-stack
- Gestión de bases de datos
- Implementación de seguridad web
- Diseño responsive y UX/UI

### **Próximas Mejoras**
- [ ] Sistema de login de usuarios
- [ ] Carrito de compras funcional
- [ ] Panel de administración
- [ ] API REST para móviles
- [ ] Sistema de pagos (simulado)
- [ ] Catálogo de productos
- [ ] Búsqueda avanzada
- [ ] Sistema de reviews

---

## 📞 **Soporte y Contacto**

**Desarrollado por:** Proyecto ASIR  
**Tecnologías:** HTML5, CSS3, JavaScript, PHP, MySQL, Docker  
**Año:** 2024  

### **Recursos Adicionales**
- 📚 [Documentación de Docker](https://docs.docker.com/)
- 🐘 [Manual de PHP](https://www.php.net/manual/)
- 🗄️ [Guía de MySQL](https://dev.mysql.com/doc/)
- 🎨 [MDN Web Docs](https://developer.mozilla.org/)

---

## 📄 **Licencia**

Este proyecto es de uso educativo desarrollado para el ciclo **ASIR (Administración de Sistemas Informáticos y Redes)**. 

**Nota:** Este es un proyecto educativo que simula la funcionalidad del sitio web Primor con fines de aprendizaje únicamente.

---

<div align="center">

**⭐ Si este proyecto te ha sido útil, no olvides darle una estrella ⭐**

Made with ❤️ for learning purposes

</div>
