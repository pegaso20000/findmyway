<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_POST['id'];
$horario=$_POST['horario'];
$flota=$_POST['flota'];
$origen=$_POST['origen'];
$destino=$_POST['destino'];


$sql="UPDATE horario SET  horario='$horario',flota='$flota',origen='$origen',destino='$destino' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: horario.php");
    }
?>