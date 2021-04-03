<?php
    include("conexion.php");

    $usuario = $_POST["user"];
    $password = $_POST["pass"];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

    $resultado = mysqli_query($conexion,$ssql);

    while($row = mysqli_fetch_array($resultado)){
        $usuar = $row["user"];
        $pass = $row["password"];
    }

    if($usuar == $usuario && $pass == $password){
        echo "haz ingresado al sistema"
    }
    else {
        echo"No eres usuario de esta plataforma"
    }

?>