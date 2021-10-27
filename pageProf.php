<html>
<head>
	<title>Page Professeur</title>
</head>
<?php
session_start();
include ("fonction.php");
if ($_SESSION["pseudo"] == "prof01"){
	$colonne = 0;
	$matiere = "Mathématiques";
}
else if ($_SESSION["pseudo"] == "prof02"){
	$colonne = 1;
	$matiere = "Anglais";
}
else if ($_SESSION["pseudo"] == "prof03"){
	$colonne = 2;
	$matiere = "Programmation";
}
else if ($_SESSION["pseudo"] == "prof04"){
	$colonne = 3;
	$matiere = "Algorithmie";
}
else if ($_SESSION["pseudo"] == "prof05"){
	$colonne = 4;
	$matiere = "Economie";
}

echo"<link rel='stylesheet' href='css/projet_css1.css' />";
echo"<h1>Bienvenue sur la page ".$matiere."</h1>";
echo"<hr><br>";
echo"<div id='barre'>";
		echo"<li style='color:white;'>Consulter</li>";
echo"</div>";
echo"<table border='1' cellpadding='10' cellspacing='3'>";
echo"<tr><td>".$matiere."</td></tr>";
for($a=1; $a<=20; $a++){
	if($a < 10){
		$file = "e100".$a."-vote.csv";
		if(file_exists($file)){
			$pointeur = fopen($file, "r");
			echo"<tr>";
			$ligne = fgetcsv($pointeur, 1024);
			if($ligne[$colonne] != 0){
				echo"<td><h1>".$ligne[$colonne]."</h1></td>";
				echo"</tr>";
			}
		}
	}
	else{
		$file = "e10".$a."-vote.csv";
		if(file_exists($file)){
			$pointeur = fopen($file, "r");
			echo"<tr>";
			$ligne = fgetcsv($pointeur, 1024);
			if($ligne[$colonne] = 0){
				echo"<td><h1>".$ligne[0][$colonne]."</h1></td>";
				echo"</tr>";
			}
		}
	}
}
echo"</table>";
echo"La moyenne est de ".moyenne($colonne);
?>
<form method = "get" action = "logout.php">
<input type="submit" value="Logout" class="button"/>