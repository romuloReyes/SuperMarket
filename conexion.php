<?php

    function conectar(){
        $user="root";
        $host="localhost";
        $pass="";
        $bd="supermarket";

        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
        
        return $con;
    }

?>