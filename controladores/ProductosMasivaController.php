<?php 

    include_once("../modelos/mdb.php");
    include("../modelos/mconexion.php");

require __DIR__ . '/../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

       if ($_FILES) {

        date_default_timezone_set('America/Bogota');
        $fecSis = date("Y-m-d H:i:s");

        $arcExs = isset($_FILES['archivoPlano']['name'])? $_FILES['archivoPlano']['name']: NULL;

        $arcExc = isset($_FILES['archivoPlano']['name']) ? $_FILES['archivoPlano']['name'] : NULL;

        if ($arcExc && $_FILES['archivoPlano']['error'] == UPLOAD_ERR_OK) {
            $ruta_temporal = $_FILES['archivoPlano']['tmp_name'];

            // Ahora puedes cargar el archivo directamente desde la ubicación temporal con PhpSpreadsheet
            $arcExc2 = IOFactory::load($ruta_temporal);
            $sheet = $arcExc2->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            } else {
                // Manejar el caso en que no se ha subido correctamente el archivo
                echo "Error al subir el archivo.";
            }

            for ($row = 5; $row <= $highestRow; $row++){
                $codigo = $sheet->getCell("b".$row)->getValue();
                $familia= $sheet->getCell("c".$row)->getValue();
                $producto = $sheet->getCell("d".$row)->getValue();
                $unidad = $sheet->getCell("e".$row)->getValue();
                $cantidad = $sheet->getCell("f".$row)->getValue();
                $coste_unidad = $sheet->getCell("g".$row)->getValue();
                $valor_inventario = $sheet->getCell("h".$row)->getValue();
               
                $saveMasivo = new Consultas();
                $save = $saveMasivo->saveMasivo($codigo,$familia,$producto,$unidad,$cantidad,$coste_unidad,$valor_inventario);
            }
        }//ciera el if
 ?>