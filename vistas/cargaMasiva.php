<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../publico/css/style.css">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="titulo">

            carga masiva de Productos

        </h1>

    </div>

    <div class="card shadow-lg border-0">

        <div class="card-body p-5">
             <form action="../controladores/ProductosMasivaController.php" method="POST" enctype="multipart/form-data">
            <p>Subir archivo plano </p>
            <input type="file" class="btn  buscador" aria-describedby="" name="archivoPlano" accept=".xls,.xlsx">

            <button class="btn btn-success">cargar</button>
        </form>
            

        </div>

    </div>

</div>

</body>

</html>