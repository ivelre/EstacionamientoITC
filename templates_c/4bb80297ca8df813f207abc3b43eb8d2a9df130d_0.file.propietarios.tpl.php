<?php /* Smarty version 3.1.27, created on 2015-11-18 21:56:46
         compiled from "C:\wamp\www\EstacionamientoITC\templates\propietarios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3088564ce60e4e4059_60168336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb80297ca8df813f207abc3b43eb8d2a9df130d' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\propietarios.tpl',
      1 => 1447880204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3088564ce60e4e4059_60168336',
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ce60e671ad0_46759824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ce60e671ad0_46759824')) {
function content_564ce60e671ad0_46759824 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3088564ce60e4e4059_60168336';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="cuerpo">
			<h1>Lista de propietarios</h1>
		</div>

		<div class="contenido">
			<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$foreach_dato_Sav = $_smarty_tpl->tpl_vars['dato'];
?>
			<div id="linea-<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
">
    		<p>
				<button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Eliminar a <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
" onclick="eliminaPerfil(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
)">
				  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
				</button> 
    		<a href="tarjeton.php?id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Tarjetón de <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
				  <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 
				</button></a> 
    		<a href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Editar a <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
				  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
				</button> </a>
				<a href="propietario.php?id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Ver a <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
				  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
				</button></a> 
    		<a href="propietario.php?id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value['apaterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value['amaterno'];?>
 
																					<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo_usuario'] == 1) {?>Alumno <?php }?>
																					<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo_usuario'] == 2) {?>Profesor<?php }?>
																					<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo_usuario'] == 3) {?>Administrativo<?php }?></a><br><br>
				</p>
			</div>
  		<?php
$_smarty_tpl->tpl_vars['dato'] = $foreach_dato_Sav;
}
?>
		</div>
<?php echo '<script'; ?>
 type="text/javascript">
var eliminaPerfil = function(id) {
	jQuery.ajax({
	  url: '/validaciones.php',
	  type: 'POST',
	  dataType: 'json',
	  data: {
	  	id: id,
	  	fn: 'remove'
	  },
	  success: function(data, textStatus, xhr) {
	    if(data.success == true) {
	    	$("#linea-" + id).fadeOut().remove();
	    }
	    if(data.success == false) {
	    	alert('Error: ' + data.reason);
	    }
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    $("#linea-" + id).fadeOut().remove();
	  }
	});
}
	
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>