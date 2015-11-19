<?php /* Smarty version 3.1.27, created on 2015-11-18 17:46:02
         compiled from "C:\wamp\www\EstacionamientoITC\templates\tarjeton.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1109564cab4a2ed9f8_41348829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff858f0953394eec56a342b4a4aeb692624bb8b' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\tarjeton.tpl',
      1 => 1447865123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109564cab4a2ed9f8_41348829',
  'variables' => 
  array (
    'datos' => 0,
    'codigo' => 0,
    'tarjeton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564cab4a3956f6_26343393',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564cab4a3956f6_26343393')) {
function content_564cab4a3956f6_26343393 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1109564cab4a2ed9f8_41348829';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="cuerpo">
			<div class="cuerpo">
				<h1>Tarjetón de <?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</h1>
			</div>
			<hr>
			<?php
$_from = $_smarty_tpl->tpl_vars['codigo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tarjeton'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tarjeton']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeton']->value) {
$_smarty_tpl->tpl_vars['tarjeton']->_loop = true;
$foreach_tarjeton_Sav = $_smarty_tpl->tpl_vars['tarjeton'];
?>
				<?php echo $_smarty_tpl->tpl_vars['tarjeton']->value['codigo'];?>

			<?php
$_smarty_tpl->tpl_vars['tarjeton'] = $foreach_tarjeton_Sav;
}
?>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>