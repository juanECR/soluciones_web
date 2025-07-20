<?php
require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Crear el Excel
$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()->setCreator("JAUM")->setLastModifiedBy("yo")->setTitle("yo")->setDescription("yo");
$activeWorkSheet = $spreadsheet->getActiveSheet();
$activeWorkSheet->setTitle("Hoja1");
/*  $activeWorkSheet->setCellValue('A1', 'TABLA REGISTRO PRODUCTOS');
 $activeWorkSheet->mergeCells('A1:D1'); */

/* for ($i=0; $i < 10 ; $i++) { 
    $activeWorkSheet->setCellValue("A".$i, '1');
    $activeWorkSheet->setCellValue("B".$i, 'X');
    $activeWorkSheet->setCellValue("C".$i, $i);
    $activeWorkSheet->setCellValue("D".$i, '=');
    $activeWorkSheet->setCellValue("E".$i, $i);

    for ($i=0; $i < ; $i++) { 
        realizar las demas tablas
    }
} */

 for ($i=0; $i < 10 ; $i++) { 
  $columna = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($i);
    $activeWorkSheet->setCellValue($columna.'1',$i);
}

// Descargar sin guardar en servidor
$writer = new Xlsx($spreadsheet);
$writer->save("exel.xlsx");

?>