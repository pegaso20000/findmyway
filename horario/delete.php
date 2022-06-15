<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM horario  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: horario.php");
    }
?>