<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <form action="reg.php" method="post" class="formulario">
        <h1>Registrate</h1>
        <div class="contenedor">
            <div class="input-contenedor"
            >
            <i class="fas fa-user icon"></i>
            <input type="text" name="nom" placeholder="Nombre Completo">
             </div>

             <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
             <input type="text" name="email" placeholder="Correo Electronico">
         </div>

         <div class="input-contenedor" >
                <i class="fas fa-key icon"></i>
            <input type="password" name="pass" placeholder="Contraseña">
        </div>
            <input type="submit" value="Registrar" class="buttom">
            <p>Al registarte, aceptas nuestras condicionde de uso y política de privacidad</p>
            <p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar sesion</a></p>
        </div>
    </form>
</body>
</html>