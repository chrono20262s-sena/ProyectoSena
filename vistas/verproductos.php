<?php
require ('../modelos/exigirsesion.php');
require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");
require_once("../controladores/cargarControllers.php");
?>
<?php   include'layout/heade.php';
        include'layout/sidebar.php';
        ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../publico/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body >

<div class="content container py-5">

    <div class="encabezado mb-5">

        <h1 class="titulo">
            Inventory List
        </h1>
        <a href="cargaMasiva.php" class="btn btn-success btn-lg">

            <i class="bi bi-plus-circle"></i>

            carga masiva

        </a>

        <a href="insertProduct.php" class="btn btn-success btn-lg">

            <i class="bi bi-plus-circle"></i>

            Nuevo Producto

        </a>

    </div>

    <div class="card shadow-lg border-0">

        <div class="card-body p-4">

            <form method="POST">

                <div class="row mb-4">

                    <div class="col-md-10">

                        <input
                            type="text"
                            class="form-control buscador"
                            name="buscar"
                            placeholder="Buscar por código, producto o familia...">

                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-primary w-100">

                            <i class="bi bi-search"></i>

                            Buscar

                        </button>

                    </div>

                </div>

            </form>

            <?php

            if(isset($_POST['buscar'])){

                buscar($_POST['buscar']);

            }else{

                cargar();

            }

            ?>

        </div>

    </div>

</div>

<?php  include'layout/footer.php'; ?>

</body>
</html>