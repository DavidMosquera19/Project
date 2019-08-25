<?php

if($_POST){
    $nombre = $_POST['nom'];
    $usuario = $_POST['email'];
    $contrasena = $_POST['pass'];   

    echo "su nombre es $nombre su usuario es $usuario su contraseña es $contrasena";
}else {
    echo "Error en el post";
}

?>