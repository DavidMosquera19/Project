<?php
include("conexion.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <link rel="stylesheet" href="css/estilos1.css">
</head>
<body>
    <form action="" method="post" class="formulario">
        <h1>Login</h1>
        <div class="contenedor">
            
             <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
             <input type="text" placeholder="Correo Electronico">
         </div>

         <div class="input-contenedor" >
                <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña">
        </div>
            <input type="submit" value="Login" class="buttom" name="l   o1">
            <p>Al registarte, aceptas nuestras condicionde de uso y política de privacidad</p>
            <p>¿No tienes cuenta? <a class="link" href="registro.php">Registrate</a></p>
        </div>
    </form>
    </body>
</html>