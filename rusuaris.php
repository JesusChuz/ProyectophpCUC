<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- links con Bootstrap-CSS-js-->
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Login</title>
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
                            <a class="nav-link" href="login1.php">Oferentes</a>
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

		<div class="login container-fluid">
			<h1>Login de Usuarios</h1>
			<form action="regis1.php" method="post" >
				<div class="row align-items-center"> 
                    <div class="col-md-6 col-center">
    	                <br/>
    	                <p><input class="form-control form-control-md" name="cedula" type="text" id="usuario" required placeholder="Cedula"></p>
                        <br/>				
						<p><input class="form-control form-control-md" name="nombre" type="text" id="nombre" required placeholder="Nombre"></p>
						<br/>				
						<p><input class="form-control form-control-md" name="papellido" type="text" id="papellido" required placeholder="Apellido1"></p>
						<br/>				
						<p><input class="form-control form-control-md" name="sapellido" type="text" id="sapellido" placeholder="Apellido2"></p>
						<br/>
						<p><input class="form-control form-control-md" name="password" type="password" id="password" required placeholder="Contraseña"></p>
                    </div>     
					<div class="col-md-6 col-center">
						<br/>
                        <p><input class="form-control form-control-md" name="correo" type="text" id="correo" required placeholder="Correo"></p>
					  	<br/>				
						<p><input class="form-control form-control-md" name="provincia" type="text" id="provincia " placeholder="Provincia"></p>
					  	<br/>				
						<p><input class="form-control form-control-md" name="direc" type="text" id="direc" placeholder="Direccion"></p>
					  	<br/>				
						<p><input  class="form-control form-control-md" name="phone" type="text" id="phone" placeholder="Telefono"></p>
						<br>
						<p><input class="btn btn-primary mar" type="submit" name="Submit" value="Registrar"></p>
					</div>
				</div>
			</form>
			<br>
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
