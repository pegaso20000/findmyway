<?php

include("../db/conexion_crud.php");
$con=conectar();

if(isset($_POST['enviar'])){ 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];



$sql="INSERT INTO admin (nombre,apellido,rut,usuario,clave,telefono,email) VALUES('$nombre','$apellido','$rut','$usuario','$clave','$telefono','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inicio.php");
    
}else {
}
}
?>