<?php

require_once '_config.inc.php';
extract($_GET);
extract($_POST);
$login = "root";
$passwrd = "";

try{
    $pdo = new PDO("mysql:host=localhost;dbname=trouvermecanique", $login, $passwrd);
    
    
}
catch(PDOException $e){
    echo $e -> getmessage();
}
/*if(isset($ajouter)){
	$tpl->display("formDajout.html");
}
else if (isset($valider)){
	$pdo->exec("INSERT INTO etudiant(nom,note) values('".$nomAajouter."','".$noteAajouter."')  ");
	$res=$pdo->query("SELECT * from etudiant");
	$tab = array( );

	while ($ligne= $res -> fetch(PDO::FETCH_ASSOC)) {
		$tab=$ligne;
	}
	$tpl->assign("tab",$tab);
	$tpl->display("tableau.html");
	}*/

	$tpl->display("tableau.html");