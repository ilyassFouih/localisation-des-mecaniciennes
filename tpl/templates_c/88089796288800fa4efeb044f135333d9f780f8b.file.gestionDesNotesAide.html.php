<?php /* Smarty version Smarty-3.1.16, created on 2017-12-09 20:54:33
         compiled from "tpl\templates\gestionDesNotesAide.html" */ ?>
<?php /*%%SmartyHeaderCode:13621196785a2be68ddf5d26-39787858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88089796288800fa4efeb044f135333d9f780f8b' => 
    array (
      0 => 'tpl\\templates\\gestionDesNotesAide.html',
      1 => 1512852864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13621196785a2be68ddf5d26-39787858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a2be68e1cf202_31836187',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2be68e1cf202_31836187')) {function content_5a2be68e1cf202_31836187($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action='gestionDesNotesAide.php' method='POST'>
<p><center><h1>
		entrer nom etudiant : <input type=text name='nom'><br>
      	entere la notes             :<input type=number name='note' ><br> 
      	<center><input type='submit' value='valider' id='btnform'></center>
</h1></center></p>
</form>
</body>
</html><?php }} ?>
