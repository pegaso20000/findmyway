<?php

require "conexion.php";
require "plantilla_usuario.php";

if (!empty($_POST)) {

    $grado = mysqli_escape_string($mysqli, $_POST['grado']);

    $sql = "SELECT a.id, a.nombre, a.apellido, a.usuario, a.password, g.origen, a.email FROM usuario AS a INNER JOIN buscar_horario AS g ON a.sector=g.origen WHERE g.id = $grado";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 10);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(60, 5, "Nombre", 1, 0, "C");
    $pdf->Cell(35, 5, "Usuario", 1, 0, "C");
    $pdf->Cell(30, 5, "Sector", 1, 0, "C");
    $pdf->Cell(60, 5, "Email", 1, 1, "C");

    $pdf->SetFont("Arial", "", 10);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 9, $fila['id'], 1, 0, "C");
        $pdf->Cell(30, 9, utf8_decode($fila['nombre']), 1, 0, "C");
        $pdf->Cell(30, 9, $fila['apellido'], 1, 0, "C");
        $pdf->Cell(35, 9, utf8_decode($fila['usuario']), 1, 0, "C");
        $pdf->Cell(30, 9, $fila['origen'], 1, 0, "C");
        $pdf->Cell(60, 9, $fila['email'], 1, 1, "C");
    }

    $pdf->Output();
}
