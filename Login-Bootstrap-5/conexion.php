<?php
    $servidor = "fdb27.125mb.com";
    $user = "3796108_login";
    $password = "1234567890Nc";
    $database = "3796108_login";

    $conexion = mysqli_connect($servidor,$user,$password,$database);

    if($conexion){
        echo "Estas conectado \n";

    }else{
        echo"no estas conectado \n";
    }

?>