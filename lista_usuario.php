<?php 
    include("db/conexion_crud.php");
    $con=conectar();

    $where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%".$valor."%' or apellido LIKE '%".$valor."%' or sector LIKE '%".$valor."%'";
		}
	}

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Usuarios </title>
        <meta charset="UTF-8">
        <link rel="icon" href="imagenes/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Buscar: </b><input type="text" id="campo" name="campo" placeholder="nombre, apellido o sector" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>


    <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Sector</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th><a href="reportes/select_usuario.php" class="btn btn-danger">Reporte</a></th>
                                        <th><a href="inicio_admin.php" class="btn btn-info">Volver</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="SELECT *  FROM usuario $where";
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['password']?></th>
                                                <th><?php  echo $row['sector']?></th>
                                                <th><?php  echo $row['email']?></th>                                       
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