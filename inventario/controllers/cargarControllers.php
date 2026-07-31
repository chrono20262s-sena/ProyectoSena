<?php

function cargar(){

    $consultas = new Consultas();

    $filas = $consultas->cargarProductos();

    if(!$filas){

        echo "<div class='alert alert-warning text-center'>
                No hay productos registrados.
              </div>";

        return;

    }

    echo "

    <div class='table-responsive'>

        <table class='table table-hover align-middle text-center tabla-productos'>

            <thead>

                <tr>

                    <th>Código</th>

                    <th>Familia</th>

                    <th>Producto</th>

                    <th>Unidad</th>

                    <th>Coste</th>

                    <th>Valor Inventario</th>

                    <th colspan='2'>Acciones</th>

                </tr>

            </thead>

            <tbody>

    ";

    foreach($filas as $fila){

        echo "

        <tr>

            <td>".$fila['codigo']."</td>

            <td>".$fila['familia']."</td>

            <td>".$fila['producto']."</td>

            <td>".$fila['unidad']."</td>

            <td>$ ".number_format($fila['coste_unidad'],0,",",".")."</td>

            <td>$ ".number_format($fila['valor_inventario'],0,",",".")."</td>

            <td>

                <a
                    href='modificar.php?id=".$fila['id']."'
                    class='btn btn-warning btn-sm'>

                    ✏ Editar

                </a>

            </td>

            <td>

                <a
                    href='../controllers/DeleteProductController.php?id=".$fila['id']."'
                    class='btn btn-danger btn-sm'
                    onclick='return confirm(\"¿Desea eliminar este producto?\")'>

                    🗑 Eliminar

                </a>

            </td>

        </tr>

        ";

    }

    echo "

        </tbody>

        </table>

    </div>

    ";

}

function buscar($dato){

    $consultas = new Consultas();

    $filas = $consultas->buscarProducto($dato);

    if(!$filas){

        echo "<div class='alert alert-danger text-center'>
                No se encontraron resultados.
              </div>";

        return;

    }

    echo "

    <div class='table-responsive'>

        <table class='table table-hover align-middle text-center tabla-productos'>

            <thead>

                <tr>

                    <th>Código</th>

                    <th>Familia</th>

                    <th>Producto</th>

                    <th>Unidad</th>

                    <th>Coste</th>

                    <th>Valor Inventario</th>

                    <th colspan='2'>Acciones</th>

                </tr>

            </thead>

            <tbody>

    ";

    foreach($filas as $fila){

        echo "

        <tr>

            <td>".$fila['codigo']."</td>

            <td>".$fila['familia']."</td>

            <td>".$fila['producto']."</td>

            <td>".$fila['unidad']."</td>

            <td>$ ".number_format($fila['coste_unidad'],0,",",".")."</td>

            <td>$ ".number_format($fila['valor_inventario'],0,",",".")."</td>

            <td>

                <a
                    href='modificar.php?id=".$fila['id']."'
                    class='btn btn-warning btn-sm'>

                    ✏ Editar

                </a>

            </td>

            <td>

                <a
                    href='../controllers/DeleteProductController.php?id=".$fila['id']."'
                    class='btn btn-danger btn-sm'
                    onclick='return confirm(\"¿Desea eliminar este producto?\")'>

                    🗑 Eliminar

                </a>

            </td>

        </tr>

        ";

    }

    echo "

        </tbody>

        </table>

    </div>

    ";

}

?>