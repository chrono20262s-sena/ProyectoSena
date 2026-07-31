-- ============================================================
--  Base de datos: restaurante_db
--  Proyecto: Sistema de Facturación y Gestión para Restaurantes
-- ============================================================

CREATE DATABASE IF NOT EXISTS restaurante_db
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE restaurante_db;

-- ------------------------------------------------------------
-- Tabla: usuarios
-- Guarda tanto a los clientes como a los administradores
-- del restaurante (columna "rol").
-- ------------------------------------------------------------
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL DEFAULT 'cliente' COMMENT 'cliente o administrador',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Usuario de ejemplo (contraseña: 123456)
-- La contraseña real se genera con password_hash() desde PHP,
-- este INSERT es solo de referencia y NO debe usarse en producción.
-- INSERT INTO usuarios (nombre, correo, contrasena, rol)
-- VALUES ('Administrador', 'admin@restaurante.com', '$2y$10$ejemploHashGeneradoPorPHP', 'administrador');
