<?php

function seleccionar(){

    if(isset($_GET['id'])){

        $consultas = new Consultas();
        $id = $_GET['id'];

        $fila = $consultas->cargarProducto($id);

        if($fila){

            echo '

            <div class="container mt-5">

                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-7">

                        <div class="card shadow">

                            <div class="card-body">

                                <h3 class="text-center mb-4">Modificar Producto</h3>

                                <form action="../controladores/modificarProductControllers.php" method="POST">

                                    <table class="table table-borderless">

                                        <tr>
                                            <td>Código:</td>
                                            <td><input type="text" name="codigo" class="form-control" value="'.$fila['codigo'].'" required></td>
                                        </tr>

                                        <tr>
                                            <td>Familia:</td>
                                            <td><input type="text" name="familia" class="form-control" value="'.$fila['familia'].'" required></td>
                                        </tr>

                                        <tr>
                                            <td>Producto:</td>
                                            <td><input type="text" name="producto" class="form-control" value="'.$fila['producto'].'" required></td>
                                        </tr>

                                        <tr>
                                            <td>Unidad:</td>
                                            <td><input type="text" name="unidad" class="form-control" value="'.$fila['unidad'].'" required></td>
                                        </tr>

                                        <tr>
                                    <td>Cantidad:</td>
                                    <td>
                                        <input
                                            type="number"
                                            name="cantidad"
                                            class="form-control"
                                            value="'.$fila['cantidad'].'"
                                            required>
                                    </td>
                                </tr>

                                        <tr>
                                            <td>Coste Unidad:</td>
                                            <td><input type="number" step="0.01" name="coste_unidad" class="form-control" value="'.$fila['coste_unidad'].'" required></td>
                                        </tr>

                                        <tr>
                                            <td>Valor Inventario:</td>
                                            <td><input type="number" step="0.01" name="valor_inventario" class="form-control" value="'.$fila['valor_inventario'].'" required></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="id" value="'.$fila['id'].'">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">
                                                    Modificar Producto
                                                </button>
                                            </td>
                                        </tr>

                                    </table>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            ';

        }else{

            echo '<div class="alert alert-danger">Producto no encontrado.</div>';

        }

    }

}

?>