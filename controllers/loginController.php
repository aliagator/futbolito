<?php

include("../utils/config.php");
include("../models/dbqueries.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];    

    $dbqueries = new DbQueries($config);
    $loginResult = $dbqueries->validarLogin($usuario, $password);

    if(isset($loginResult->correo)){
        include "../home.php";
    } else {
        $error = "usuario y/o password incorrectos!";
        include "../login.php";
    }
}

?>