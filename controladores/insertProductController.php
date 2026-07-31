<?php

require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");

if ($_POST) {

    $codigo = $_POST['codigo'];
    $familia =$_POST['familia'];
    $producto =$_POST['producto'];
    $unidad = $_POST['unidad'];
    $cantidad =$_POST['cantidad'];
    $coste_unidad =$_POST['coste_unidad'];
    $valor_inventario =$_POST['valor_inventario'];

    if(strlen ($codigo) > 0 && strlen ($familia) > 0 && strlen ($producto) > 0 &&
        strlen ($unidad)> 0  &&
        strlen ($cantidad) > 0 &&
        strlen ($coste_unidad)> 0  &&
        strlen ($valor_inventario)> 0
    ){

        $consultas = new Consultas();

        $mensaje = $consultas->saveProducto(
            $codigo,
            $familia,
            $producto,
            $unidad,
            $cantidad,
            $coste_unidad,
            $valor_inventario
        );

        echo "

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>

        <div class='container mt-5'>

            <div class='alert alert-success text-center'>

                <h4>✔ Producto registrado correctamente</h4>

            </div>

            <a href='../vistas/insertProduct.php' class='btn btn-success'>
                Registrar otro
            </a>

            <a href='../vistas/verproductos.php' class='btn btn-primary'>
                Ver Productos
            </a>

        </div>

        ";

    }else{

        echo "

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>

        <div class='container mt-5'>

            <div class='alert alert-danger text-center'>

                Debe completar todos los campos.

            </div>

            <a href='../vistas/insertProduct.php' class='btn btn-danger'>

                Regresar

            </a>

        </div>

        ";

    }

}