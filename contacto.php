<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilo2.css">
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <!-- sitilo de iconos -->
        <style>

            nav{
                width: 55px;
                height: 150px;
                position: fixed;
            }
            nav a{
                width: 100%;
                height: 50px;
                color: #fff;
                background: #333;
                float: left;
                font-size: 50px;
                text-align: center;
                line-height: 50px;
                border: 2px solid #000;
            }
            nav a:hover{
                background: #fff;
                color: #000;
            }
        </style>
</head>
<body>
<nav>
        <a href="index.php"><i class="fas fa-home"></i></a>
       
    </nav>
    <form action="">
    <h2>CONTACTO</h2>
    <input type="text" nombre="Nombre" placeholder="Nombre">
    <input type="text" nombre="Correo" placeholder="Correo">
    <input type="text" nombre="Telefono" placeholder="Telefono">
    <textarea name="Mensaje"placeholder="Escriban aqui el mensaje"></textarea>
    <input type="button" value="Enviar" id="boton">
    </form>

</body>
</html>