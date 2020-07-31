<?php

include("usuarioObj.php");

class DbQueries {
    private $dbconfig;

    public function __construct($config){
        $this->dbconfig = $config;
    }

    function validarLogin($correo, $pass) {
        // Connection variables
        $servername = $this->dbconfig["db_servername"];
        $username = $this->dbconfig["db_username"];
        $password = $this->dbconfig["db_password"];
        $dbname = $this->dbconfig["db_schema"];
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
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

    function registrarUsuario($names, $lastnames, $email, $password) {
        // Connection variables
        $servername = $this->dbconfig["db_servername"];
        $username = $this->dbconfig["db_username"];
        $password = $this->dbconfig["db_password"];
        $dbname = $this->dbconfig["db_schema"];
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Create the query that will be run on the mysql server
        $query = "insert into usuario values((select max(usuario_id)+1 from usuario), '$names', '$lastnames', '$email', '$password')";
        // Run the query using the mysql conn object
        $sqlresult = $conn->query($query);        
        // Close the mysql conn
        $conn->close();
    
        return $sqlresult;
    }
}

?>