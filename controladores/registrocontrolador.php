<?php
/**
 * registrocontrolador.php
 * -----------------------------------------------------------
 * Recibe los datos del formulario de registro (vistas/registro.php),
 * los valida y le pide al Modelo (Usuario) que los guarde.
 * -----------------------------------------------------------
 */

session_start();
require_once "../modelos/Usuario.php";

// Solo procesamos si el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Recogemos los datos del formulario
    $nombre     = trim($_POST["nombre"]);
    $correo     = trim($_POST["correo"]);
    $contrasena = $_POST["contrasena"];
    $rol        = $_POST["rol"]; // "cliente" o "administrador"

    // 2. Validación básica
    if (empty($nombre) || empty($correo) || empty($contrasena)) {
        $_SESSION["mensaje"] = "Todos los campos son obligatorios.";
        header("Location: ../vistas/registro.php");
        exit;
    }

    // 3. Guardamos el usuario a través del Modelo
    $usuario = new Usuario();
    $registrado = $usuario->registrar($nombre, $correo, $contrasena, $rol);

    // 4. Respondemos según el resultado
    if ($registrado) {
        $_SESSION["mensaje"] = "Registro exitoso. Ahora puedes iniciar sesión.";
        header("Location: ../vistas/login.php");
        exit;
    } else {
        $_SESSION["mensaje"] = "Ese correo ya está registrado.";
        header("Location: ../vistas/registro.php");
        exit;
    }

} else {
    // Si alguien entra directo a este archivo sin enviar el formulario
    header("Location: ../vistas/registro.php");
    exit;
}
?>