<?php

include("../db/conexion_crud.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="UPDATE admin SET  nombre='$nombre',apellido='$apellido',rut='$rut',usuario='$usuario',clave='$clave',telefono='$telefono',email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    }
?>