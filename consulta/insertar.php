<?php
include("../db/conexion_crud.php");
$con=conectar();

if(isset($_POST['enviar'])){
$nombre=$_POST['nombre'];

$sector=$_POST['sector'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];


$sql="INSERT INTO consultas (nombre,sector,pregunta,respuesta) VALUES('$nombre','$sector','$pregunta','$respuesta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: consulta.php");
    
}else {
}
}
?>