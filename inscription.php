<?php
require_once '_config.inc.php';

extract($_GET);
$login="root";
$pass="";
$errors = array();
try{
	$pdo=new PDO("mysql:host=localhost;dbname=trouvermecanique",$login,$pass);

if ($password==$retaperPassword) {
			$address = $adresse; // Google HQ
       		 $prepAddr = str_replace(' ','+',$address);
        	$geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
			$output= json_decode($geocode);
		    $latitude = $output->results[0]->geometry->location->lat;
		    $longitude = $output->results[0]->geometry->location->lng;

  				if($longitude!=null && $latitude){

					$res=$pdo->prepare("INSERT INTO 
						utilisateur( email,nom,prenom,tel,age,password,lat,lng,mecanicienne) 
						VALUES ('".$email."','".$nom."','".$prenom."','".$tel."','".$age."','".$password."',
								'".$latitude."',
								'".$longitude."','1') ");
					$res->execute();
					$tpl->display("loginForm.html");
			}
			else{ 
				array_push($errors, "adresse non valide");
				$tpl->display("inscription.html");
				$tpl->assign("errors",$errors);
			}
		
 	}else{ 
				array_push($errors, "mot de passe incorrecte");
				$tpl->display("inscription.html");
				$tpl->assign("errors",$errors);
		}
}
 catch(PDOException $e){
	echo $e->getmessage();
}

		/*$options = [
		'cost' => 12,
		];
		$passHashe=password_hash($password, PASSWORD_BCRYPT, $options);*/
		


