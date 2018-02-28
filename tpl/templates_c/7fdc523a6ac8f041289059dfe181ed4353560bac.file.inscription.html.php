<?php /* Smarty version Smarty-3.1.16, created on 2018-01-03 01:04:20
         compiled from "tpl\templates\inscription.html" */ ?>
<?php /*%%SmartyHeaderCode:15035587185a4bfae876a027-12090548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fdc523a6ac8f041289059dfe181ed4353560bac' => 
    array (
      0 => 'tpl\\templates\\inscription.html',
      1 => 1514941456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15035587185a4bfae876a027-12090548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4bfae88a4c49_72896162',
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4bfae88a4c49_72896162')) {function content_5a4bfae88a4c49_72896162($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>inscription </title>
	<link rel="stylesheet" type="text/css" href="css/styleInscription.css">
</head>
<body >
<form action="inscription.php" method="GET">
		<div class="errors">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
     			<p>{ $val }</p>;
   			 <?php } ?>
		</div>
		<input type="email" name="email" placeholder="email" class="input"><br>
		<input type="text" name="nom" placeholder="nom" class="input"><br>
		<input type="text" name="prenom" placeholder="prenom" class="input"><br>
		<input type="text" name="age" placeholder="age" class="input"><br>
		<input type="text" name="tel" placeholder="tel" class="input"><br>
		<!-- <input type="text" name="lat" placeholder="latitude" class="input"><br>
		<input type="text" name="lng" placeholder="longitude" class="input"><br> -->
		<input type="text" name="adresse" placeholder="adresse" class="input"><br>
		<input type="password" name="password" placeholder="password" class="input"><br>
		<input type="password" name="retaperPassword" placeholder="retaperPassword" class="input"><br>
		<input type="submit" name="btn_valider_inscription" value="valider votre inscription" class="btn_valider_inscription"><br>

</form>
</body>
</html><?php }} ?>
