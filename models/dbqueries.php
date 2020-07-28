<?php

use models\usuarioObj;

function validarLogin($correo, $pass) {
    // Connection variables
    $servername = "localhost";
    $username = "pablo";
    $password = "Pablito123$";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create the query that will be run on the mysql server
    $query = "select * from usuario where correo = '$correo' and password = '$pass'";
    // Run the query using the mysql conn object
    $result = $conn->query($query);
    $usuarioFutbolito = new Usuario();

    if($result->num_rows > 0){
        // Fetch the rows that were returned
        while($row = $result->fetch_assoc()){
            $usuarioFutbolito->usuario_id = $row["usuario_id"];
            $usuarioFutbolito->nombres = $row["nombres"];
            $usuarioFutbolito->apellidos = $row["apellidos"];
            $usuarioFutbolito->correo = $row["correo"];
            $usuarioFutbolito->password = $row["password"];
            $usuarioFutbolito->fecha_creacion = $row["fecha_creacion"];
        }
    }

    // Close the mysql conn
    $conn->close();

    return $usuarioFutbolito;
}

?>