<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd   = '';

    $coneccion = mysqli_connect($host, $user, $pass, $bd) or die ('no se Puede Conectar: '. mysqli_errno());
?>