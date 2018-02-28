<?php
session_start (  );
require_once('_config.inc.php');
    $tpl -> assign('nom', $_SESSION['nom']);
    $tpl -> assign('prenom',  $_SESSION['prenom']);
    $tpl -> assign('bonjour', "bonjour");
$tpl->display('home222.html');