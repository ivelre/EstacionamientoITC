<?php /* Smarty version 3.1.27, created on 2015-11-14 21:41:25
         compiled from "C:\wamp\www\EstacionamientoITC\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2013356479c75adc709_08139593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bcc472103da0e58092c8f2cf4ce9add10cc65c1' => 
    array (
      0 => 'C:\\wamp\\www\\EstacionamientoITC\\templates\\home.tpl',
      1 => 1447533134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2013356479c75adc709_08139593',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56479c75b8b949_87876199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56479c75b8b949_87876199')) {
function content_56479c75b8b949_87876199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2013356479c75adc709_08139593';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>