<?php /* Smarty version 3.1.27, created on 2015-11-18 21:44:01
         compiled from "C:\wamp\www\EstacionamientoITC\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29321564ce311f17f35_03401289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cf96b0458908d7db06ef3ff7af1cf64d5a826d' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\header.tpl',
      1 => 1447879440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29321564ce311f17f35_03401289',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ce31205fea8_23411317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ce31205fea8_23411317')) {
function content_564ce31205fea8_23411317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29321564ce311f17f35_03401289';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	
	<!-- Bootstrap -->
	 <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/estilos.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!--
    <?php echo '<script'; ?>
 src="jquery-2.1.4.js"><?php echo '</script'; ?>
>
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
<?php }
}
?>