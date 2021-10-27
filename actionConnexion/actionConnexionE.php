<?php
session_start();
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$_SESSION['pseudo'] = $pseudo;
$_SESSION['mdp'] = $mdp;

$file2 = "idstudent.csv";

if(empty($pseudo) == 1 && empty ($mdp) == 1){
	header("Location: ../pageConnexion/pageConnexionE.php");
}
else{
	$pointeur = fopen($file2, "r");
	$ok = 0;
	while(!feof($pointeur)){
		$ligne = fgetcsv($pointeur, 1024);
		if($pseudo == $ligne[0] ){
			if($mdp == $ligne[1]){
				header("Location: ../pageVote.php");
				$ok = 0;
				break;
			}
			else{
				$ok = 1;
				continue;
			}
		}
		else{
			$ok = 1;
			continue;
		}
	}
	if($ok == 1){
		header("Location: ../pageConnexion/pageConnexionE.php");
	}
}

function debug($x){
	echo "<pre>";
	print_r($x);
	echo "</pre>";
	
}
?>