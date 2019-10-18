<?php
include("conexion.php");
if ($_POST){

    $usuario = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $usuario = $_POST['direccion'];
    $producto = $_POST['telefono'];
    $usuario = $_POST['producto'];
    
   

    $con=conectar();
    $sql="INSERT INTO produc(nombre,usuario,direccion,telefono)
        VALUE ('$producto', '$usuario', $contra)";
    $result=mysqli_query($con,$sql);

    header("Location:index.php");
    }
    ?>