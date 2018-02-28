<?php
session_start (  );
require_once '_config.inc.php';
extract($_GET);

$login = "root";
$passwrd = "";
$errors = array(); 


$i = 0;
$nomBD= "";
$prenomBD = "";
$lat="";
$lng="";
try{
    $pdo = new PDO("mysql:host=localhost;dbname=trouvermecanique", $login, $passwrd);
    
    $qry = " select * from utilisateur ";
    $res = $pdo -> query($qry);
    while($line = $res -> fetch(PDO::FETCH_NUM)){
        if($email == $line[0]){
          
           
            $i=-1;
            $nomBD = $line[1];
            $prenomBD = $line[2];
            $lat=$line[6];
            $lng=$line[7];
            if($password == $line[5]){
                $i = 1;
                
            }else $i = -2;
        }
    }
}
catch(PDOException $r){
    echo $e -> getmessage();
}


if (isset($btnSeConnecter)){
     if (empty($email)) { array_push($errors, "Email is required"); }
      if (empty($password)) { array_push($errors, "Password is required"); }
      if($i==-1){ array_push($errors, "wrong email"); }
      if($i==-2){ array_push($errors, "wrong password "); }

      if ($i>0) {
        $_SESSION['nom'] = $nomBD;
        $_SESSION['prenom'] = $prenomBD;
        $_SESSION['email'] = $email;
        $_SESSION['age'] = $age;
        $_SESSION['lat'] = $lat;
        $_SESSION['lng'] = $lng;

    $tpl -> assign('nom', $_SESSION['nom']);
    $tpl -> assign('prenom',  $_SESSION['prenom']);
    $tpl -> assign('bonjour', "bonjour");
    $tpl -> display('home222.html');
      }else{
         $tpl -> display('loginForm.html');
        $tpl -> assign('errors', $errors);
       }

}
else if(isset($recherche_rapide)){
  $tpl -> display('rechercheRapide.html'); 
}

