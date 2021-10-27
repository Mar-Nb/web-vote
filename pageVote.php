<HTML>
<head>
	<meta charset="utf-8" />
	<title>Page Vote</title>
</head>
<?php
session_start();
$file = $_SESSION["pseudo"]."-vote.csv";

if(file_exists($file)){
	echo"<HTML>";
	echo"<link rel='stylesheet' href='css/projet_css1.css' />";
	echo"<center>";
	echo"<h1> Voici le formulaire de vote de ".$_SESSION["pseudo"]."</h1>";
	echo"<hr>";
	echo"<div id='barre'>";
			echo"<li style='color:white;'>Voter</li>";
	echo"</div>";
	
	echo"<form method = 'post' , action = 'actionVote.php'>";
	echo"<fieldset class='description'>";
	echo"<p><font color='red' size='+2'>Laisser un 0 dans la case si vous ne souhaitez pas voter maintenant</font><p>";
	echo"<p>Le barême est le suivant :<br>";
	echo"<table>";
	echo"<tr><td>1 : </td><td>Très mécontent</td></tr>";
	echo"<tr><td>2 : </td><td>Mécontent </td></tr>";
	echo"<tr><td>3 : </td><td>Moyen </td></tr>";
	echo"<tr><td>4 : </td><td>Satisfait </td></tr>";
	echo"<tr><td>5 : </td><td>Très satisfait </td></tr>";
	echo"</table>";
	echo"</fieldset>";
	echo"<br><br>";
	
	echo"<table width='400'>";
	for($i = 0; $i < 5; $i++){
		$pointeur = fopen($file, "r");
		$ligne = fgetcsv($pointeur, 1024);
		if($ligne[$i] == 0){
			if($i == 0){
				echo"<tr><td>Mathématiques (UE1) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue1'/></td></tr>";
			}
			if($i == 1){
				echo"<tr><td>Anglais (UE2) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue2'/></td></tr>";
			}
			if($i == 2){
				echo"<tr><td>Programmation (UE3) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue3'/></td></tr>";
			}
			if($i == 3){
				echo"<tr><td>Algorithmie (UE4) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue4'/></td></tr>";
			}
			if($i == 4){
				echo"<tr><td>Economie (UE5) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue5'/></td></tr>";
			}
		}
		else{
			if($i == 0){
				echo"<tr><td>Mathématiques (UE1) : </td><td>".$ligne[$i]."</td></tr>";
			}
			if($i == 1){
				echo"<tr><td>Anglais (UE2) : </td><td>".$ligne[$i]."</td></tr>";
			}
			if($i == 2){
				echo"<tr><td>Programmation (UE3) : </td><td>".$ligne[$i]."</td></tr>";
			}
			if($i == 3){
				echo"<tr><td>Algorithmie (UE4) : </td><td>".$ligne[$i]."</td></tr>";
			}
			if($i == 4){
				echo"<tr><td>Economie (UE5) : </td><td>".$ligne[$i]."</td></tr>";
			}
		}
	}
	echo"</table>";
	echo"</center>";
	// echo"<center>";
	// echo"</form>";
	
	echo"<tr><td><input type='submit' value='Envoyer' class='button'/></td>";
	echo"</form>";
	
	echo"<form method = 'get' action = 'logout.php'>";
	echo"<br><input type='submit' value='Logout' class='button'/>";
	echo"</form>";
	// echo"</center>";
	echo"</HTML>";
}
else{
	echo"<HTML>";
	echo"<link rel='stylesheet' href='css/projet_css1.css' />";
	echo"<center>";
	echo"<h1> Voici le formulaire de vote de ".$_SESSION["pseudo"]."</h1>";
	echo"<hr>";
	echo"<div id='barre'>";
			echo"<li style='color:white;'>Voter</li>";
	echo"</div>";
	
	
	
	echo"<form method = 'post' , action = 'actionVote.php'>";
	echo"<fieldset class='description'>";
	echo"<p><font color='red' size='+2'>Laisser un 0 dans la case si vous ne souhaitez pas voter maintenant</font><p>";
	echo"<p>Le barême est le suivant :<br>";
	echo"<table>";
	echo"<tr><td>1 : </td><td>Très mécontent</td></tr>";
	echo"<tr><td>2 : </td><td>Mécontent </td></tr>";
	echo"<tr><td>3 : </td><td>Moyen </td></tr>";
	echo"<tr><td>4 : </td><td>Satisfait </td></tr>";
	echo"<tr><td>5 : </td><td>Très satisfait </td></tr>";
	echo"</table>";
	echo"</fieldset>";
	echo"<br><br>";
	
	echo"<table width='400'>";
	echo"<tr><td>Mathématiques (UE1) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue1'/></td>";
	echo"<tr><td>Anglais (UE2) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue2'/></td>";
	echo"<tr><td>Programmation (UE3) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue3'/></td>";
	echo"<tr><td>Algorithmie (UE4) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue4'/></td>";
	echo"<tr><td>Economie (UE5) : </td><td><input type='number' value='0' step='1' min='0' max='5' name='ue5'/></td>";
	echo"</table>";
	echo"</center>";
	echo"<br><br>";
	
	echo"<tr><td><input type='submit' value='Envoyer' class='button'/></td>";
	echo"</form>";
	
	echo"<form method = 'get' action = 'logout.php'>";
	echo"<td><input type='submit' value='Logout' class='button'/></td></tr>";
	echo"</form>";
	// echo"</center>";
	echo"</HTML>";
}
?>