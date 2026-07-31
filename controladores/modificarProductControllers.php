<?php

require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");

$msj = null;

$consultas = new Consultas();

$codigo = $_POST['codigo'];
$familia = $_POST['familia'];
$producto = $_POST['producto'];
$unidad = $_POST['unidad'];
$cantidad=$_POST['cantidad'];
$coste_unidad = $_POST['coste_unidad'];
$valor_inventario = $_POST['valor_inventario'];
$id = $_POST['id'];

if (
    strlen($codigo) > 0 &&
    strlen($familia) > 0 &&
    strlen($producto) > 0 &&
    strlen($unidad) > 0 &&
    strlen($cantidad)  > 0 &&
    strlen($coste_unidad) > 0 &&
    strlen($valor_inventario) > 0
) {

    $msj = $consultas->modificarProducto("codigo", $codigo, $id);
    $msj = $consultas->modificarProducto("familia", $familia, $id);
    $msj = $consultas->modificarProducto("producto", $producto, $id);
    $msj = $consultas->modificarProducto("unidad", $unidad, $id);
    $msj = $consultas->modificarProducto("cantidad", $cantidad, $id);
    $msj = $consultas->modificarProducto("coste_unidad", $coste_unidad, $id);
    $msj = $consultas->modificarProducto("valor_inventario", $valor_inventario, $id);

    echo $msj;
    echo "<div><a href='../vistas/verproductos.php'>Ver Productos</a></div>";

} else {

    echo "Por favor rellene todos los campos, todos son requeridos.";

}