<?php
include("../db/conexion_crud.php");
$con=conectar();

if(isset($_POST['enviar'])){

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];
$mensaje=$_POST['mensaje'];



$sql="INSERT INTO quejas (nombre,correo,fecha,mensaje) VALUES('$nombre','$correo','$fecha','$mensaje')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: quejas.php");
    
}else {
}
}
?>