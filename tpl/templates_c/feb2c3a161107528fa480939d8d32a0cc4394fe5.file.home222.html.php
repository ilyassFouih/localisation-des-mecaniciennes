<?php /* Smarty version Smarty-3.1.16, created on 2018-01-15 23:35:33
         compiled from "tpl\templates\home222.html" */ ?>
<?php /*%%SmartyHeaderCode:6468184765a46c2d1cde371-81407977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb2c3a161107528fa480939d8d32a0cc4394fe5' => 
    array (
      0 => 'tpl\\templates\\home222.html',
      1 => 1516059194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6468184765a46c2d1cde371-81407977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a46c2d226dd30_32408177',
  'variables' => 
  array (
    'bonjour' => 0,
    'nom' => 0,
    'prenom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46c2d226dd30_32408177')) {function content_5a46c2d226dd30_32408177($_smarty_tpl) {?><!-- <!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/styleHome.css">
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='appelHome.php'>Home</a></li>
   <li><a href='appelchercherMeca.php'>chercher un mecaniciene </a></li>
 
   <li><a href='appelLogin.php'>deconexioner</a></li>
</ul>
</div>
<div id="welcome"><h1> <?php echo $_smarty_tpl->tpl_vars['bonjour']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 </h1></div>
<form action="rechercheRapide.php" method="POST">
</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#navbarX{
  		background-color: #9CCC65;
  	}
  	ul li{
  		color: white;


  	}
  	
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" id="navbarX">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ><font color="white"> Trouver Mécanicien</font></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href='appelHome.php'><font color="white">Home</font></a></li>
      </li>
      <li><a href='appelchercherMeca.php'><font color="white">les mecaniciens les plus proches</font></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="appelLogin.php"><span class="glyphicon glyphicon-log-in"></span>
      	<font color="white"> déconnexion</font></a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3><?php echo $_smarty_tpl->tpl_vars['bonjour']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 </h3>
</div>

</body>
</html><?php }} ?>
