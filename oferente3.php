<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Oferente</title>
  </head>
  <body>
    <div> <!--oferente-->
        <div class="container-fluid text-center navbar navbar-dark bg-info"> <!--Menu-->
            <nav class="navbar navbar-expand-lg container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buscar.php">Buscar Empleo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login2.php">Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seejobs.php">Ver solicitudes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <?php
      	  session_start();
          $host_db = "sql110.epizy.com";
          $user_db = "epiz_22923451";
          $pass_db = "5CHGfHcaEzOWjqJ";
          $db_name = "epiz_22923451_BDwebEmpleos";
          $tbl_name = "oferente";
          $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
          $acentos = $conexion->query("SET NAMES 'utf8'");
          if ($conexion->connect_error) {

           die("<h2 class='err'>La conexion falló: </h2> " . $conexion->connect_error);

          }

          $oferente = $_POST['user'];
          $sql = "SELECT * FROM `oferente` WHERE cedula = '$oferente'";
          $sql2 = "SELECT * FROM `DatosProfesionales` WHERE cedula = '$oferente'";
          $result = $conexion->query($sql);
          $result2 = $conexion->query($sql2);
          if ($result->num_rows > 0) {
          }
          if ($result2->num_rows > 0) {
          }
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $row2 = $result2->fetch_array(MYSQLI_ASSOC);
      	  $_SESSION['loggedin'] = true;
          $_SESSION['Cedula'] = $oferente;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
        ?>
        <div class="container text-center"> <!--Contenedor del centro-->
          <!--Fila 1-->
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 id="nombre"><?php echo $row['nombre']; ?> <?php echo $row['apellido1']; ?> <?php echo $row['apellido2']; ?> <?php echo $oferente; ?></h2>
            </div>
          </div>
          <div class="row mar">
              <div class="col-md-4 col-center coll conte1">
                <img class="foto ef1" src="./img/hombre2.jpg">
              </div>
              <div class="col-md-8 cl col-center coll sec">
                <div class="">
                  <h4 id="titOferente">Datos Personales</h4>
                <p class="text">
                  <?php echo $row2['descripcion']; ?>
                </p>
                </div>
                <p class="alin">
                  <form action="edit.php" method="post" >
                    <br>
                      <input class="form-control form-control-md" name="usu" type="hidden" id="usu" value="<?php echo $oferente; ?>"> 
                      <br>
                      <p><input class='btn btn-primary' type="submit" name="Submit" value="Editar Información"></p>
                    <br>
                  </form>
                </p>
              </div>
          </div>
          <!--Fila 2-->
          <div class="row align-items-center col-center mar" id="formularioContacto"> <!--Formulario-->
            <div class="mar col-6 vr coll sec ">
              <h5 class="alini sec">Contacto:</h5> <!--Nombre Contacto-->
              <div class="row align-items-center">
                <div class="col-md-5">
                  <p class="et">Nombre contacto:</p>
                </div>
                <div class="col-md-5 et">
                  <p class=""><input class="form-control m-auto" type="text" name="txtnom"></p>
                </div>
              </div>

              <div class="row align-items-center"> <!--Telefono-->
                <div class="col-md-5 et">
                  <p class="et">Telefono:</p>
                </div>
                <div class="col-md-5 et">
                  <p class=""><input class="form-control alini m-auto" type="text" name="txttelefono"></p>
                </div>
              </div>

              <div class="row align-items-center"> <!--Email-->
                <div class="col-md-5">
                  <p class="et">Email:</p>
                </div>
                <div class=" col-md-5 et">
                  <p class=" "><input class="form-control alini m-auto" type="text" name="txtcorr"></p>
                </div>
              </div>

              <div class="row align-items-center"> <!--Descripcion-->
                <div class="col-md-5 et">
                  <p class="et">Descripción:</p>
                </div>
                <div class=" col-md-5 et">
                  <p class=""><input class="form-control m-auto" type="text" name="txtdesc"></p>
                </div>
              </div>

              <div class="row align-items-center">
                  <div class="col-12 col-center bot">
                    <button class="btn btn-primary mar ">Editar datos de contacto</button>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-center " id="resumen"> <!--resumen-->
              <div class="mar">
                <div class="row align-items-center" class="subResumen">
                  <div class="col-md-6 ">
                    <div class="dato cl ">
                      <h5>Profesion: </h5>
                      <h6><?php echo $row2['profesion']; ?></h6>
                    </div>
                  </div>

                  <div class=" col-md-6">
                    <div class="dato vr">
                      <h5>E-mail: </h5>
                      <h6><?php echo $row['correo']; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="mar">
                <div class="row align-items-center" class="subResumen">
                  <div class="col-md-6 ">
                    <div class=" dato vr">
                      <h5>Telefono:</h5>
                      <h6><a><?php echo $row['numeroT']; ?></a></h6>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="dato cl">
                      <h5>Experiencia:</h5>
                      <h6><?php echo $row2['experiencia']; ?></h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mar">
                <div class="row align-items-center" class="subResumen">
                  <div class="col-md-6">
                    <div class="dato cl">
                      <h5>Ingles:</h5>
                      <h6><?php echo $row2['ingles']; ?></h6>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="dato vr">
                      <h5>Direccion:</h5>
                      <h6><?php echo $row['direccion']; ?></h6>
                    </div>
                  </div>
                </div>
              </div>   
              <div class="mar">
                <div class="row align-items-center" class="subResumen">
                  <div class="col-md-2 col-center">
                    <button class="btn btn-primary mar">Editar</button>
                  </div>
                </div>
              </div>           
             
            </div>
        </div>
      
        <div class="row align-items-center mar"> <!--Curriculum-->
          <div class="col-md-4 ">
            <div class=" dato2 cl mar">
              <h5>Curriculum</h5>
              <p><img class="img-responsive " src="img/cv.png"></p>
              <button class="btn btn-primary mar ">Editar</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="dato2 cl mar">
              <h5>Contactos de referencia</h5>
              <p><img class="img-responsive " src="img/cr.png"></p>
              		<form action="edit.php" method="post" >
                        <input class="form-control form-control-md" name="usu" type="hidden" id="usu" value="<?php echo $oferente; ?>"> 
                        <p><input class='btn btn-primary mar ' type="submit" name="Submit" value="Editar"></p>
                  	</form>
            </div>
          </div> 

          <div class="col-md-4">
            <div class="dato2 cl mar">
              <h5>Documentos Adjuntos</h5>
              <p><img class="img-responsive " src="img/d.png"></p>
              <button class="btn btn-primary mar ">Editar</button>
            </div>
          </div> 
        </div>
      </div>

      <div class="container-fluid bg-info"> <!--footer-->
        <div class="row">
            <div class="mar col-12 ">
              <p>Next Opportunnities SA, 2018. Administración y programación de sitios web. Josue Garro, Nicole Córdoba, Jesús Mendéz.
              </p>
              <div class="col-md-12">
                <ul class="social-network social-circle">
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
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