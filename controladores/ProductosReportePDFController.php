<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Limpiar cualquier buffer de salida previo que pueda corromper el PDF
if (ob_get_length()) {
    ob_end_clean();
}

include_once("../modelos/mdb.php");
include("../modelos/mconexion.php");

require __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// 1. Instanciar consulta
$reportePdf = new Consultas();

// Revisa si en tu clase el método es productosGeneral() o ProductosGeneral()
if (method_exists($reportePdf, 'productosGeneral')) {
    $productosGeneral = $reportePdf->productosGeneral();
} elseif (method_exists($reportePdf, 'ProductosGeneral')) {
    $productosGeneral = $reportePdf->ProductosGeneral();
} else {
    die("Error: El método de consulta no existe en la clase Consultas.");
}

date_default_timezone_set('America/Bogota');
$fecha2 = date("Ymd_His");
$noar = "REPORTE PRODUCTOS " . $fecha2;

// 2. Configurar opciones de Dompdf para evitar bloqueos
$options = new Options();
$options->set('isRemoteEnabled', true);
$options->set('isHtml5ParserEnabled', true);

$dompdf = new Dompdf($options);

// 3. Armar HTML (Limpio y compatible con Dompdf)
$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>' . htmlspecialchars($noar) . '</title>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
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
            color: #ffffff;
            padding: 6px;
            border: 1px solid #000000;
            text-align: center;
        }

        td {
            padding: 5px;
            border: 1px solid #000000;
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

// 4. Recorrer datos
if (is_array($productosGeneral) && !empty($productosGeneral)) {
    foreach ($productosGeneral as $producto) {
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

// 5. Cargar HTML y Renderizar
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

// 6. Limpieza final de buffer e impresión del Stream
if (ob_get_length()) {
    ob_end_clean();
}

$dompdf->stream(
    "Reporte - " . $noar . ".pdf",
    ["Attachment" => true]
);
exit;