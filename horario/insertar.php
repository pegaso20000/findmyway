<?php
include("../db/conexion_crud.php");
$con=conectar();

if(isset($_POST['enviar'])){ 

$horario=$_POST['horario'];
$flota=$_POST['flota'];
$origen=$_POST['origen'];
$destino=$_POST['destino'];



$sql="INSERT INTO horario (horario,flota,origen,destino) VALUES('$horario','$flota','$origen','$destino')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: horario.php");
    
}else {
}
}
?>