<?php /* Smarty version 3.1.27, created on 2015-11-18 05:04:28
         compiled from "C:\wamp\www\EstacionamientoITC\templates\Editar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1123564bf8cc693803_09083040%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c7844dbf604df9cf55ab2366b3a6628c45cbda' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\Editar.tpl',
      1 => 1447819465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123564bf8cc693803_09083040',
  'variables' => 
  array (
    'datos' => 0,
    'datos_auto' => 0,
    'i' => 0,
    'dato_auto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564bf8cc92eab5_09659001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bf8cc92eab5_09659001')) {
function content_564bf8cc92eab5_09659001 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1123564bf8cc693803_09083040';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="cuerpo">
			<h1>Modificar a <?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</h1>
		</div>
		<div class="cuerpo">
			<div class="row">
			  <div>
			  		<hr>
			  		<form class="form-horizontal" action="validaciones.php" id="alta">
			  			<input  class="validacion" name="validacion" value="1">
			  			<div class="form-group">
				  			<label class="col-sm-3 control-label">Nombre:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Paterno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="apaterno" id="apaterno" placeholder="Apellido Paterno" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['apaterno'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Materno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="amaterno" id="amaterno" placeholder="Apellido Maternp" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['amaterno'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Domicilio:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Domicilio" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['domicilio'];?>
">
				  			</div>
				  		</div>
							<div class="form-group">
				  			<label class="col-sm-3 control-label">Teléfono:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['telefono'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Tipo se propietario:</label>
				  			<div class="col-sm-9">
					  			<select name="tipo_usuario" id="tipo_usuario" class="form-control">
					  				<?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 1) {?>
					  					<option value="1" selected>Alumno</option>
						  				<option value="2">Profesor</option>
						  				<option value="3">Administrativo</option>
						  			<?php }?>
						  			<?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 2) {?>
					  					<option value="1">Alumno</option>
						  				<option value="2" selected>Profesor</option>
						  				<option value="3">Administrativo</option>
						  			<?php }?>
						  			<?php if ($_smarty_tpl->tpl_vars['datos']->value['tipo_usuario'] == 3) {?>
					  					<option value="1">Alumno</option>
						  				<option value="2">Profesor</option>
						  				<option value="3" selected>Administrativo</option>
						  			<?php }?>
					  			</select>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Licencia:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="licencia" id="licencia" placeholder="Licencia" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['licencia'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">targeta de circulación:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="tcirculacion" id="tcirculacion" placeholder="targeta de circulación" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['tcirculacion'];?>
">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Fotogragía:</label>
				  			<div class="col-sm-9">
				  				<input type="file" name="fotografia" id="Archivo">
				  			</div>
				  		</div>
				  		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
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
					  		<h1>Vehículo</h1>
				  			<hr>
				  			<div class="form-group">
					  			<label class="col-sm-3 control-label">Marca:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="marca_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="marca" placeholder="Marca" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['marca'];?>
">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Modelo:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="modelo_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="modelo" placeholder="Modelo" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['modelo'];?>
">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Transmisión:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="transmision_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="transmision" placeholder="Transmision" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['transmision'];?>
">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Placas:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="placas_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="placas" placeholder="placas" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['placas'];?>
">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Color:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="color_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="color" placeholder="Color" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['color'];?>
">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Año:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="ano_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="ano" placeholder="Año" required value="<?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['ano'];?>
">
					  			</div>
					  		</div>
					  		<h3>Marcas</h3>
					  		<input type="checkbox" name="seguro_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="1" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_1'] == 'true') {?> checked <?php }?>">Seguro <br>
					  		<input type="checkbox" name="ac_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="2" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_2'] == 'true') {?> checked <?php }?>">Aire acondicionado <br>
					  		<input type="checkbox" name="estereo_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="3" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_3'] == 'true') {?> checked <?php }?>">Estereo <br>
					  		<input type="checkbox" name="ba_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="4" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_4'] == 'true') {?> checked <?php }?>">Bolsas de aire o seguridad <br>
					  		<input type="checkbox" name="frenos_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="5" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_5'] == 'true') {?> checked <?php }?>">Frenos de disco <br>
					  		<input type="checkbox" name="birlos_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="" value="6" "<?php if ($_smarty_tpl->tpl_vars['dato_auto']->value['caracteristicas_6'] == 'true') {?> checked <?php }?>">Birlos de seguridad <br>
					  		<h3>Observaciones:</h3>
					  		<textarea rows="4" cols="100" name="observaciones_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" form="alta" placeholder="Añada sus observaciones" ><?php echo $_smarty_tpl->tpl_vars['dato_auto']->value['observaciones'];?>
</textarea>
					  		<div class="form-group text-right">
					  			<input type="submit" class="btn btn-default" value="Actualizar">
					  		</div>

					  	<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

					  <?php
$_smarty_tpl->tpl_vars['dato_auto'] = $foreach_dato_auto_Sav;
}
?>
			  		</form>
			  </div>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>