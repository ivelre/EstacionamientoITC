<?php /* Smarty version 3.1.27, created on 2015-11-18 01:49:57
         compiled from "C:\wamp\www\EstacionamientoITC\templates\propietario.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3236564bcb35950249_04544222%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71dea4c6d8a9ccb9116da7109f676bdb067f9681' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\propietario.tpl',
      1 => 1447807740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236564bcb35950249_04544222',
  'variables' => 
  array (
    'datos' => 0,
    'datos_auto' => 0,
    'dato_auto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564bcb35af28f2_18694276',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bcb35af28f2_18694276')) {
function content_564bcb35af28f2_18694276 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3236564bcb35950249_04544222';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="cuerpo">
			<h1>Propietario </h1>
			<hr>
		</div>
			<div class="contenido">
				<p for="" class="control-label"><b>Nombre:</b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value['apaterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value['amaterno'];?>
</p><br>
				<p for="" class="control-label"><b>Direccion:</b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['domicilio'];?>
</p><br>
				<p for="" class="control-label"><b>Teléfono:</b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['telefono'];?>
</p><br>
				<p for="" class="control-label"><b>Tipo de usuario:</b> <?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 1) {?> Alumno <?php }?>
																																<?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 2) {?> Profesor <?php }?>
																																<?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 3) {?> Administración <?php }?></p><br>
				<p for="" class="control-label"><b>Licencia:</b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['licencia'];?>
</p><br>
				<p for="" class="control-label"><b>Tarjeta de circulacion:</b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['tcirculacion'];?>
</p><br>
			</div>
		<?php
$_from = $_smarty_tpl->tpl_vars['datos_auto']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dato_auto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dato_auto']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato_auto']->value) {
$_smarty_tpl->tpl_vars['dato_auto']->_loop = true;
$foreach_dato_auto_Sav = $_smarty_tpl->tpl_vars['dato_auto'];
?>
			<div class="cuerpo">
				<h1>Vehiculo</h1>
				<hr>
			</div>
				<div class="contenido">
					<p for="" class="control-label"><b>Marca:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['marca'];?>
</p><br>
					<p for="" class="control-label"><b>Modelo:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['modelo'];?>
</p><br>
					<p for="" class="control-label"><b>Transmición:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['transmision'];?>
</p><br>
					<p for="" class="control-label"><b>Placas:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['placas'];?>
</p><br>
					<p for="" class="control-label"><b>Color:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['color'];?>
</p><br>
					<p for="" class="control-label"><b>Año:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['ano'];?>
</p><br>
					<p for="" class="control-label"><b>Caracteristicas:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas'];?>
</p><br>
					<p for="" class="control-label"><b>Observaciones:</b> <?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['observaciones'];?>
</p><br>
				</div>
		<?php
$_smarty_tpl->tpl_vars['dato_auto'] = $foreach_dato_auto_Sav;
}
?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>