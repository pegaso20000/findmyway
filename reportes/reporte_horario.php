<?php

require "conexion.php";
require "plantilla_horario.php";

if (!empty($_POST)) {

    $grado = mysqli_escape_string($mysqli, $_POST['grado']);

    $sql = "SELECT a.id, a.horario, a.flota, g.origen, a.destino FROM horario AS a INNER JOIN buscar_horario AS g ON a.origen=g.origen WHERE g.id = $grado";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 10);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(40, 5, "horario", 1, 0, "C");
    $pdf->Cell(40, 5, "flota", 1, 0, "C");
    $pdf->Cell(40, 5, "origen", 1, 0, "C");
    $pdf->Cell(40, 5, "destino", 1, 1, "C");

    $pdf->SetFont("Arial", "", 10);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 9, $fila['id'], 1, 0, "C");
        $pdf->Cell(40, 9, utf8_decode($fila['horario']), 1, 0, "C");
        $pdf->Cell(40, 9, $fila['flota'], 1, 0, "C");
        $pdf->Cell(40, 9, utf8_decode($fila['origen']), 1, 0, "C");
        $pdf->Cell(40, 9, $fila['destino'], 1, 1, "C");
        
    }

    $pdf->Output();
}
