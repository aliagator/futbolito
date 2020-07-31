<?php 
    include("./utils/config.php");    
    $rootPath = $config["app_root_url"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo "$rootPath/css/estilos.css"?>">
    
</head>
<body>
    <?php 
        if(isset($info)){
            echo "<p>$info</p>";
        }
    ?>
    <div class="registerbox">
        <!--Formulario de Registro-->
        <img src="<?php echo "$rootPath/assets/mushroom.jpg"?>" alt="registro" style="width:242x;height:141px;">
        <H1 class="cabeza">¡CREE UNA CUENTA!</H1>
        <p>
        <form action="./controllers/registerController.php" method="POST">
            <!--Datos del usuario nuevo-->
            <ul>
                <li>
                    <label for="name">Nombres:</label>
                    <input type="text" id="names" name="names" required>
                </li>
                </br>
                <li>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="lastnames" required>
                </li>
                </br>
                <li>
                    <label for="mail">Correo electrónico:</label>
                    <input type="email" id="mail" name="email" required>
                </li>
                </br>
                <li>
                    <label for="password">Contraseña:</label>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                </li>
                </br>
                <!--Boton para registrarse-->
                <input type="submit" name="">Registrar</input>
            </ul>
        </form>
        <p>
        <p><a href="forgot.html">¿Olvidaste tu contraseña?</a>
        <p><a href="login.html">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo "$rootPath/scripts/validarRegister.js"?>"></script>
</body>
</html>