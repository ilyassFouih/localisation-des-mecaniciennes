<?php
session_start();
require_once '_config.inc.php';
extract($_GET);
$login = "root";
$passwrd = "";
$tab = array();
try{
    $pdo = new PDO("mysql:host=localhost;dbname=trouvermecanique", $login, $passwrd);
   /* ----------recupere Adresse-------------------*/
   		 $address = $adresse; // Google HQ
   /*    ------------------longLat-----------------------*/
       	 $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
		$output= json_decode($geocode);
	  $latitude = $output->results[0]->geometry->location->lat;
		$longitude = $output->results[0]->geometry->location->lng;
/*---------------------------------------------------------------------------*/
			if($latitude!=null && $longitude!=null ){
				 $latitudeMax= $latitude +0.400000;
				 $latitudeMin= $latitude -0.400000;
				 $longitudeMax=$longitude+0.400000;
				 $longitudeMin=$longitude-0.400000;
   /*      -----------------------------------------------------------------------*/
   				$qry='select * from utilisateur ';
   				$res=$pdo->query($qry);
   				while($ligne = $res -> fetch(PDO::FETCH_ASSOC)){
   				if( $ligne['lat']>$latitudeMin and $ligne['lat']<$latitudeMax
   				   and $ligne['lng']>$longitudeMin and $ligne['lng']<$longitudeMax)
    					 $tab[$ligne ['email']]=$ligne;
        		 }
        		 $tpl->assign("lat",$latitude);
        		 $tpl->assign("lng",$longitude);
        		 $tpl->assign("lignes",$tab);
        		 $tpl->display("resultats.html");
        }else
        	 $tpl->display("rechercheRapide.html"); 
}
catch(PDOException $r){
    echo $e -> getmessage();
}