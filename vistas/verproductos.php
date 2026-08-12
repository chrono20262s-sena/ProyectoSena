<?php
require ('../modelos/exigirsesion.php');
require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");
require_once("../controladores/cargarControllers.php");
?>
<?php 
    include'layout/heade.php';
    include'layout/sidebar.php';
        ?>


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