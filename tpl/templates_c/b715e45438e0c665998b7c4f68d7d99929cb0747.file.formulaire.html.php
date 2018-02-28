<?php /* Smarty version Smarty-3.1.16, created on 2017-12-19 08:43:23
         compiled from "tpl\templates\formulaire.html" */ ?>
<?php /*%%SmartyHeaderCode:12358607175a3849884efef5-23582351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b715e45438e0c665998b7c4f68d7d99929cb0747' => 
    array (
      0 => 'tpl\\templates\\formulaire.html',
      1 => 1513641633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12358607175a3849884efef5-23582351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a384988518934_83805523',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384988518934_83805523')) {function content_5a384988518934_83805523($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../../remplireBDaffiche.php" method="GET">
	<h2><pre>
		entrer le nom d'etudiant :<input type="text" name="nom" ><br>
		entrer la note           :<input type="number" name="note" ><br>
		                <input type="submit" value="valider">

		</pre>
	</h2>
</form>

</body>
</html><?php }} ?>
