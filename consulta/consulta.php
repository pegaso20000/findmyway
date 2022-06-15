<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

    


    

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Consulta</title>
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
                            <h3>Ingrese su consulta</h3>
                                <form action="insertar.php" method="POST">

                               

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    
                                    <input type="text" class="form-control mb-3" name="sector" placeholder="sector" required>
                                    <input type="text" class="form-control mb-3" name="pregunta" placeholder="Pregunta" required>
                                    <input type="text" class="form-control mb-3" name="respuesta" placeholder="respuesta">
                                    
                                                                        
                                    <input type="submit" class="btn btn-primary" name="enviar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        
                                        <th>Sector</th>
                                        <th>Pregunta</th>
                                        <th>Respuesta</th>
                                        <th></th>
                                        <th></th>
                                        
                                        <th><a href="mostrar_consulta.php" class="btn btn-info">Volver</a></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="SELECT *  FROM consultas";
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                
                                                <th><?php  echo $row['sector']?></th>
                                                <th><?php  echo $row['pregunta']?></th>
                                                <th><?php  echo $row['respuesta']?></th>
                                                
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