<?php
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$_SESSION["pseudo"] = $pseudo;
$_SESSION["mdp"] = $mdp;

$file = $pseudo.".csv";
$file2 = "idadmin.csv";

if(empty($_SESSION["pseudo"]) == 1 && empty ($_SESSION["mdp"]) == 1){
	header("Location: ../pageConnexion/pageConnexionA.php");
}
else{
	if(file_exists($file2)){
		$pointeur = fopen($file2, "r");
		while(!feof($pointeur)){
			$ligne = fgetcsv($pointeur, 1024);
			
			foreach($ligne as $a){
				if($pseudo == $ligne[0]){
					if($mdp == $ligne[1]){
						header("Location: ../testparcours.php"); 
					}
					else{
						header("Location: ../pageConnexion/pageConnexionA.php");
					}
				}
				else{
					header("Location: ../pageConnexion/pageConnexionA.php");
				}
			}
		}
		
	}
}
?>