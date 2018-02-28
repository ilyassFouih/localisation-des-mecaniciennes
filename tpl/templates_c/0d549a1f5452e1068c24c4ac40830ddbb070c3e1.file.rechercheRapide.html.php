<?php /* Smarty version Smarty-3.1.16, created on 2018-01-16 08:29:37
         compiled from "tpl\templates\rechercheRapide.html" */ ?>
<?php /*%%SmartyHeaderCode:20381226315a4c3310e4f0e7-59655525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d549a1f5452e1068c24c4ac40830ddbb070c3e1' => 
    array (
      0 => 'tpl\\templates\\rechercheRapide.html',
      1 => 1516091375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20381226315a4c3310e4f0e7-59655525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4c3310f11ef9_66608885',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4c3310f11ef9_66608885')) {function content_5a4c3310f11ef9_66608885($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="css/nvStyle.css"> -->
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body background="body">
<form action="recherchRapide.php"  method="GET">
<!-- <input type="text" name="adresse">
<input class="btn btn-danger" type="submit" name="btnChercher" value="chercher">
 -->
<div class="container" style="padding-top: 20%">
	<div classs="row">
		<h2>entrer votre adresse pour voir les mecanicienne les plus proche </h2>
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search" name="adresse" />
                                <span class="input-group-btn">
                                    <input class="btn btn-danger" type="submit" name="btnChercher" value="chercher">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
	</div>
</div>



</form>
</body>
</html><?php }} ?>
