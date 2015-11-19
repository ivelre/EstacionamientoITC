<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$titulo}</title>
	
	<!-- Bootstrap -->
	 <script src="js/jquery.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/estilos.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--
    <script src="jquery-2.1.4.js"></script>
-->



</head>
<body>
	<br><br>
	<div class="margen">
	<img class="img-responsive" src="images/logo.jpg">
	</div>
	<br>

	<div class="cuerpo">
			<nav class="navbar navbar-default" role="navigation">
			  <!-- El logotipo y el icono que despliega el menú se agrupan
			       para mostrarlos mejor en los dispositivos móviles -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse"
			            data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Desplegar navegación</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#">EstacionamientoITC</a>
			  </div>
			 
			  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
			       otro elemento que se pueda ocultar al minimizar la barra -->
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li><a href="index.php">Inicio</a></li>
			      <li><a href="Dar_alta.php">Registro</a></li>	 
			      <li><a href="propietarios.php">Ver Listados</a></li>	      
			    </ul>
			 
			    <form class="navbar-form navbar-right" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="Buscar">
			      </div>
			      <button type="submit" class="btn btn-default">Enviar</button>
			    </form>
			 
			    
			  </div>
		</nav>

</div>
