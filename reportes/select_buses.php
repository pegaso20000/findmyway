<?php


require "conexion.php";

$sql = "SELECT id, flota FROM buscar_flota";
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

    <h2>Genera reporte de buses</h2>

    <form action="reporte_buses.php" method="post" autocomplete="off">

        Seleciona una Flota
         <select id="grado" name="grado">
            <option value="">Selecciona una opcion</option>
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <option value="<?php echo $fila['id']; ?>"><?php echo $fila['flota']; ?></option>
            <?php } ?>
        </select>

        <br />

        <button type="submit">Generar reporte</button>
        <br>
        <br>
        <a href="../buses/buses.php">Volver</a>
    </form>

</body>

</html>