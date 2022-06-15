<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_POST['id'];
$patente=$_POST['patente'];
$nombre_chofer=$_POST['nombre_chofer'];
$apellido_chofer=$_POST['apellido_chofer'];
$rut=$_POST['rut'];
$flota=$_POST['flota'];


$sql="UPDATE buses SET  patente='$patente',nombre_chofer='$nombre_chofer',apellido_chofer='$apellido_chofer',rut='$rut',flota='$flota' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: buses.php");
    }
?>