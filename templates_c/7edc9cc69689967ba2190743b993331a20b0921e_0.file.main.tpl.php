<?php /* Smarty version 3.1.27, created on 2015-11-14 20:13:32
         compiled from "C:\xampp\htdocs\EstacionamientoITC\templates\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22305564787dc9d51a9_66674446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7edc9cc69689967ba2190743b993331a20b0921e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EstacionamientoITC\\templates\\main.tpl',
      1 => 1447528395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22305564787dc9d51a9_66674446',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564787dca3e6d6_17604214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564787dca3e6d6_17604214')) {
function content_564787dca3e6d6_17604214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22305564787dc9d51a9_66674446';
?>

<div class="imgs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/img1.jpg" alt="imagen">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item ">
          <img src="images/img2.jpg" alt="imagen">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item ">
          <img src="images/img3.jpg" alt="imagen">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img src="images/img4.jpg" alt="imagen">
          <div class="carousel-caption">
            
          </div>
        </div>
        
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

</div><?php }
}
?>