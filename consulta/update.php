<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sector=$_POST['sector'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];


$sql="UPDATE consultas SET  nombre='$nombre',sector='$sector',pregunta='$pregunta',respuesta='$respuesta' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mostrar_consulta.php");
    }
?>