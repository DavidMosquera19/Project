<?php include("conexion.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $con=conectar();
        $sql="SELECT u.nombre, u.usuario, u.contrasena, u.id_usuario
        FROM USER u";
        $result=mysqli_query($con,$sql);

        while($file=mysqli_fetch_array($result)){
            echo "su usuario es".$file['usuario']."su contraseña es".$file['contrasena']."<br>";
            
        }      
    ?>

</body>
</html>