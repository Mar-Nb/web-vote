<?php
session_start();
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$_SESSION["pseudo"] = $pseudo;
$_SESSION["mdp"] = $mdp;

$file2 = "idprofs.csv";

if(empty($_SESSION["pseudo"]) == 1 && empty ($_SESSION["mdp"]) == 1){
	header("Location: ../pageConnexion/pageConnexionP.php");
}
else{
	if(file_exists($file2)){
		$pointeur = fopen($file2, "r");
		$ok = 0;
		while(!feof($pointeur)){
			$ligne = fgetcsv($pointeur, 1024);
			if($pseudo == $ligne[0] ){
				if($mdp == $ligne[1]){
					header("Location: ../pageProf.php");
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
			header("Location: ../pageConnexion/pageConnexionP.php");
		}
	}
}
?>