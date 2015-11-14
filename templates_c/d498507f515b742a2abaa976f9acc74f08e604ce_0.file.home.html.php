<?php /* Smarty version 3.1.27, created on 2015-11-14 17:50:29
         compiled from "C:\wamp\www\EstacionamientoITC\templates\home.html" */ ?>
<?php
/*%%SmartyHeaderCode:32600564766557365a8_27565740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd498507f515b742a2abaa976f9acc74f08e604ce' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\home.html',
      1 => 1447519631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32600564766557365a8_27565740',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564766557fd317_22836654',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564766557fd317_22836654')) {
function content_564766557fd317_22836654 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32600564766557365a8_27565740';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
	<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</body>
</html><?php }
}
?>