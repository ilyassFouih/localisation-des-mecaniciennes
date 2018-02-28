<?php
session_start (  );
require_once('_config.inc.php');
$login = "root";
$passwrd = "";
 
$i = 0;


try{
    $pdo = new PDO("mysql:host=localhost;dbname=trouvermecanique", $login, $passwrd);
     $latitudeMax= $_SESSION['lat'] +0.400000;
	 $latitudeMin= $_SESSION['lat'] -0.400000;
	 $longitudeMax=$_SESSION['lng']+0.400000;
	 $longitudeMin=$_SESSION['lng']-0.400000;
    $qry = " select * from utilisateur ";
    $res = $pdo -> query($qry);
    while($ligne = $res -> fetch(PDO::FETCH_ASSOC)){
    	if($ligne['email']!=$_SESSION['email'])
    		if( $ligne['lat']>$latitudeMin and $ligne['lat']<$latitudeMax
   				 and $ligne['lng']>$longitudeMin and $ligne['lng']>$longitudeMin)
    			 $tab[$ligne ['email']]=$ligne;
         }
       
        }
    
catch(PDOException $r){
    echo $e -> getmessage();
}
$tpl->assign('lat',$_SESSION['lat']);
$tpl->assign('lng',$_SESSION['lng']);
$tpl->assign('lignes',$tab);
$tpl->display('chercherMeca.html');