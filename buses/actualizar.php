<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM buses WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>actualizar bus</title>
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

                                <input type="text" class="form-control mb-3" name="patente" placeholder="patente del bus" value="<?php echo $row['patente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_chofer" placeholder="nombre" value="<?php echo $row['nombre_chofer']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_chofer" placeholder="apellido" value="<?php echo $row['apellido_chofer']  ?>">
                                <input type="text" class="form-control mb-3" name="rut" placeholder="rut" value="<?php echo $row['rut']  ?>">
                                <select name="flota" class="form-control mb-3" >
                                    <option label="Mantener flota existente" value="<?php echo $row['flota']  ?>"></option>
                                    <option label="las galaxia" value="las galaxia"></option>
                                    <option label="via universo" value="via universo"></option>
                                    <option label="via futuro" value="via futuro"></option>
                                    
                                </select>
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
