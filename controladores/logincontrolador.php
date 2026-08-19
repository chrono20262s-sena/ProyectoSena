<?php
/**
 * logincontrolador.php
 * -----------------------------------------------------------
 * Recibe correo y contraseña desde vistas/login.php,
 * valida las credenciales usando el Modelo (Usuario)
 * y crea la sesión si son correctas.
 * -----------------------------------------------------------
 */

session_start();
require_once "../modelos/Usuario.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $correo     = trim($_POST["correo"]);
    $contrasena = $_POST["contrasena"];

    if (empty($correo) || empty($contrasena)) {
        $_SESSION["mensaje"] = "Debes ingresar correo y contraseña.";
        header("Location: ../vistas/login.php");
        exit;
    }

    $usuario = new Usuario();
    $usuarioValido = $usuario->validarLogin($correo, $contrasena);

    if ($usuarioValido) {
        // Guardamos los datos del usuario en la sesión
        $_SESSION["usuario_id"]     = $usuarioValido["id"];
        $_SESSION["usuario_nombre"] = $usuarioValido["nombre"];
        $_SESSION["usuario_rol"]    = $usuarioValido["rol"];

        header("Location: ../vistas/dashboard.php");
        exit;
    } else {
        $_SESSION["mensaje"] = "Correo o contraseña incorrectos.";
        header("Location: ../vistas/dashboard.php");
        exit;
    }

} else {
    header("Location: ../vistas/login.php");
    exit;
}
?>