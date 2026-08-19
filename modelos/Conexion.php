<?php
/**
 * Conexion.php
 * -----------------------------------------------------------
 * Esta clase se encarga UNICAMENTE de abrir la conexión
 * con la base de datos usando PDO.
 * -----------------------------------------------------------
 */

class Conexion {

    // Datos de conexión (ajústalos si tu XAMPP los tiene distintos)
    private $host = "localhost";
    private $baseDatos = "chronoweb";
    private $usuario = "root";
    private $contrasena = "";

    public function conectar() {
        try {
            $conexion = new PDO(
                "mysql:host={$this->host};dbname={$this->baseDatos};charset=utf8mb4",
                $this->usuario,
                $this->contrasena
            );
            // Para que PDO nos avise con excepciones si algo falla
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;

        } catch (PDOException $error) {
            die("Error al conectar con la base de datos: " . $error->getMessage());
        }
    }
}
?>