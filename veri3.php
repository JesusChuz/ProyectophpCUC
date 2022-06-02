<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- links con Bootstrap-CSS-js-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bienvenido</title>
</head>
<body>
  <div class="container-fluid text-center navbar navbar-dark bg-info"> <!--Menu-->
      <nav class="navbar navbar-expand-lg navbar-fixed-top container">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login1.php">Buscar Oferentes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login2.php">Empresas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Administración</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Acerca de</a>
                  </li>
              </ul>
          </div>        
        </div>
      </nav>
  </div>

  <div class="login">
      <?php
      session_start();
      ?>

      <?php
      $host_db = "sql110.epizy.com";
      $user_db = "epiz_22923451";
      $pass_db = "5CHGfHcaEzOWjqJ";
      $db_name = "epiz_22923451_BDwebEmpleos";
      $tbl_name = "empresas";


      $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

      if ($conexion->connect_error) {

       die("<h1 class='err'>La conexion falló: </h1> " . $conexion->connect_error);

      }
      if(isset($_POST['Submit'])){
        $username = $_POST['user'];
        $password = $_POST['password'];
      }

      $sql = "SELECT * FROM `empresas` WHERE id_empresa = '$username'";

      $result = $conexion->query($sql);

      if ($result->num_rows > 0) {
       }

       $row = $result->fetch_array(MYSQLI_ASSOC);

       if ($password==$row['password'])
       {
          $_SESSION['loggedin'] = true;
          $_SESSION['Cedula'] = $username;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
          echo "<h1>¡Bienvenido!</h1>" . $_SESSION['Cedula'];
           ?>
            <form action="empresa.php" method="post" >
              <br>
              <input class="form-control form-control-md" name="usuario" type="hidden" id="usuario" value="<?php echo $username; ?>"> 
              <br>
              <p><input class=' btn btn-primary mar' type="submit" name="Submit" value="Inicio"></p>
              <br>
            </form>
            <?php
       }
       else
       {
        
         echo "<h2>Username o Password son incorrectos.</h2>";
         echo "<br><br><button class=' btn btn-primary mar' onclick=location.href='#'>Volver</button></p>";
       }

       mysqli_close($conexion);
       ?>
  </div>

  <div class="container-fluid bg-info"> <!--Footer-->
          <div class="row">
            <div class="mar col-12 ">
              <p >Next Opportunnities SA, 2018. Administración y programación de sitios web. Josue Garro, Nicole Cordóba, Jesús Mendéz.
              </p>
              <div class="col-md-12">
                  <ul class="social-network social-circle">
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                  </ul>
                </div>
            </div>
        </div>
      </div>
    <script>
        window.alert = function() {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
          if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
          else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
        });
      </script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html>
