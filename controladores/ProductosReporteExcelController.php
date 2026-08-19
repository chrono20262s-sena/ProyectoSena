<?php 
include_once("../modelos/mdb.php");
include("../modelos/mconexion.php");

$productosExcel = new Consultas();
$productosGeneral = $productosExcel->productosGeneral();

date_default_timezone_set('America/Bogota');
$fecha2 = date("Ymd_His");

$noar = "REPORTE productos inventario_" . $fecha2;

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="Reporte - ' . $noar . '.csv"');

$html = "CODIGO;FAMILIA;PRODUCTO;UNIDAD;CANTIDAD;COSTE_UNIDAD;VALOR_INVENTARIO\n";

// Validación para evitar el Warning si la variable es null o está vacía
if (is_array($productosGeneral) && !empty($productosGeneral)) {
    foreach ($productosGeneral as $vh) {
        $html .= $vh['codigo'] . ";";
        $html .= $vh['familia'] . ";";
        $html .= $vh['producto'] . ";";
        $html .= $vh['unidad'] . ";";
        $html .= $vh['cantidad'] . ";";
        $html .= $vh['coste_unidad'] . ";";
        $html .= $vh['valor_inventario'] . ";\n";
    }
}

echo mb_convert_encoding($html, 'UTF-16LE', 'UTF-8');
?>
