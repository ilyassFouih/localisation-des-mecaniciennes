<?php /* Smarty version Smarty-3.1.16, created on 2017-12-09 13:43:58
         compiled from "tpl\templates\gestionDesNotes.html" */ ?>
<?php /*%%SmartyHeaderCode:3645151585a2be6d4c16d12-15915566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b54f29e640f7e141a7ca23bb9a03fadf9bdad6f' => 
    array (
      0 => 'tpl\\templates\\gestionDesNotes.html',
      1 => 1512826996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3645151585a2be6d4c16d12-15915566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a2be6d4c40e53_65950064',
  'variables' => 
  array (
    'notes' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2be6d4c40e53_65950064')) {function content_5a2be6d4c40e53_65950064($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript">
		$(function(){

			/*$("#btn").click(function(){
				var $cont=$("#ligne").html();
				$cont+="<tr><td>jhh</td></tr>";
				$("#tab1").html($cont);

			});*/
		});

	</script>
</head>
<body>
<form action="../../gestionDesNotes.php" method="GET">
	<table border="1"  align="center" cellpadding="50" id="tab1" >
		<tr >
			<td>Etudiant</td>
			<td>Note</td>
			<td><input type="submit" id="btn" value="ajouter un Etudiant"></td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
			<td></td>
		</tr>
		<?php } ?>
		
		
	</table>

</form>
</body>
</html><?php }} ?>
