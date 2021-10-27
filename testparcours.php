<head>
	<title>Page Administrateur</title>
</head>
<?php
include ("fonction.php");
echo"<link rel='stylesheet' href='css/projet_css1.css' />";
echo"<h1>Bienvenue sur la page Administrateur</h1>";
echo"<hr>";

$tab = false;
for($a=1; $a<=20; $a++){
	if($a < 10){
		$file = "e100".$a."-vote.csv";
		if(file_exists($file))
			$tab = true;
	}
}
echo"<div id='barre'>";
		echo"<li style='color:white;'>Consulter</li>";
echo"</div><br>";

if($tab){
	echo"<div id='tableau'>";
	echo"<table border='1' width='100%' cellpadding='9' cellspacing='3'>";
	echo"<tr><th><h2>Mathématiques</h2></th>
	<th><h2>Anglais</h2></th>
	<th><h2>Programmation</h2></th>
	<th><h2>Algorithmie</h2></th>
	<th><h2>Économie</h2></th></tr>";
	for($a=1; $a<=20; $a++){
		if($a < 10){
			$file = "e100".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					echo"<tr>";
					$ligne = fgetcsv($pointeur, 1024);
					$i = 0;
					while($i != sizeof($ligne)){
						if($ligne[$i] == 0){
							echo"<td><center><font size = +3/>X</center></td>";
							$i++;
						}
						else if($ligne[$i] < 3 && isset($_POST['scales'])){
							echo ecrireEnRouge($ligne[$i]);
							$i++;
						}
						else{
							echo"<td><center><h1>".$ligne[$i]."</h1></center></td>";
							$i++;
						}
					}
					echo"</tr>";
					break;
				}
			}
		}
		else{
			$file = "e10".$a."-vote.csv";
			if(file_exists($file)){
				$pointeur = fopen($file, "r");
				while (!feof($pointeur)){
					echo"<tr>";
					$ligne = fgetcsv($pointeur, 1024);
					$i = 0;
					while($i != sizeof($ligne)){
						if($ligne[$i] == 0){
							echo"<td><center><font size = +3/>X</center></td>";
							$i++;
						}
						else if($ligne[$i] < 3 && isset($_POST['scales'])){
							echo ecrireEnRouge($ligne[$i]);
							$i++;
						}
						else{
							echo"<td><center><h1>".$ligne[$i]."</h1></center></td>";
							$i++;
						}
					}
					echo"</tr>";
					break;
				}
			}
		}
	}
	echo"</table>";
	echo"</div>";

	echo"<br><hr><br>";

	echo"<table border='1' cellpadding='10' cellspacing='3'>";
	echo"<tr><th></th><th><h2>Mathématiques</h2></th><th><h2>Anglais</h2></th><th><h2>Programmation</h2></th><th><h2>Algorithmie</h2></th><th><h2>Économie</h2></th></tr>";
	echo"<tr><td>Moyenne</td><td>".moyenne(0)."</td><td>".moyenne(1)."</td><td>".moyenne(2)."</td><td>".moyenne(3)."</td><td>".moyenne(4)."</td></tr>";
	echo"<tr><td>Ecart-type</td><td>".ecart_type(0)."</td><td>".ecart_type(1)."</td><td>".ecart_type(2)."</td><td>".ecart_type(3)."</td><td>".ecart_type(4)."</td></tr>";
	echo"</table><br><br>";
	echo"<table><tr>";
	echo"<form method='post'>";
	echo"<td><input type='checkbox' id='scales' name='scales'/>";
	echo"<label for='rouge'>Mettre en rouge les notes en dessous de la moyenne</label></td>";
	echo"<td><input type='submit' class='button' name='redButton' value='Appliquer'/></td></tr>";
	echo"</form>";
	echo"<form action='pdf.php'>";
	echo"<tr><td><input type='submit' class='button' name='pdf' value='PDF'>";
	echo"</form>";
	echo "<form method = 'get' action = 'logout.php'>
	<input type='submit' value='Logout' class='button'/></td>";
	echo"</tr></table>";

}
else{
	echo"<div class='barreErr'>";
		echo"<li>Il n'y a aucun vote à consulter.</li>";
	echo"</div>";
	echo"<br><br><br><hr><br>";
	echo "<form method = 'get' action = 'logout.php'>
	<input type='submit' value='Logout' class='button'/>";
}
?>
