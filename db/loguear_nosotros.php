<?php
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM cliente where usuario = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['usuario'] = $user;
  header("location: ../cliente_nuevo/inicio.php");
}else {
    
  echo '<script>';
      echo 'alert("Usuario o Contraseña incorrecto");';
      echo 'window.location.href="../login_nosotros.php";';
  echo '</script>';
}


?>