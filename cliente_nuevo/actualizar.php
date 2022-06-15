<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM admin WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>actualizar cliente</title>
        <meta charset="UTF-8">
        <link rel="icon" href="../imagenes/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del cliente" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido del cliente" value="<?php echo $row['apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="rut" placeholder="rut" value="<?php echo $row['rut']  ?>">
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="clave" placeholder="password" value="<?php echo $row['clave']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Correo" value="<?php echo $row['email']  ?>">
                                
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>