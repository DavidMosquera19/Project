<?php

    function conectar(){
        $host="localhost";
        $user="root";
        $contra="";
        $db="project";

        $con=mysqli_connect($host,$user,$contra) or die ("error".mysqli_error());
         mysqli_select_db($con,$db);

         return $con;
    }
    
?>