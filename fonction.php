<?php

function moyenne($matiere){
	$resultat = 0;
	$compteur = 0;
	for($a=1; $a<=20; $a++){
		if($a < 10){
			$file = "e100".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					$ligne = fgetcsv($pointeur, 1024);
					if($ligne[$matiere] != 0){
						$resultat = $resultat + $ligne[$matiere];
						$compteur = $compteur + 1;
					}
				}
			}
		}
		else{
			$file = "e10".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					$ligne = fgetcsv($pointeur, 1024);
					if($ligne[$matiere] != 0){
						$resultat = $resultat + $ligne[$matiere];
						$compteur = $compteur + 1;
					}
				}
			}
		}
	}
	if ($compteur == 0){
		return 0;
	}
	else{
		return round($resultat / $compteur, 2, PHP_ROUND_HALF_UP);
	}
}

function ecart_type($matiere){
	$resultat2 = 0;
	$compteur2 = 0;
	for($a=1; $a<=20; $a++){
		if($a < 10){
			$file = "e100".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					$ligne = fgetcsv($pointeur, 1024);
					if($ligne[$matiere] != 0){
						$resultat2 = $resultat2 + ($ligne[$matiere] ** 2);
						$compteur2 = $compteur2 + 1;
					}
				}
			}
		}
		else{
			$file = "e10".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					$ligne = fgetcsv($pointeur, 1024);
					if($ligne[$matiere] != 0){
						$resultat2 = $resultat2 + ($ligne[$matiere] ** 2);
						$compteur2 = $compteur2 + 1;
					}
				}
			}
		}
	}
	if($compteur2 < 2){
		return 0;
	}
	else{
		$resultat2 = $resultat2 * (1/$compteur2);
		$resultat2 = $resultat2 - (moyenne($matiere) ** 2);
		return round(sqrt($resultat2), 2, PHP_ROUND_HALF_UP);
	}
}

function ecrireEnRouge($text){
	echo "<td style='background-color:red;'><center><h1>".$text."</h1></center></td>";
}


?>