<?php /* Smarty version Smarty-3.1.16, created on 2018-01-15 23:41:08
         compiled from "tpl\templates\chercherMeca.html" */ ?>
<?php /*%%SmartyHeaderCode:19742326905a4cf4fb2dd578-15890225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a94d4b97dbc0d1de33cbbaf9a74b8b5265162df' => 
    array (
      0 => 'tpl\\templates\\chercherMeca.html',
      1 => 1516059664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19742326905a4cf4fb2dd578-15890225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4cf4fb426134_84943020',
  'variables' => 
  array (
    'lignes' => 0,
    'ligne' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4cf4fb426134_84943020')) {function content_5a4cf4fb426134_84943020($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<title>chercher mecanicienne </title>
  <link rel="stylesheet" type="text/css" href="css/styleHome.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <script type="text/javascript" src="js/jquery.js"></script>
   <style type="text/css">
    #navbarX{
      background-color: #9CCC65;
    }
    ul li{
      color: white;


    }
    
  </style>
    <script type="text/javascript">
         function initialiser() {

              
            var pinImage = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/green-dot.png");
             $(function(){
                          
                              $(".maPlace").click(function(event){
                             /*   ----------recupere id -----------*/
                                 var id=event.target.id;
                                  var arrayOfid = id.split(",");
                            /*-----------afficher de le carte  ------- */
                                 var latlng = new google.maps.LatLng(arrayOfid[0], arrayOfid[1]);
                                  var options = {
                                    center: latlng,
                                    zoom: 12,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                  };
                                  var carte = new google.maps.Map(document.getElementById("carte"), options);
                              /* -------creation de marqueur de la position d utilisateur -------------*/
                                     var marqueur = new google.maps.Marker({
                                      position: new google.maps.LatLng(arrayOfid[0],arrayOfid[1]),
                                      map: carte,
                                      icon :pinImage
                                        });
                                    /*----------------affichage des autres mecanicienne-------------------*/
                                      $(".afficherMarque").click(function(event){
                                 var id=event.target.id;
                                  var arrayOfid = id.split(",");
                                  
                                  //création du marqueur
                                     var marqueur = new google.maps.Marker({
                                      position: new google.maps.LatLng(arrayOfid[0],arrayOfid[1]),
                                      map: carte,
                                      animation: google.maps.Animation.BOUNCE,
                                     // icon :pinImage
                                        });
                                     
                                     
                                    });
                                     
                              });
                 });

             }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApqriQMDOD60U1x-EFIUE_X1kTj4jpbM0&callback=myMap"></script>
</head>
<body onload="initialiser()">
<!-- <div id='cssmenu'>
<ul>
   <li class='active'><a href='appelHome.php'>Home</a></li>
   <li><a href='appelchercherMeca.php'>chercher un mecaniciene </a></li>
   <li><a href='appelVoirProfile.php'>voir profile</a></li>
   <li><a href='#'>modifier profile</a></li>
   <li class='dec'><a href='appelLogin.php'>deconexioner</a></li>
</ul>
</div>
<br>
<h1 style="color: #FFFFFF;">la listes des mecanicienne les plus proches a votre position :</h1> -->
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
<table border="1" class="blueTable" >
    <thead>
     <tr>
       <th>email</th><th>nom et prenom</th><th>tel</th><th>afficher un marqeur</th>
     </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligne']->_loop = false;
 $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lignes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->key => $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
 $_smarty_tpl->tpl_vars['email']->value = $_smarty_tpl->tpl_vars['ligne']->key;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['tel'];?>
</td> 
        <td><input type="button" id="<?php echo $_smarty_tpl->tpl_vars['ligne']->value['lat'];?>
,<?php echo $_smarty_tpl->tpl_vars['ligne']->value['lng'];?>
" class="afficherMarque" value="afficher un marqueur"></td>
      </tr>
    <?php } ?>
      
  </table>
<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
" class="maPlace" value="afficher la carte avec ma position">
<div id="carte" style="width:100%;height:400px; "  class="carte"></div>


 
</body>
</html><?php }} ?>
