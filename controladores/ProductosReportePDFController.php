<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("../modelos/mdb.php");
include("../modelos/mconexion.php");

require __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;

// Consulta de datos de productos
$reportePdf = new Consultas();
$ProductosGeneral = $reportePdf->ProductosGeneral();

date_default_timezone_set('America/Bogota');
$fecha2 = date("Ymd_His");

$noar = "REPORTE PRODUCTOS " . $fecha2;

$dompdf = new Dompdf();

// Construcción de la plantilla HTML
$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>' . htmlspecialchars($noar) . '</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
            color: #333333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #333333;
            color: white;
            padding: 6px;
            border: 1px solid #000;
            text-align: center;
        }

        td {
            padding: 5px;
            border: 1px solid #000;
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }
    </style>
</head>

<body>

<h1>' . htmlspecialchars($noar) . '</h1>

<table>
    <thead>
        <tr>
            <th>CÓDIGO</th>
            <th>FAMILIA</th>
            <th>PRODUCTO</th>
            <th>UNIDAD</th>
            <th>CANTIDAD</th>
            <th>COSTE UNIDAD</th>
            <th>VALOR INVENTARIO</th>
        </tr>
    </thead>
    <tbody>
';

// Recorremos los resultados de la consulta de productos
if (is_array($ProductosGeneral) && !empty($ProductosGeneral)) {
    foreach ($ProductosGeneral as $producto) {
        // Formateo de valores numéricos
        $costeUnidad = isset($producto['coste_unidad']) ? '$ ' . number_format((float)$producto['coste_unidad'], 2, ',', '.') : '$ 0,00';
        $valorInventario = isset($producto['valor_inventario']) ? '$ ' . number_format((float)$producto['valor_inventario'], 2, ',', '.') : '$ 0,00';
        $cantidad = isset($producto['cantidad']) ? number_format((float)$producto['cantidad'], 0, ',', '.') : '0';

        $html .= '
            <tr>
                <td>' . htmlspecialchars($producto['codigo'] ?? '') . '</td>
                <td class="text-left">' . htmlspecialchars($producto['familia'] ?? '') . '</td>
                <td class="text-left">' . htmlspecialchars($producto['producto'] ?? '') . '</td>
                <td>' . htmlspecialchars($producto['unidad'] ?? '') . '</td>
                <td class="text-right">' . $cantidad . '</td>
                <td class="text-right">' . $costeUnidad . '</td>
                <td class="text-right">' . $valorInventario . '</td>
            </tr>
        ';
    }
} else {
    $html .= '
        <tr>
            <td colspan="7">No se encontraron productos registrados en el inventario.</td>
        </tr>
    ';
}

$html .= '
    </tbody>
</table>
</body>
</html>
';

// Carga y renderizado del PDF con Dompdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

// Descarga directa del archivo
$dompdf->stream(
    "Reporte - " . $noar . ".pdf",
    ["Attachment" => true]
);
exit;
?>