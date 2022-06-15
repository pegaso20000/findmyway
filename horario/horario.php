<?php 
    include("../db/conexion_crud.php");
    $con=conectar();

    $where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE flota LIKE '%".$valor."%' or origen LIKE '%".$valor."%'";
		}
	}

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Horario </title>
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
					<b>Buscar: </b><input type="text" id="campo" name="campo" placeholder="flota o origen" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
                    
				
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                
                                    <input type="text" class="form-control mb-3" name="horario" placeholder="Hora Estimada" required>


                                    <select name="flota" class="form-control mb-3" required>
                                    <option label="selecione una flota" value=""></option>
                                    <option label="las galaxia" value="las galaxia"></option>
                                    <option label="mi universo" value="mi universo"></option>
                                    <option label="via futuro" value="via futuro"></option>
                                    
                                </select>

                                    
                                    <select name="origen" class="form-control mb-3" required>
                                    <option label="selecione el origen" value=""></option>
                                    <option label="Perales" value="perales"></option>
                                    <option label="Salinas" value="salinas"></option>
                                    <option label="San Marcos" value="san marcos"></option>
                                    <option label="Cruz del Sur" value="cruz del sur"></option>
                                    
                                </select>
                                
                                    <input type="text" class="form-control mb-3" name="destino" placeholder="Destino" required>                                    
                                    <input type="submit" class="btn btn-primary" name="enviar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Hora Estimada</th>
                                        <th>Nombre de la flota</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th></th>
                                        <th><a href="../reportes/select_horario.php" class="btn btn-danger">Reporte</a></th>
                                        <th><a href="../inicio_admin.php" class="btn btn-info">Volver</a></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="SELECT *  FROM horario $where";
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['horario']?></th>
                                                <th><?php  echo $row['flota']?></th>
                                                <th><?php  echo $row['origen']?></th>
                                                <th><?php  echo $row['destino']?></th>
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