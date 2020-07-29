<?php 

include("./utils/config.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $config["app_root_url"] . "css/estilos.css" ?>">
    </head>

    <body>  
        <h1>Champi&ntilde;on League</h1>

        <?php 
            if(isset($error)){
                echo "<p>$error</p>";
            }
        ?>

        <p>                                                                                                                                                                                                            
            <div class="loginbox">
                <img src="assets/avatar.png" class="avatar">
                <h1 class="titulo">Ingresar</h1>
                <!--Redirección a archivo php-->
                <form action="controllers/loginController.php" method="POST">
                        <!--Username-->
                        <p>Usuario</p>
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                        
                        <!-- Password-->
                        <p>Password</p>
                        <input type="password" id="password" name="password" placeholder="Ingresar password" required>
                        <!--Submit button-->
                        <input type="submit" onclick="validarLogin()" name="" value="Login">
                        <!--Checkbox recuerdame-->
                        <p><label></label><input type="checkbox" class="flag" id="cbox1" value="remind_me"> Recordarme</label><br>
                        <!--Link para restrablecer contraseña-->
                        <p><a href="forgot.html">¿Olvidaste tu contrase&ntilde;a?</a>
                        <!--Link para registrarse-->
                        <p><a href="register.html">Registrese</a>                        
                </form>
            </div>
        <p>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="<?php echo "./scripts/validarLogin.js" ?>"></script>
    </body>    
</html>