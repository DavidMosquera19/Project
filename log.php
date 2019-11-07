<?php
include("conexion.php");
if($_POST){
    
    $usuario = $_POST['email'];
    $contrasena = $_POST['pass'];  
    
    $con=conectar();
    $sql="INSERT INTO registro(correo,contrasena)
    VALUE ('$usuario', '$contrasena')";
    $result=mysqli_query($con,$sql);
    
        header("Location:index.php");
        }
        ?>
