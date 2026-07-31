<?php 
// esto nos ayuda a comprobar la sesion en cada una de las vistas
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit;
}
 ?>