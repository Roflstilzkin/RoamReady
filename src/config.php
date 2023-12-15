<?php
    $connString = "mysql:host=localhost; dbname=roamready";
    $user="csusm";
    $pass="csusm";

    $pdo=new pdo($connString,$user,$pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//useful during initial development and debugging
?>
