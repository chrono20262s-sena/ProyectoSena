<?php 
    include("layout/heade.php")
 ?>
</head>
<body>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="titulo">

            extracion archivos .xls .xlsx

        </h1>

    </div>

    <div class="card shadow-lg border-0">

        <div class="card-body p-5">
             <form action="../controladores/ProductosReporteExcelController.php" method="POST" enctype="multipart/form-data">
           

            <button class="btn btn-success">descargar</button>
        </form>
            

        </div>

    </div>

</div>

</body>

</html>