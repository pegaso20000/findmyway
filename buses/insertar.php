<?php

include("../db/conexion_crud.php");
$con=conectar();

if(isset($_POST['enviar'])){ 
$patente=$_POST['patente'];
$nombre_chofer=$_POST['nombre_chofer'];
$apellido_chofer=$_POST['apellido_chofer'];
$rut=$_POST['rut'];
$flota=$_POST['flota'];



$sql="INSERT INTO buses (patente,nombre_chofer,apellido_chofer,rut,flota) VALUES('$patente','$nombre_chofer','$apellido_chofer','$rut','$flota')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: buses.php");
    
}else {
}
}
?>