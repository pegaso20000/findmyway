<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];
$mensaje=$_POST['mensaje'];


$sql="UPDATE quejas SET  nombre='$nombre',correo='$correo',fecha='$fecha',mensaje='$mensaje' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: quejas.php");
    }
?>