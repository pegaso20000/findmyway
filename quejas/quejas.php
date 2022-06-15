<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

    $where = "";
    
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE fecha LIKE '%$valor'";
		}
	}

   

    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Reclamo </title>
        <meta charset="UTF-8">
        <link rel="icon" href="../imagenes/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b> fecha: </b><input type="date" id="campo" name="campo" />
                    
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>

				
                        
                        <div class="col-md-3">
                            <h2>Ingrese Reclamo</h2>
                                <form action="insertar.php" method="POST">

                                
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo" required>
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" required>   
                                    <input type="text" class="form-control mb-3" name="mensaje" placeholder="mensaje" required>                                  
                                    <input type="submit" class="btn btn-primary" name="enviar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Fecha</th>
                                        <th>mensaje</th>
                                        <th></th>
                                        
                                        <th><a href="../inicio_admin.php" class="btn btn-info">Volver</a></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="SELECT *  FROM quejas $where ";
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['mensaje']?></th>
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