<?php 
    include("../db/conexion_crud.php");
    $con=conectar();
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cliente nuevo </title>
        <meta charset="UTF-8">
        <link rel="icon" href="../imagenes/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h3>Ingrese datos del cliente nuevo</h3>
                                <form action="insertar.php" method="POST">

                                
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del cliente" required>
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido del cliente" required>
                                    <input type="text" class="form-control mb-3" name="rut" placeholder="rut" required>
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" required>
                                    <input type="text" class="form-control mb-3" name="clave" placeholder="Password" required>
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" required>
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo Electronico" required>
                                    
                                                                      
                                    <input type="submit" class="btn btn-primary" name="enviar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Rut</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th><a href="../login_nosotros.php" class="btn btn-info">Cerra session</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php

                                            $sql="SELECT *  FROM admin";
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['rut']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['clave']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>