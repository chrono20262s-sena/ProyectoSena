<?php

require_once "Conexion.php";

class Usuario {

    private $conexion;

    public function __construct() {
        $miConexion = new Conexion();
        $this->conexion = $miConexion->conectar();
    }

    /**
     * Registra un nuevo usuario en la base de datos.
     * Devuelve true si se guardó bien, false si el correo ya existe.
     */
    public function registrar($nombre, $correo, $contrasena, $rol) {

        // 1. Verificamos que el correo no exista todavía
        if ($this->buscarPorCorreo($correo)) {
            return false; // el correo ya está registrado
        }

        // 2. Encriptamos la contraseña antes de guardarla (¡nunca en texto plano!)
        $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

        // 3. Insertamos el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, correo, contrasena, rol)
                VALUES (:nombre, :correo, :contrasena, :rol)";

        $consulta = $this->conexion->prepare($sql);
        $consulta->bindParam(":nombre", $nombre);
        $consulta->bindParam(":correo", $correo);
        $consulta->bindParam(":contrasena", $contrasenaEncriptada);
        $consulta->bindParam(":rol", $rol);

        return $consulta->execute();
    }

    /**
     * Busca un usuario por su correo. Devuelve el registro
     * completo (array asociativo) o false si no existe.
     */
    public function buscarPorCorreo($correo) {
        $sql = "SELECT * FROM usuarios WHERE correo = :correo";
        $consulta = $this->conexion->prepare($sql);
        $consulta->bindParam(":correo", $correo);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Valida el login: busca el usuario y compara la contraseña.
     * Devuelve el usuario si es correcto, o false si no.
     */
    public function validarLogin($correo, $contrasena) {
        $usuario = $this->buscarPorCorreo($correo);

        if ($usuario && password_verify($contrasena, $usuario["contrasena"])) {
            return $usuario;
        }

        return false;
    }
}
?>