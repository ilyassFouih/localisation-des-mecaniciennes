<?php /* Smarty version Smarty-3.1.16, created on 2017-12-18 22:00:14
         compiled from "tpl\templates\afficherbd.html" */ ?>
<?php /*%%SmartyHeaderCode:2096200815a3837acd7aff9-99007317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae21e1fd46bb0237cae06938756fe801b70421e8' => 
    array (
      0 => 'tpl\\templates\\afficherbd.html',
      1 => 1513634409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096200815a3837acd7aff9-99007317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a3837ace81fa2_00833578',
  'variables' => 
  array (
    'Article' => 0,
    'ligne' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3837ace81fa2_00833578')) {function content_5a3837ace81fa2_00833578($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
		<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".Article").click(function(event){
				var id=event.target.id;
				
				alert("id="+id);


			});

	
	});
</script>
</head>
<body>
	<center>
		<table border="1" cellpadding="50">
			<tr>
				<h1><th>Designation:</th><th>PU</th><th>Quantite</th><th>Action</th></h1>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligne']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->key => $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['ligne']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['designation'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['pu'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['quantite'];?>
</td>
				<td><input type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="Article" value="OK"></td>
			</tr>
			<?php } ?>
		</table>
	</center>

</body>
</html><?php }} ?>
