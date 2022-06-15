<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

    $where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE sector LIKE '%".$valor."%' or nombre LIKE '%".$valor."%'";
		}
	}

    
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
            
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Buscar: </b><input type="text" id="campo" name="campo" placeholder="nombre o sector"/>
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>

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
                                        <th><a href="../inicio_admin.php" class="btn btn-info">Volver</a></th>
                                        <th><a href="consulta.php" class="btn btn-info">Agregar  </a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="SELECT *  FROM consultas $where";
                                             $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                
                                                <th><?php  echo $row['sector']?></th>
                                                <th><?php  echo $row['pregunta']?></th>
                                                <th><?php  echo $row['respuesta']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Responder</a></th>
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