<?php 
  $rootPath = $config["app_root_url"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo "$rootPath/css/estilos.css" ?>">
</head>
<body>
    <nav><ul id="navegador">
        
        <li><a href="#">Mi cuenta</a></li>
        <li><a href="#">Mi equipo</a></li>
        <li><a href="login.html">Cerrar sesión</a></li>
    </ul></nav>
    
    </br>
        <h1>Champiñón League</h1>
    </br>
    <div class="row">
      <div class="column">
        <div class="card">
          <h3>Posición</h3>
          <img class="avatarito" src="<?php echo "$rootPath/assets/ranking.png" ?>" alt="" width="50" height="50"></img>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <h3>Partidos Ganados</h3>
          <img class="avatarito" src="<?php echo "$rootPath/assets/winner.jpg" ?>" alt="" width="50" height="50"></img>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <h3>Partidos Perdidos</h3>
          <img class="avatarito" src="<?php echo "$rootPath/assets/sad.png" ?>" alt=""width="50" height="50"></img>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Partidos Empatados</h3>
          <img class="avatarito" src="<?php echo "$rootPath/assets/igual.png" ?>" alt=""width="50" height="50"></img>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Puntos</h3>
          <img class="avatarito" src="<?php echo "$rootPath/assets/soccer_ball.png" ?>" alt=""width="50" height="50"></img>
        </div>
      </div>

    </div>
    </br>
    <div class="rowdos">
      <div class="column">
          <div class="card">
          <h3>Goles por partido</h3>
            <img src="<?php echo "$rootPath/assets/equipo.jpg" ?>" alt=""width="108" height="108"></img>
          </div>
      </div>
        <div class="column">
        <div class="card">
          <h3>Goles por jugador</h3>
          <img src="<?php echo "$rootPath/assets/soccer-player.jpg" ?>" alt=""width="108" height="108"></img>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <h3>Próximos partidos</h3>
          <table class="egt" style="width:100%" border="5" cell="1">
            <tr>
              <th scope="row">Fecha</th>
              <th>Contrincante</th>
            </tr>
            <tr>
              <td align="center">03-05-2020</td>
              <td align="center">Masturbate United</td>
            </tr>
            <tr>
              <td align="center">15-05-2020</td>
              <td align="center">Jerking off tus</td>
            </tr>
            <tr>
              <td align="center">20-05-2020</td>
              <td align="center">Wank-burg</td>
            </tr>
        </table>
      </div>
    </div>
    
  </br>


</body>
</html>