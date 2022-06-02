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
    <title>Empresa</title>
  </head>
  <body>
    <div class="de"> <!--oferente-->
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
                            <a class="nav-link" href="buscar.php">Empleos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Administración</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <?php
          $host_db = "sql110.epizy.com";
          $user_db = "epiz_22923451";
          $pass_db = "5CHGfHcaEzOWjqJ";
          $db_name = "epiz_22923451_BDwebEmpleos";
          $tbl_name = "empresas";
          $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

          if ($conexion->connect_error) {

           die("<h2 class='err'>La conexion falló: </h2> " . $conexion->connect_error);

          }

          $empresa = $_POST['usuario'];
          $sql = "SELECT * FROM `empresas` WHERE id_empresa = '$empresa'";
          
          $result = $conexion->query($sql);
          
          if ($result->num_rows > 0) {
          }
          
          $row = $result->fetch_array(MYSQLI_ASSOC);
          
        ?>

        <div class="container text-center"> <!--Contenedor del centro-->
          <!--Fila 1-->
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 id="nombre"><?php echo $row['nombre']; ?></h2>
            </div>
          </div>
          <div class="row mar">
              <div class="col-md-12 cl col-center coll sec">
                <div class="">
                  <h4 id="titOferente">Descripcion</h4>
                <p class="text">
                  <?php echo $row['descripcion']; ?>
                </p>
                </div>
                <p class="alin"><button class="btn btn-primary ">Editar Información</button></p>       
              </div>
          </div>
          <!--Fila 2-->
          <div class="row align-items-center mar" id="formularioContacto"> <!--Formulario-->
            <div class="mar col-6 vr col-center coll sec ">
              <h5 class="alini sec">Contacto:</h5> <!--Nombre Contacto-->
              <div class="row align-items-center">
                <div class="col-md-5">
                  <p class="et">Nombre empresa:</p>
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
                <div class="row align-items-center de" class="subResumen">
                  <div class="col-md-12 ">
                    <div class="datoe cl ">
                      <h5>Provincia: </h5>
                      <h6 class="a">San José</h6>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="mar">
                <div class="row align-items-center de" class="subResumen">
                  <div class="col-md-12 ">
                    <div class=" datoe vr">
                      <h5>Direccion:</h5>
                      <h6 class="e">
                        <?php echo $row['direccion']; ?>
                      </h6>
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
  	</div>

	<div class="container-fluid bg-info"> <!--footer-->
	    <div class="row">
	        <div class="mar col-12 ">
	          <p>Next Opportunnities SA, 2018. Administración y programación de sitios web. Josue Garro, Nicole Cordóba, Jesús Mendéz.
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