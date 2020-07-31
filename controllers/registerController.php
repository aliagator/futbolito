<?php

include("../utils/config.php");
include("../models/dbqueries.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["names"];
    $lastnames = $_POST["lastnames"];  
    $email = $_POST["email"];
    $password = $_POST["password"];       

    $dbqueries = new DbQueries($config);
    //registrarUsuario($names, $lastnames, $email, $password)
    $loginResult = $dbqueries->registrarUsuario($names, $lastnames, $email, $password);

    if(isset($loginResult)){
        $info = "Usuario registrado existosamente";        
    } else {
        $info = "Érror al intentar registrar al Usuario";
    }

    include "../register.php";
}

?>