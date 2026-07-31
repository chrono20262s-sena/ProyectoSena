<?php
/**
 * salircontrolador.php
 * -----------------------------------------------------------
 * Cierra la sesión activa y regresa a la vista de login.
 * -----------------------------------------------------------
 */

session_start();
session_destroy();

header("Location: ../vistas/login.php");
exit;
?>
