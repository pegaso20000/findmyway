<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagenes/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

 
    
</head>
<body>

    <img src="imagenes/icon.png"width="60" height="60px">

        <div class="Titulo_find">
          <h1> Find My Way</h1>
        </div>

        <center> 
      
       
       <form class="form-login" action="db/loguear_admin.php" method="POST">
       <h5>Login Cliente</h5>
        <input class="controls" type="text" name="usuario" placeholder="usuario">
         <br>
         <input class="controls" type="password" name="clave" placeholder="contraseña">
         <br><br>
         <button class="buttons" type="submit" > ENTRAR</button>
         <br>
         <a href="index.php"><img src="imagenes/volver.PNG" width="100%" height="16%"></a>
        </form>
        </center>
        
</body>
</html>
