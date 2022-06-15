<?php

require "conexion.php";
require "plantilla_buses.php";

if (!empty($_POST)) {

    $grado = mysqli_escape_string($mysqli, $_POST['grado']);

    $sql = "SELECT a.id, a.patente, a.nombre_chofer, a.apellido_chofer, a.rut, g.flota FROM buses AS a INNER JOIN buscar_flota AS g ON a.flota=g.flota WHERE g.id = $grado";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 10);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(35, 5, "Patente", 1, 0, "C");
    $pdf->Cell(70, 5, "Chofer Encargado", 1, 0, "C");
    $pdf->Cell(30, 5, "Rut", 1, 0, "C");
    $pdf->Cell(40, 5, "Flota", 1, 1, "C");

    $pdf->SetFont("Arial", "", 10);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 9, $fila['id'], 1, 0, "C");
        $pdf->Cell(35, 9, utf8_decode($fila['patente']), 1, 0, "C");
        $pdf->Cell(35, 9, $fila['nombre_chofer'], 1, 0, "C");
        $pdf->Cell(35, 9, utf8_decode($fila['apellido_chofer']), 1, 0, "C");
        $pdf->Cell(30, 9, $fila['rut'], 1, 0, "C");
        $pdf->Cell(40, 9, $fila['flota'], 1, 1, "C");
    }

    $pdf->Output();
}
