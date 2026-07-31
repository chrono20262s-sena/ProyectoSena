<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/style.css">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="titulo">

            Registrar Producto

        </h1>

    </div>

    <div class="card shadow-lg border-0">

        <div class="card-body p-5">

            <form action="../controllers/insertProductController.php" method="POST">

                <div class="row">

                    <!-- Código -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-upc-scan"></i>

                            Código

                        </label>

                        <input
                            type="number"
                            name="codigo"
                            class="form-control"
                            placeholder="Ingrese el código"
                            required>

                    </div>

                    <!-- Familia -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-boxes"></i>

                            Familia

                        </label>

                        <select
                            name="familia"
                            class="form-select"
                            required>

                            <option value="">Seleccione...</option>

                            <option value="Lácteos">Lácteos</option>

                            <option value="Granos">Granos</option>

                            <option value="Carnes">Carnes</option>

                            <option value="Pescados">Pescados</option>

                            <option value="Carbohidratos">Carbohidratos</option>

                            <option value="Aceites">Aceites</option>

                        </select>

                    </div>

                    <!-- Producto -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-basket"></i>

                            Producto

                        </label>

                        <input
                            type="text"
                            name="producto"
                            class="form-control"
                            placeholder="Nombre del producto"
                            required>

                    </div>

                    <!-- Unidad -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-rulers"></i>

                            Unidad

                        </label>

                        <input
                            type="text"
                            name="unidad"
                            class="form-control"
                            placeholder="Kg, L, Unidad..."
                            required>

                    </div>

                    </div>

                    <!-- Unidad -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-rulers"></i>

                            cantidad

                        </label>

                        <input
                            type="text"
                            name="cantidad"
                            class="form-control"
                            placeholder="cantidad..."
                            required>

                    </div>

                    <!-- Coste -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-cash-stack"></i>

                            Coste por Unidad

                        </label>

                        <input
                            type="number"
                            name="coste_unidad"
                            class="form-control"
                            placeholder="0"
                            required>

                    </div>

                    <!-- Inventario -->

                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            <i class="bi bi-wallet2"></i>

                            Valor Inventario

                        </label>

                        <input
                            type="number"
                            name="valor_inventario"
                            class="form-control"
                            placeholder="0"
                            required>

                    </div>

                </div>

                <div class="text-center mt-4">

                    <button
                        class="btn btn-success btn-lg">

                        <i class="bi bi-floppy"></i>

                        Guardar Producto

                    </button>

                    <a
                        href="verproductos.php"
                        class="btn btn-secondary btn-lg">

                        <i class="bi bi-arrow-left"></i>

                        Volver

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>

</html>