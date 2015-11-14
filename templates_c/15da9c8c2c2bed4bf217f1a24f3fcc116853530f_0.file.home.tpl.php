<?php /* Smarty version 3.1.27, created on 2015-11-14 18:17:15
         compiled from "C:\xampp\htdocs\EstacionamientoITC\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97956476c9b4f3083_63738513%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15da9c8c2c2bed4bf217f1a24f3fcc116853530f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EstacionamientoITC\\templates\\home.tpl',
      1 => 1447521426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97956476c9b4f3083_63738513',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56476c9b636fa3_28418924',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56476c9b636fa3_28418924')) {
function content_56476c9b636fa3_28418924 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97956476c9b4f3083_63738513';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>