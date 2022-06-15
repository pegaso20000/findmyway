<?php


require "conexion.php";

$sql = "SELECT id, origen FROM buscar_horario";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imagenes/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>

<body>

    <h2>Generar reporte de horario</h2>

    <form action="reporte_horario.php" method="post" autocomplete="off">

        Seleciona un origen
        <br>
        
         <select id="grado" name="grado">
            <option value="">Selecciona una opcion</option>
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <option value="<?php echo $fila['id']; ?>"><?php echo $fila['origen']; ?></option>
            <?php } ?>
        </select>

        <br />
        <br>

        <button type="submit">Generar reporte</button>
        <br>
        <br>
        <a href="../horario/horario.php">Volver</a>
    </form>

</body>

</html>