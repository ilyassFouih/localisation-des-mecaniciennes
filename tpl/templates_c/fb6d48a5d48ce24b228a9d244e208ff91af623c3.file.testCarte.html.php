<?php /* Smarty version Smarty-3.1.16, created on 2018-01-15 11:06:36
         compiled from "tpl\templates\testCarte.html" */ ?>
<?php /*%%SmartyHeaderCode:18826981925a5c8a796432b9-00385721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb6d48a5d48ce24b228a9d244e208ff91af623c3' => 
    array (
      0 => 'tpl\\templates\\testCarte.html',
      1 => 1516014389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18826981925a5c8a796432b9-00385721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a5c8a7966dc40_77455405',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5c8a7966dc40_77455405')) {function content_5a5c8a7966dc40_77455405($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
	function initialiser() {

              
           /* var pinImage = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/green-dot.png");*/
            $(function(){
            	var latlng = new google.maps.LatLng("31.605440125954775", "-8.112716674804688");
                                  var options = {
                                    center: latlng,
                                    zoom: 12,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                  };
                                  var carte = new google.maps.Map(document.getElementById("carte"), options);

                         });
        };
        </script>
</head>
<body onload="initialiser()">
<div id="carte" style="width:100%;height:400px; "  class="carte"></div>
</body>
</html><?php }} ?>
