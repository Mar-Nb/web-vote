<?php
session_start();

$ue1 = $_POST['ue1'];
$ue2 = $_POST['ue2'];
$ue3 = $_POST['ue3'];
$ue4 = $_POST['ue4'];
$ue5 = $_POST['ue5'];


$file = $_SESSION["pseudo"]."-vote.csv";
$file2 = "vote.csv";

if(file_exists($file)){
	for($i = 0; $i < 5; $i++){
		$pointeur = fopen($file, "r");
		$ligne = fgetcsv($pointeur, 1024);
		if($ligne[$i] != 0){
			if($i == 0){
				$ue1 = $ligne[$i];
			}
			if($i == 1){
				$ue2 = $ligne[$i];
			}	
			if($i == 2){
				$ue3 = $ligne[$i];
			}	
			if($i == 3){
				$ue4 = $ligne[$i];
			}	
			if($i == 4){
				$ue5 = $ligne[$i];
			}
		}
	}
	$ligne = array($ue1,$ue2,$ue3,$ue4,$ue5);
	$pointeur=fopen($file,"w");
	$pointeur2=fopen($file2, "w");
	fputcsv($pointeur, $ligne);
	fputcsv($pointeur2, $ligne);
	fclose($pointeur);
	fclose($pointeur2);
}
else{
	$ligne = array($ue1,$ue2,$ue3,$ue4,$ue5);
	$pointeur=fopen($file,"a");
	$pointeur2=fopen($file2, "a");
	fputcsv($pointeur, $ligne);
	fputcsv($pointeur2, $ligne);
	fclose($pointeur);
	fclose($pointeur2);
}
header("Location: ./pagePrincipale.php");
?>