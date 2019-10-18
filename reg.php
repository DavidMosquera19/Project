<?php
include("conexion.php");
if($_POST){
    $nombre = $_POST['nom'];
    $usuario = $_POST['email'];
    $contrasena = $_POST['pass'];  
    
    $con=conectar();
    $sql="INSERT INTO registro(nombre,correo,contrasena)
    VALUE ('$nombre', '$usuario', '$contrasena')";
    $result=mysqli_query($con,$sql);
    
        header("Location:login.php");
        }
        ?>
