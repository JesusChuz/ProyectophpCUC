<?php
	session_start();
    $hostname = "sql110.epizy.com";
    $database = "epiz_22923451_BDwebEmpleos";
    $username = "epiz_22923451";
    $password = "5CHGfHcaEzOWjqJ";

    $mysqli = new mysqli($hostname, $username, $password, $database);
    $acentos = $mysqli->query("SET NAMES 'utf8'");
    $result = $mysqli->query("SELECT * FROM empleos_disp")or die($mysqli->error);
    $resultNom = $mysqli->query("SELECT * FROM empresas left join empleos_disp ON empresas.id_empresa=empleos_disp.id_empresa");
?>
<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="Content-type" content="text/html" charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <!-- Bootstrap CSS -->
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
                    <link href="css/estilo.css" rel="stylesheet" type="text/css">
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                            <title>
                                Busqueda
                            </title>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div>
            <div class="container-fluid text-center navbar navbar-dark bg-info">
                <nav class="navbar navbar-expand-lg container">
                    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Buscar Oferente
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Administración
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Acerca de
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

             <!--Menu lateral-->
            <div class="row">
                <div class="col-md-3 vr tr">
                    <h4 class="text-center">
                        Buscar Empleo
                    </h4>
                  	<?php echo $_SESSION['Cedula'];?>
                    <div class="input-group mb-3">
                        <input aria-describedby="basic-addon2" aria-label="" class="form-control max" placeholder="" type="text">
                            <div class="input-group-append ">
                                <button class="btn btn-primary " type="button">
                                    Buscar
                                </button>
                            </div>
                        </input>
                    </div>
                    <br>
                    <h4>
                        Filtros:
                    </h4>
                    <div class="form-group">
                        <label for="sel1">
                            Puesto:
                        </label>
                        <select class="form-control max" id="sel1">
                            <option>
                                Policia
                            </option>
                            <option>
                                Informático
                            </option>
                            <option>
                                Cocinero
                            </option>
                            <option>
                                Abogado
                            </option>
                        </select>
                    </div>
                    <br>
                    <label for="sel1">
                        Posicion:
                    </label>
                    <br>
                    <input name="filter" type="radio" value="male">
                    Tiempo completo
                    <br>
                    <input name="filter" type="radio" value="female">
                    Medio tiempo
                    <br>
                    <input name="filter" type="radio" value="female">
                    Temporal
                    <br>
                    <input name="filter" type="radio" value="other">
                    Todos
                    <br>
                    <br>
                    <div class="form-group max">
                    <label for="sel1">
                        Provincia:
                    </label>
                    <select class="form-control" id="sel1">
                        <option>
                            Guanacaste
                        </option>
                        <option>
                            Limon
                        </option>
                        <option>
                            Puntarenas
                        </option>
                        <option>
                            Alajuela
                        </option>
                        <option>
                            Hredia
                        </option>
                        <option>
                            Cartago
                        </option>
                        <option>
                            San José
                        </option>
                    </select>
                    </div>
                    <br>
                    <button class="btn btn-primary mar ">
                        Buscar
                    </button>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>  
                </div>
                <!--Fichas de trabajo-->
                <div class="col-md-8 ">
                    <?php
                  while($empleoNom = $resultNom->
                    fetch_assoc() and $empleo = $result->
                    fetch_assoc()): 
                    ?>
                    <style>
                        .lblDatos{
                            margin: 0 auto;
                            font-size: 18px;
                            color: white;
                            margin-left: 50px;
                            display: inline;
                        }
                        .Pdescripcion{
                            margin: 0 auto;
                            font-size: 18px;
                            color: white;
                            text-align: justify;
                            margin-top: 10px;
                        }
                        #titulos{
                            margin: 0 auto;
                            height:auto;
                            background-color: #f68b1f;
                            text-align: center;
                        }
                        #divDetalles{
                            height:auto;
                            background-color: #b5c627;
                            text-align: left;
                            margin: 0 auto;
                        }
                        #divFoto{
                            margin: 0 auto;
                            height:auto;
                            background-color: #b5c627;
                            text-align: center;                            
                        }

                    </style>
                    <div class="row cl tr">
                        <div class="col-md-12 mar">
                            <div  class="row " id="titulos">
                                <div class="col-md-12">
                                    <h1>
                                        <?=$empleoNom['nombre']?>
                                    </h1> 
                                </div>
                            </div>
                            <div class="tr row" id="divDetalles">
                                <div class="col-md-12 col-center">
                                   <a style="padding-left: 35px; background: url(img/checked.png) no-repeat scroll 7px 7px;" class="lblDatos">
                                    <?=$empleo['requsitos']?>
                                    </a> 
                                    <br>
                                    <a style="padding-left: 35px; background: url(img/puesto.png) no-repeat scroll 7px 7px;" class="lblDatos">
                                    <?=$empleo['puesto']?>
                                    </a> 
                                    <br>
                                    <a style="padding-left: 35px; background: url(img/salario.png) no-repeat scroll 7px 7px;" class="lblDatos">
                                    <?=$empleo['salario'] ? $empleo['salario']:'' ?>
                                    </a> 
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-4 tr col-center">
                                    <img class="img-responsive " src="img/tr.jpg"></img>
                                </div>
                                <div class="col-md-7 tr">
                                    <p class="Pdescripcion">
                                    <?=$empleo['descripcion'] ? $empleo['descripcion']:'' ?>
                                    </p>
                                    <br>
                                    <form action="job.php" method="post" >
                                        <input name="ofe" type="hidden" id="ofe" value="<?php echo $_SESSION['Cedula'];?>">
                                        <input name="pue" type="hidden" id="pue" value="<?php echo $empleo['id_empleo'];?>">
                                        <p><input class="btn btn-primary mar " id="btn" type="submit" name="Submit" value="Aplicar"></p>
                                    </form>                               
                                    </br>
                                </div>
                            </div> 
                        </div>
                     </div>
                    <?php endwhile;?>
                </div>
                <!--Footer-->
                <div class="container-fluid bg-info">
                    <div class="row">
                        <div class="mar col-12 ">
                            <p>
                                Next Opportunnities SA, 2018. Administración y programación de sitios web. Josue Garro, Nicole Córdoba, Jesús Méndez.
                            </p>
                            <div class="col-md-12">
                                <ul class="social-network social-circle">
                                    <li>
                                        <a class="icoFacebook" href="#" title="Facebook">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoTwitter" href="#" title="Twitter">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoLinkedin" href="#" title="Linkedin">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoGoogle" href="#" title="Google +">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoRss" href="#" title="Rss">
                                            <i class="fa fa-rss">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
            <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
            </script>
            <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
            </script>
            <script src="js/bootstrap.js">
            </script>
    </body>
</html>
