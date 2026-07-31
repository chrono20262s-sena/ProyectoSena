<?php

require_once("../models/mdb.php");
require_once("../models/mconexion.php");
require_once("../controllers/seleccionarControllers.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modificar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/style.css">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="titulo">

            Modificar Producto

        </h1>

    </div>

    <?php

        seleccionar();

    ?>

</div>

</body>

</html>