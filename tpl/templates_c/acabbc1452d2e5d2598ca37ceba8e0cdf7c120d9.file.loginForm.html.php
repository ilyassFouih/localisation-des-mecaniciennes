<?php /* Smarty version Smarty-3.1.16, created on 2017-12-30 19:26:04
         compiled from "tpl\templates\loginForm.html" */ ?>
<?php /*%%SmartyHeaderCode:3735030495a3aaa4d737326-99650490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acabbc1452d2e5d2598ca37ceba8e0cdf7c120d9' => 
    array (
      0 => 'tpl\\templates\\loginForm.html',
      1 => 1514661963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3735030495a3aaa4d737326-99650490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a3aaa4da5bb07_05322176',
  'variables' => 
  array (
    'errors' => 0,
    'ligne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3aaa4da5bb07_05322176')) {function content_5a3aaa4da5bb07_05322176($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Trouver votre mecanique </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	

	<form action="login.php" method="GET" >

			<h2>veuillez vous connecter</h2><br>
			<br>
				<?php  $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligne']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->key => $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
?>
				<div class="errors">
				<?php echo $_smarty_tpl->tpl_vars['ligne']->value;?>

					</div>
				<?php } ?>
		
			<input type="text" name="email" placeholder="email" class="input"><br>
			<br>
			<input type="password" name="password" placeholder="mot de passe" class="input"><br>
			<input type="submit" name="btnSeConnecter" class="btnSeConnecter" value="se connecter"><br><br>
			<a href="appelInscription.php" class="inscrire"><strong>s'inscrire</strong></a>
			<br>
			<br>
			<div class="oubien" >__________ou bien __________</div> 
			<input type="submit" class="recherche_rapide" name="recherche_rapide" value="une recherche rapide">
	</form>

</body>
</html><?php }} ?>
