<?php 
    include("layout/heade.php")
 ?>
</head>
<body>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="titulo">

            carga masiva archivos .xls .xlsx

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