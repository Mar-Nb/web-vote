<HTML>
<meta charset="utf-8" />
<head><link rel='stylesheet' type='text/css' href='../css/projet_css1.css' />
<title>Page Connexion Élève</title></head>
<h1>Page de connexion élève</h1><hr>

<div id="barre">
			<li><a href="../pagePrincipale.php">Accueil</a></li>
			<li><a href="pageConnexionP.php">Professeur</a></li>
			<li><a href="pageConnexionA.php">Administrateur</a></li>
</div>
	
<fieldset class='field'><legend> Ajout </legend>
<form action='../actionConnexion/actionConnexionE.php' method='post'>
<table width='400' cellspacing='5'>
<tr><td>Pseudo : </td><td><input type='text' name='pseudo'></td>
<tr><td>Mot de passe : </td><td><input type='password' name='mdp'></td>
<tr><td>&nbsp;</td><td><input type='submit' name='envoi' value='Connexion' class="button"></td>
</table>
</form>
</fieldset>