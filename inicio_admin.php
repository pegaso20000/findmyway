
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio admin</title>
	<link rel="icon" href="imagenes/icon.png">
	<link rel="stylesheet" href="estilo_inicio_admin.css">
</head>
<body>

    <img src="imagenes/icon.png"width="80px" height="80px">
    
    <div class="Titulo_find">
      <h1> Find My Way</h1>
    <br>
	

	<h1> Inicio Cliente</h1>


</div>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>


		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="buses/buses.php">Agregar buses</a>
			<a href="horario/horario.php">Horarios</a>
			<a href="quejas/quejas.php">Ver reclamos</a>
			<a href="consulta/mostrar_consulta.php">Ver consultas</a>
			<a href="lista_usuario.php">usuarios registrados</a>
			<?php


    echo "<a href='db/salir_admin.php'>Cerrar Sesion</a>";


?>


		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>