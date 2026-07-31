<?php
session_start();
$mensaje = $_SESSION["mensaje"] ?? null;
unset($_SESSION["mensaje"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | Sistema de Restaurante</title>
    <link rel="stylesheet" href="../publico/css/master.css">
</head>
<body class="pagina-formulario">

    <main class="contenedor-formulario">
        <h1>Crear Cuenta</h1>

        <?php if ($mensaje): ?>
            <p class="mensaje-alerta"><?= htmlspecialchars($mensaje) ?></p>
        <?php endif; ?>

        <form action="../controladores/registrocontrolador.php" method="POST" class="formulario">

            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="********" required>

            <label for="rol">Tipo de cuenta</label>
            <select id="rol" name="rol" required>
                <option value="cliente">Cliente</option>
                <option value="administrador">Administrador del restaurante</option>
            </select>

            <button type="submit" class="boton boton-primario">Registrarme</button>
        </form>

        <p class="enlace-secundario">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
        </p>
    </main>

</body>
</html>
