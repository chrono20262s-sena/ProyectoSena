<?php
session_start();
// Tomamos el mensaje (si existe) y lo borramos para que no se repita
$mensaje = $_SESSION["mensaje"] ?? null;
unset($_SESSION["mensaje"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Sistema de Restaurante</title>
    <link rel="stylesheet" type="text/css" href="../publico/css/master.css">
</head>
<body class="pagina-formulario">
    

    <main class="contenedor-formulario">
        <div class="logo-login">
        <img src="../publico/imagenes/logo.svg" alt="">
        </div >
        <h1>Iniciar Sesión</h1>

        <?php if ($mensaje): ?>
            <p class="mensaje-alerta"><?= htmlspecialchars($mensaje) ?></p>
        <?php endif; ?>

        <form action="../controladores/logincontrolador.php" method="POST" class="formulario">

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="********" required>

            <button type="submit" class="boton boton-primario">Ingresar</button>
        </form>

        <p class="enlace-secundario">
            ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
        </p>
    </main>

</body>
</html>
