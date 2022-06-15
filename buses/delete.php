<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM buses  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: buses.php");
    }
?>